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
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'price' => 999,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Google Pixel 7 Pro',
                'price' => 899,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),

            ],
            [
                'name' => 'MacBook Pro M2',
                'price' => 1299,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),

            ],
            [
                'name' => 'Dell XPS 13 Plus',
                'price' => 1199,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon Gen 10',
                'price' => 1499,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Airpods Pro',
                'price' => 249,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Apple Watch Series 7',
                'price' => 399,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Samsung Galaxy Watch 4',
                'price' => 249,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Google Pixel Buds A-Series',
                'price' => 99,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Nintendo Switch OLED',
                'price' => 349,
                'category_id' => rand(1, 5),
                'status' => 'in stock',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'PlayStation 5',
                'price' => 499,
                'category_id' => rand(1, 5),
                'status' => 'sold out',
                'is_active' => rand(true, false),
            ],
            [
                'name' => 'Xbox Series X',
                'price' => 499,
                'category_id' => rand(1, 5),
                'status' => 'sold out',
                'is_active' => rand(true, false),
            ],
        ];

        Product::insert($products);
    }
}
