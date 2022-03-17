<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'order_unique',
        'user_id',
        'payment_method',
        'shipping_method',
        'billing_id',
        'shipping_id',
        'status_id',
        'quantity',
        'order_sum',
        'in_house_status',
        'coupon_code',
        'discount_amount',
        'discount_type',
        'after_discount_price',
        'shipping_charge',
        'payment_status',
        'total',

    ];
}
