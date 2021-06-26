<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([

            [
                'name'=>'Motorola',
                'price'=>'800',
                'category'=>'Mobile',
                'description'=>'New Iphone new brand',
                'gallary'=>"/Images/m1.jpg"
            ],
        ]);


    }
}
