<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 1,
            'transaction_id' => 1
        ]);
        Cart::create([
            'user_id' => 1,
            'product_id' => 2,
            'quantity' => 1,
            'transaction_id' => 1

        ]);
        Cart::create([
            'user_id' => 1,
            'product_id' => 3,
            'quantity' => 1,
            'transaction_id' => 2
        ]);
        Cart::create([
            'user_id' => 1,
            'product_id' => 10,
            'quantity' => 1,
            'transaction_id' => 3
        ]);
        Cart::create([
            'user_id' => 1,
            'product_id' => 11,
            'quantity' => 1,
            'transaction_id' => 3
        ]);
        Cart::create([
            'user_id' => 1,
            'product_id' => 12,
            'quantity' => 1,
        ]);
        Cart::create([
            'user_id' => 2,
            'product_id' => 4,
            'quantity' => 1,
            'transaction_id' => 4
        ]);
        Cart::create([
            'user_id' => 2,
            'product_id' => 5,
            'quantity' => 1,
            'transaction_id' => 4
        ]);
        Cart::create([
            'user_id' => 2,
            'product_id' => 6,
            'quantity' => 1,
            'transaction_id' => 5
        ]);
        Cart::create([
            'user_id' => 2,
            'product_id' => 7,
            'quantity' => 1,

        ]);
        Cart::create([
            'user_id' => 3,
            'product_id' => 6,
            'quantity' => 1,
            'transaction_id' => 6
        ]);
        Cart::create([
            'user_id' => 3,
            'product_id' => 7,
            'quantity' => 1,
        ]);
        Cart::create([
            'user_id' => 3,
            'product_id' => 8,
            'quantity' => 1,
        ]);
    }
}
