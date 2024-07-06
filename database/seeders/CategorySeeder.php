<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Apartment '],
            ['name' => 'Condo'],
            ['nane' => 'Hotel'],
            ['name' => 'land'],
            ['name' => 'Manor'],
            ['name' => 'Room'],
            ['name' => 'vila'],

        ];

        DB::table('categories')->insert($categories);
    }
}
