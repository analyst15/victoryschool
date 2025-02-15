<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MembershipLog;

class MembershipLogsTableSeeder extends Seeder
{
    public function run()
    {
        MembershipLog::insert([
            ['student_id' => 1, 'club_id' => 1, 'action' => 'Joined', 'log_date' => '2025-01-15'],
            ['student_id' => 2, 'club_id' => 2, 'action' => 'Left', 'log_date' => '2025-02-01'],
        ]);
    }
}
