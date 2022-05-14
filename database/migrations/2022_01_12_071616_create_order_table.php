<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     
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
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_unique');
            $table->string('user_id');
            $table->string('payment_method');
            $table->string('shipping_method');
            $table->integer('billing_id');
            $table->integer('status_id');
            $table->integer('quantity');
            $table->integer('order_sum');
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
        Schema::dropIfExists('orders');
    }
}
