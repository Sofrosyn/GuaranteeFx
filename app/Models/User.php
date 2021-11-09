<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasFactory,
        HasMediaTrait,
        Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'email',
        'country_id',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'bool',
    ];

    public function getAvatarUrlAttribute()
    {
        if (!$media = $this->getFirstMedia('avatar')) {
            return asset('images/avatar_placeholder.png');
        }

        return $media->getFullUrl();
    }

    public function getIsSubscribedAttribute()
    {
        return $this->completed_payments()->exists();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function completed_payments()
    {
        return $this->payments()->where('status', 'paid')->whereNotNull('paid_at');
    }
}
