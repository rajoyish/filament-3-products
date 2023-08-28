<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 14 Pro Max',
                'price' => 1099,

            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'price' => 999,

            ],
            [
                'name' => 'Google Pixel 7 Pro',
                'price' => 899,

            ],
            [
                'name' => 'MacBook Pro M2',
                'price' => 1299,

            ],
            [
                'name' => 'Dell XPS 13 Plus',
                'price' => 1199,

            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 10',
                'price' => 1499,

            ],
            [
                'name' => 'Airpods Pro',
                'price' => 249,

            ],
            [
                'name' => 'Apple Watch Series 7',
                'price' => 399,

            ],
            [
                'name' => 'Samsung Galaxy Watch 4',
                'price' => 249,

            ],
            [
                'name' => 'Google Pixel Buds A-Series',
                'price' => 99,

            ],
            [
                'name' => 'Nintendo Switch OLED',
                'price' => 349,

            ],
            [
                'name' => 'PlayStation 5',
                'price' => 499,

            ],
            [
                'name' => 'Xbox Series X',
                'price' => 499,

            ],
        ];

        Product::insert($products);
    }
}
