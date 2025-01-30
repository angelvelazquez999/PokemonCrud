<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pokemon')->insert([
            ['nombre' => 'Charizard'],
            ['tipo' => 'Fuego'],
            ['region' => 'Kanto'],
            ['nivel' => '17'],
        ]);
    }
}
