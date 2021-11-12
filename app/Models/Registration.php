<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Registration extends Model
{
    protected $fillable = [
        'email',
        'country_id',
        'full_name',
    ];

    public function getSignedPaymentUrl(): string
    {
        return URL::signedRoute('make_payment', ['registration' => $this]);
    }

    public function getIsSubscribedAttribute()
    {
        return $this->completed_payments()->exists();
    }

    public function getFirstNameAttribute()
    {
        return preg_split('/\s/', $this->full_name)[0] ?? '';
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'user');
    }

    public function completed_payments()
    {
        return $this->payments()->where('status', 'paid')->whereNotNull('paid_at');
    }
}
