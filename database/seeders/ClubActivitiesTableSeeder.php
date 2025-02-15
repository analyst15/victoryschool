<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClubActivity;

class ClubActivitiesTableSeeder extends Seeder
{
    public function run()
    {
        ClubActivity::insert([
            ['club_id' => 1, 'activity_name' => 'Debate Competition', 'activity_date' => '2025-03-10', 'amount_collected' => 5000],
            ['club_id' => 2, 'activity_name' => 'Chess Tournament', 'activity_date' => '2025-04-15', 'amount_collected' => 3000],
        ]);
    }
}

