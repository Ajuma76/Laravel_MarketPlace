<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
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
                'name' =>'Wilkerson Dinning Set',
                'price' =>'889.09USD',
                'description'=>'Dinning set with a round table and six chairs',
                'category'=>'Home',
                'gallery' => '/img/bed.jpg'

            ],
        ]);
    }
}
