<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alternatives')->insert([
            [
                'code' => 'ALT001',
                'social_media_name' => 'influencer_fashion',
                'social_media_platform' => 'Instagram',
                'cost_per_content' => 1000000,
                'contact' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ALT002',
                'social_media_name' => 'techreview_id',
                'social_media_platform' => 'YouTube',
                'cost_per_content' => 2500000,
                'contact' => '082233445566',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ALT003',
                'social_media_name' => 'kulinerhits',
                'social_media_platform' => 'TikTok',
                'cost_per_content' => 750000,
                'contact' => '083344556677',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ALT004',
                'social_media_name' => 'gaming_hero',
                'social_media_platform' => 'YouTube',
                'cost_per_content' => 3000000,
                'contact' => '084455667788',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'ALT005',
                'social_media_name' => 'dailyparenting',
                'social_media_platform' => 'Instagram',
                'cost_per_content' => 1250000,
                'contact' => '085566778899',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
