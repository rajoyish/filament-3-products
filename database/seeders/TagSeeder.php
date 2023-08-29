<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'summer sale']);
        Tag::create(['name' => 'new edition']);
        Tag::create(['name' => 'trending']);
        Tag::create(['name' => 'stock clearance']);
        Tag::create(['name' => 'free shipping']);
        Tag::create(['name' => 'winter sale']);
    }
}
