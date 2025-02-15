<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClubFinance;

class ClubFinancesTableSeeder extends Seeder
{
    public function run()
    {
        ClubFinance::insert([
            ['club_id' => 1, 'total_revenue' => 5200, 'activities_fund' => 2600, 'annual_party_fund' => 1560, 'savings' => 1040, 'school_contribution' => 1092],
            ['club_id' => 2, 'total_revenue' => 3200, 'activities_fund' => 1600, 'annual_party_fund' => 960, 'savings' => 640, 'school_contribution' => 672],
        ]);
    }
}
