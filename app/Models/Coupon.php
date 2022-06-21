<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable=['id','coupon_code','coupon_name','coupon_description','start_date','end-date','status','discount_type','discount_amount','minimum_limit','Banner','promotion'];
}
