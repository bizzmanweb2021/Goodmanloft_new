<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_charge extends Model
{
    use HasFactory;
    protected $fillable=['country_name','delivery_amount','id','Country_id'];

}
