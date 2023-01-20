<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@mail.com',
            'address' => 'Fake Street 123',
            'state' => 'Florida',
            'city' => 'Miami',
            'zipcode' => '33125',
            'total' => 7820,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
