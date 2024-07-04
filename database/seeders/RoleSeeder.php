<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'slug' => 'admin',
            'name' => 'Admin',
        ]);

        Role::factory()->create([
            'slug' => 'seller',
            'name' => 'Seller',
        ]);

        Role::factory()->create([
            'slug' => 'buyer',
            'name' => 'Buyer',
        ]);
    }
}
