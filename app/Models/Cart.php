<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['id','product_image','product_name','price','quantity','total','product_id','name','unique_id'];

public function users()
{
    return $this->belongsTo(Users::class, 'user_id', 'id');
}
}