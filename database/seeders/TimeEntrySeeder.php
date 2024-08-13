<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeEntry;

class TimeEntrySeeder extends Seeder
{
    public function run()
    {
        TimeEntry::create(['project_id' => 1,'task_id' => 1, 'hours' => 2, 'date' => '2021-02-02', 'description' => 'DB creation']);
        TimeEntry::create(['project_id' => 1,'task_id' => 1, 'hours' => 6, 'date' => '2021-02-25', 'description' => 'Bug fixing']);
        TimeEntry::create(['project_id' => 1,'task_id' => 2, 'hours' => 3, 'date' => '2021-03-28', 'description' => 'Testing']);
        TimeEntry::create(['project_id' => 1,'task_id' => 4, 'hours' => 6, 'date' => '2020-03-03', 'description' => 'User Manager']);
        TimeEntry::create(['project_id' => 4,'task_id' => 4, 'hours' => 4, 'date' => '2021-04-02', 'description' => 'Billing calculation']);
        TimeEntry::create(['project_id' => 4,'task_id' => 5, 'hours' => 8, 'date' => '2020-05-07', 'description' => 'Login and Logout']);
    }
}
