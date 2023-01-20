<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'order_id' => 1,
            'product_id' => '3',
            'product_title' => 'Mens Cotton Jacket',
            'product_price' => 5599,
            'quantity' => 1
        ]);

        DB::table('items')->insert([
            'order_id' => 1,
            'product_id' => '2',
            'product_title' => 'Mens Casual Premium Slim Fit T-Shirts ',
            'product_price' => 2230,
            'quantity' => 1
        ]);
    }
}
