<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClubMembership;

class ClubMembershipsTableSeeder extends Seeder
{
    public function run()
    {
        ClubMembership::insert([
            ['student_id' => 1, 'club_id' => 1, 'role' => 'General'],
            ['student_id' => 2, 'club_id' => 2, 'role' => 'Executive'],
            ['student_id' => 3, 'club_id' => 3, 'role' => 'General'],
        ]);
    }
}

