<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eredmeny;

class EredmenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eredmeny::create([
            'datum' => '2023-03-05',
            'pilotaaz' => 1, 
            'helyezes' => 5,
            'hiba' => '',
            'csapat' => 'Mercedes',
            'tipus' => 'W14',
            'motor' => 'Mercedes',
        ]);

        Eredmeny::create([
            'datum' => '2023-03-05',
            'pilotaaz' => 2, 
            'helyezes' => 1,
            'hiba' => '',
            'csapat' => 'Red Bull',
            'tipus' => 'RB19',
            'motor' => 'Honda RBPT',
        ]);

        Eredmeny::create([
            'datum' => '2023-03-05',
            'pilotaaz' => 3, 
            'helyezes' => null,
            'hiba' => 'motorhiba',
            'csapat' => 'Ferrari',
            'tipus' => 'SF-23',
            'motor' => 'Ferrari',
        ]);
    }
}