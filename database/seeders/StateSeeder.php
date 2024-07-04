<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['name' => 'Phnom Penh',],
            ['name' => 'Siem Reap',],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
