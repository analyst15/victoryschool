<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubsTableSeeder extends Seeder
{
    public function run()
    {
        Club::insert([
            ['club_name' => 'Debating Club', 'patron' => 'Mr. Otieno', 'registration_fee' => 200],
            ['club_name' => 'Chess Club', 'patron' => 'Ms. Kamau', 'registration_fee' => 200],
            ['clubname' => 'Science Club', 'patron' => 'Dr. Mwangi', 'registration_fee' => 250],
        ]);
    }
}
