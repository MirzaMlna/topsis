<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_criterias')->insert([
            // C1: Jumlah Follower
            ['criteria_id' => 1, 'sub_criteria' => 'Lebih dari 1 juta', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 1, 'sub_criteria' => '500k - 1 juta', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 1, 'sub_criteria' => '100k - 499k', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 1, 'sub_criteria' => '50k - 99k', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 1, 'sub_criteria' => 'Kurang dari 50k', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],

            // C2: Engagement Rate
            ['criteria_id' => 2, 'sub_criteria' => '> 10%', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 2, 'sub_criteria' => '8% - 10%', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 2, 'sub_criteria' => '5% - 7%', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 2, 'sub_criteria' => '3% - 4%', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 2, 'sub_criteria' => '< 3%', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],

            // C3: Relevansi Konten
            ['criteria_id' => 3, 'sub_criteria' => 'Sangat Relevan', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 3, 'sub_criteria' => 'Relevan', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 3, 'sub_criteria' => 'Cukup Relevan', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 3, 'sub_criteria' => 'Kurang Relevan', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 3, 'sub_criteria' => 'Tidak Relevan', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],

            // C4: Kualitas Konten
            ['criteria_id' => 4, 'sub_criteria' => 'Sangat Baik', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 4, 'sub_criteria' => 'Baik', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 4, 'sub_criteria' => 'Cukup', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 4, 'sub_criteria' => 'Kurang', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 4, 'sub_criteria' => 'Buruk', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],

            // C5: Audience Demografi
            ['criteria_id' => 5, 'sub_criteria' => 'Sesuai Target 100%', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 5, 'sub_criteria' => 'Sesuai Target >75%', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 5, 'sub_criteria' => 'Sesuai Target >50%', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 5, 'sub_criteria' => 'Sesuai Target >25%', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 5, 'sub_criteria' => 'Tidak Sesuai Target', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],

            // C6: Biaya (Cost)
            ['criteria_id' => 6, 'sub_criteria' => '< Rp500.000', 'weight' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 6, 'sub_criteria' => 'Rp500.000 - Rp1.000.000', 'weight' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 6, 'sub_criteria' => 'Rp1.000.000 - Rp2.000.000', 'weight' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 6, 'sub_criteria' => 'Rp2.000.000 - Rp5.000.000', 'weight' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['criteria_id' => 6, 'sub_criteria' => '> Rp5.000.000', 'weight' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
