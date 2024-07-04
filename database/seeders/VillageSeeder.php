<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageSeeder extends Seeder
{
    public function run(): void
    {

        $villages = [
            ['name' => 'Phsa Chas', 'town_id' => 1],
            ['name' => 'Siem Reap', 'town_id' => 1],
        ];

        foreach ($villages as $village) {
            Village::create($village);
        }
    }
}
