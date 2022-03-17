<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping_charge extends Model
{
    use HasFactory;
    protected $fillable=['pickup_mode','amount','id'];

}
