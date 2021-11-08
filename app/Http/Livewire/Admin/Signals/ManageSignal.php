<?php

namespace App\Http\Livewire\Admin\Signals;

use App\Http\Livewire\Common\ConvertEmptyStringsToNull;
use App\Models\Signal;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ManageSignal extends Component
{
    use ConvertEmptyStringsToNull, WithFileUploads;

    public $title;

    /** @var null|TemporaryUploadedFile */
    public $video = null;

    public ?Signal $signal = null;

    public function mount()
    {
        $this->signal ??= new Signal();
    }

    protected array $videoValidationRule = ['required', 'mimetypes:video/mp4'];

    public function rules(): array
    {
        return  [
            'title' => ['required', 'max:150'],
        ];
    }

    public function updatedVideo()
    {
        $this->validate([
            'video' => $this->videoValidationRule,
        ]);
    }

    public function submit()
    {
        $this->validate();

        return DB::transaction(function () {
            $this->signal->fill(['title' => $this->title])->save();

            if ($this->video) {
                optional($this->signal->getFirstMedia())->delete();

                $this->signal->addMedia($this->video)->toMediaCollection();
            }

            return redirect()->route('admin.signals.index');
        });
    }

    public function render()
    {
        return view('livewire.admin.signals.manage-signal')
            ->extends('layouts.admiria.master', ['title' => 'Add Signal']);
    }
}
