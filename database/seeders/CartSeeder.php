<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carts = [
            [
                'id' => 1,
                'product_name' => 'PHP',
                'product_image' => 'https://dummyimage.com/200x200/4D588E/fff&text=PHP',
                'price' => 120,
                'quantity' => 1,
                'total' => 1200
            ],
            [
                'id' => 2,
                'product_name' => 'Laravel',
                'product_image' => 'https://dummyimage.com/200x200/E83A2D/fff&text=Laravel',
                'price' => 120,
                'quantity' => 1,
                'total' => 1200
            ],
        ];

        foreach ($carts as $key => $value) {
            Cart::create($value);
        }
    }
}
