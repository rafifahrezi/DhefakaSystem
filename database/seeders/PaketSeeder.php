<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Package 2: Gerbang Standard
        $paket2 = \App\Models\Paket::create([
            'name' => 'Gerbang Standard',
            'slug' => 'standard',
            'price' => 8500000,
        ]);

        $paket2->features()->createMany([
            ['content' => 'SLIDING GATE KAPASITAS 2000 KG BRAND ISG MESIN'],
            ['content' => '3 meter gear rack (3 pcs @1m)'],
            ['content' => '1 remote control'],
            ['content' => 'Frame: Standard Hollow'],
            ['content' => 'H-Beam Standard'],
        ]);

        // Package 3: Gerbang Deluxe
        $paket3 = \App\Models\Paket::create([
            'name' => 'Gerbang Deluxe',
            'slug' => 'deluxe',
            'price' => 15000000,
        ]);

        $paket3->features()->createMany([
            ['content' => 'SLIDING GATE KAPASITAS 3000 KG BRAND ISG MESIN'],
            ['content' => '5 meter gear rack (5 pcs @1m)'],
            ['content' => '3 remote control'],
            ['content' => 'Frame: Premium Hollow Custom'],
            ['content' => 'H-Beam Reinforced Custom'],
            ['content' => 'Smart Sensor Integration'],
        ]);
    }
}
