<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['name' => 'Banteay Meanchey',],
            ['name' => 'Battambang',],
            ['name' => 'Kampong Cham',],
            ['name' => 'Kampong Cham',],
            ['name' => 'Kampong Speu',],
            ['name' => 'Kampong Thom',],
            ['name' => 'Kampo',],
            ['name' => 'Kandal',],
            ['name' => 'Kep',],
            ['name' => 'Koh Kong'],
            ['name' => 'Kratié',],
            ['name' => 'Mondulkiri',],
            ['name' => 'Oddar Meanchey',],
            ['name' => 'Pailin',],
            ['name' => 'Phnom Penh Capita',],
            ['name' => 'Preah Vihear',],
            ['name' => 'Pursat',],
            ['name' => ' Prey Veng',],
            ['name' => 'Ratanakiri',],
            ['name' => 'Siem Reap',],
            ['name' => 'Preah Sihanouk',],
            ['name' => 'Stueng Treng',],
            ['name' => 'Svay Rieng',],
            ['name' => 'Takéo',],
            ['name' => 'Tboung Khmum',],
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
