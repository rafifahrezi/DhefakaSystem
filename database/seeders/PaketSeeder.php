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
        $paket = \App\Models\Paket::create([
            'name' => 'Gerbang Premium',
            'slug' => 'premium',
            'price' => 11500000,
        ]);

        $paket->features()->createMany([
            ['content' => 'SLIDING GATE KAPASITAS 2500 KG BRAND ISG MESIN '],
            ['content' => '4 meter gear rack (4 pcs @1m)'],
            ['content' => ' 2 remote control'],
            ['content' => 'Frame: Hollow Custom'],
            ['content' => 'H-Beam Custom'],
        ]);
    }
}
