<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Smartphones',
            ],
            [
                'name' => 'Computers',
            ],
            [
                'name' => 'Wearables',
            ],
            [
                'name' => 'Gaming Consoles',
            ],
            [
                'name' => 'Video Games',
            ],
        ];

        Category::insert($categories);
    }
}
