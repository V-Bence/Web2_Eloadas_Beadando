<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pilota;

class PilotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pilota::create([
            'nev' => 'Lewis Hamilton',
            'nem' => 'F',
            'szuldat' => '1985-01-07',
            'nemzet' => 'brit',
        ]);

        Pilota::create([
            'nev' => 'Max Verstappen',
            'nem' => 'F',
            'szuldat' => '1997-09-30',
            'nemzet' => 'holland',
        ]);

        Pilota::create([
            'nev' => 'Charles Leclerc',
            'nem' => 'F',
            'szuldat' => '1997-10-16',
            'nemzet' => 'monacói',
        ]);
    }
}