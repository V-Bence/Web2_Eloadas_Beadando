<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gp;

class GpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gp::firstOrCreate(
            ['datum' => '2023-03-05', 'nev' => 'Bahreini Nagydíj'],
            ['helyszin' => 'Bahrein']
        );

        Gp::firstOrCreate(
            ['datum' => '2023-03-19', 'nev' => 'Szaúdi Nagydíj'],
            ['helyszin' => 'Dzsiddah']
        );

        Gp::firstOrCreate(
            ['datum' => '2023-04-02', 'nev' => 'Ausztrál Nagydíj'],
            ['helyszin' => 'Melbourne']
        );
    }
}
