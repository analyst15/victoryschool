<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StudentsTableSeeder::class,
            ClubsTableSeeder::class,
            ClubMembershipsTableSeeder::class,
            ClubActivitiesTableSeeder::class,
            ClubFinancesTableSeeder::class,
            MembershipLogsTableSeeder::class,
        ]);
    }
}
