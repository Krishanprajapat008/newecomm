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
                'name'=>'books',
                'price'=>'500',
                'category'=>'Mobile',
                'description'=>'smartphone Iphone new brand',
                'gallary'=>"https://upload.wikimedia.org/wikipedia/en/d/d5/Books_Books.JPG"
            ],
        ]);


    }
}
