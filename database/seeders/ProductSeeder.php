<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 100,
            'price' => 250,
            'barcode' => '757412547863',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 700,
            'price' => 1200,
            'barcode' => '757412547873',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'IPHONE 11',
            'cost' => 900,
            'price' => 1500,
            'barcode' => '757412547883',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'PC GAMER',
            'cost' => 790,
            'price' => 2500,
            'barcode' => '757412547893',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'curso.png'
        ]);
    }
}
