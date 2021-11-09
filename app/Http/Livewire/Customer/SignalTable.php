<?php

namespace App\Http\Livewire\Customer;

use App\Models\Signal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\URL;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

class SignalTable extends PowerGridComponent
{
    use ActionButton;

    protected $listeners = [
        'goToVideo',
    ];


    public function booted()
    {
        $this->ensureUserHasSubscribed();
    }

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this
            ->showPerPage()
            // ->showExportOption('download', ['excel', 'csv'])
            ->showRecordCount('short')
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Signal::query()->with('media');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('title')
            ->addColumn('video_url', function (Signal $signal) {
                return optional($signal->media[0])->getFullUrl();
            })
            ->addColumn('created_at_formatted', function (Signal $signal) {
                return $signal->created_at->format('Y-m-d H:i');
            })
            ->addColumn('updated_at_formatted', function (Signal $signal) {
                return $signal->created_at->format('Y-m-d H:i');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        return [
            Column::add()
                ->title(__('TITLE'))
                ->field('title')
                ->sortable()
                ->searchable()
                ->editOnClick()
                ->makeInputText(),

            Column::add()
                ->title(__('Date'))
                ->field('created_at_formatted')
                ->searchable()
                ->sortable('created_at')
            // ->makeInputDatePicker('created_at')
            ,

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

    public function actions(): array
    {
        return [
            Button::add('video')
                ->caption(__('Watch Video'))
                ->class('')
                ->emit('goToVideo', ['id' => 'id']),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods
    |
    */

    public function update(array $data): bool
    {
        if ($data['field'] !== 'title') {
            return false;
        }

        try {
            $updated = Signal::query()->find($data['id'])->update([
                $data['field'] => is_string($data['value']) ? trim($data['value']) : $data['value']
            ]);
        } catch (QueryException $exception) {
            $updated = false;
        }
        return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success' => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }

    public function template(): ?string
    {
        return null;
    }

    public function goToVideo($data)
    {
        /** @var Signal $signal */
        $signal = Signal::query()->where('id', $data['id'])->firstOrFail();
        $video = $signal->getFirstMedia();

        $this->dispatchBrowserEvent('goToVideo', [
            'url' => URL::temporarySignedRoute('home.signals.video', now()->addHours(6), ['signal' => $signal]),
            'type' => $video->mime_type
        ]);
    }

    private function ensureUserHasSubscribed()
    {
        abort_if(!auth()->user()->is_subscribed, 403, 'Subscription is required.');
    }
}
