<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    public function run(): void
    {
        $towns = [
            ['name' => 'Dun Penh', 'state_id' => 1],
            ['name' => 'Siem Reap', 'state_id' => 2],
        ];

        foreach ($towns as $town) {
            Town::create($town);
        }
    }
}
