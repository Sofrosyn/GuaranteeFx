<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Signal extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'title',
    ];

    public function getSignedVideoUrlAttribute()
    {
        return URL::temporarySignedRoute('pages.signals.video', now()->addHours(6), ['signal' => $this]);
    }
}
