<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table= "products" ;

    protected $fillable=['product_name','Category_id','SubCategory_id','stock_availability','gallery_photo','Product_Size','Product_Dimension','Product_Description','Quantity','Pattern','Price','Color','Weight','Shape','sale','new','discount','Brand','product_image'];

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
