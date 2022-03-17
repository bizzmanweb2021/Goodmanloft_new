<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['Product_name','Category_id','SubCategory_id','gallery_photo','product_id','Product_Size','Product_Dimension','Product_Description','Quantity','Pattern','Price','color','Weight','Shape','Brand','Product_image'];

    // public function wishlist()
    // {
    //     return $this->hasMany(Wishlist::class);
    // }
    // public function users()
    // {
    //     return $this->belongsToMany(User::class,'wishlists');
    // }
    // public function subCategories()
    // {
    //     return $this->belongsTo(subcategory::class,'SubCategory_id');
    // }

}
