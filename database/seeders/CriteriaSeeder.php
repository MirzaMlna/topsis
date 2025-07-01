<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('criterias')->insert([
            [
                'name' => 'Jumlah Follower',
                'type' => 'Benefit',
                'weight' => 30,
                'unit' => 'Orang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Engagement Rate',
                'type' => 'Benefit',
                'weight' => 25,
                'unit' => 'Persen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Relevansi Konten',
                'type' => 'Benefit',
                'weight' => 20,
                'unit' => 'Skor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kualitas Konten',
                'type' => 'Benefit',
                'weight' => 10,
                'unit' => 'Skor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Audience Demografi',
                'type' => 'Benefit',
                'weight' => 10,
                'unit' => 'Skor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biaya',
                'type' => 'Cost',
                'weight' => 5,
                'unit' => 'Rupiah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
