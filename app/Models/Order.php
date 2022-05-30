<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'payment_method',
        'address_line_1',
        'address_line_2',
        'order_currency',
        'postal_code',
        'country_code',
        'email_address',
        'coupon_code',
        'discount_amount',
        'shipping_charge',
        'how_may_discount',
        'discount_type',
        'after_discount_price',
        'order_total',
        'total',
        'payment_status',
        'transaction_id',
    ];
}
