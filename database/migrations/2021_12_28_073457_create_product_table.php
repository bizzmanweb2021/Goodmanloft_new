<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('Product_Dimension');
            $table->string('Product_Description');
            $table->integer('Weight');
            $table->integer('Price');
            $table->integer('Quantity');
            $table->string('Pattern');
            $table->string('Color');
            $table->string('Shape');
            $table->string('Brand');
            $table->string('Product_Size');
            $table->string('product_image');
            $table->string('gallery_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
