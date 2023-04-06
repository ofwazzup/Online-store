<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 11; $i++) 
        DB::table('products')->insert([
            'title' => 'Product '.$i,
            'price' => rand(200, 1500),
            'in_stock' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, harum?',
        ]);
}
}
