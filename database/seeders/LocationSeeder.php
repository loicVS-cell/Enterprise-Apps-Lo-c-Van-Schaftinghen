<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Location::create([
            'name' => 'Cafe De Koepel',
            'address' => 'Grote Markt 12, 2000 Antwerpen',
            'capacity' => 80,
        ]);

        \App\Models\Location::create([
            'name' => 'Brussels Expo',
            'address' => 'Heysel 1, 1020 Brussel',
            'capacity' => 5000,
        ]);

        \App\Models\Location::create([
            'name' => 'Design Center',
            'address' => 'Korenmarkt 8, 9000 Gent',
            'capacity' => 150,
        ]);

        \App\Models\Location::create([
            'name' => 'Tech Campus',
            'address' => 'Ahmad Ibn \'Arabi, 3000 Leuven',
            'capacity' => 300,
        ]);

        \App\Models\Location::create([
            'name' => 'RAI Amsterdam',
            'address' => 'Europaplein 24, 1078 GZ Amsterdam',
            'capacity' => 10000,
        ]);

        \App\Models\Location::create([
            'name' => 'Palais des Congrès',
            'address' => '2 Place de la Porte Maillot, 75017 Parijs',
            'capacity' => 2500,
        ]);

        \App\Models\Location::create([
            'name' => 'Berlin Convention Center',
            'address' => 'Alexanderstraße 11, 10178 Berlijn',
            'capacity' => 4000,
        ]);

        \App\Models\Location::create([
            'name' => 'ExCeL London',
            'address' => 'Royal Victoria Dock, London E16 1XL',
            'capacity' => 6000,
        ]);

        \App\Models\Location::create([
            'name' => 'World Forum',
            'address' => 'Churchillplein 10, 2517 JW Den Haag',
            'capacity' => 1200,
        ]);
    }
}
