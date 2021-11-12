<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public const STATUS_NEW = 'new';
    public const STATUS_PAID = 'paid';

    public const GATEWAY_STRIPE = 'stripe';

    protected $fillable = [
        'user_id',
        'gateway_name',
        'gateway_reference',
        'product_type',
        'product_id',
        'status',
        'paid_at',
        'amount_paid',
        'currency',
    ];

    protected $dates = [
        'paid_at',
    ];

    public function user()
    {
        return $this->morphTo();
    }
}
