<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Breville Barista Touch Impress',
            'price' => 69995,
            'image' => 'product_photos/7.png',
        ]);

        Product::create([
            'name' => 'Breville Barista Express Machine',
            'price' => 69995,
            'image' => 'product_photos/2.png',
        ]);

        Product::create([
            'name' => 'Breville Barista Bambino Plus',
            'price' => 69995,
            'image' => 'product_photos/3.png',
        ]);

        Product::create([
            'name' => 'Breville Barista Smart Grinder',
            'price' => 69995,
            'image' => 'product_photos/4.png',
        ]);

        Product::create([
            'name' => 'Breville Barista Presicion Brewer',
            'price' => 69995,
            'image' => 'product_photos/5.png',
        ]);

        Product::create([
            'name' => 'Breville Barista Vertuo Aerpress',
            'price' => 69995.95,
            'image' => 'product_photos/6.png',
        ]);
    }
}
