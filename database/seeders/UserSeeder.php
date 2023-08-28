<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Rajesh Budhathoki',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
        ]);

        User::factory()->count(10)->create();
    }
}
