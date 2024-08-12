<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create(['project_id' => 1, 'name' => 'Task 1', 'status' => 'Active']);
        Task::create(['project_id' => 1, 'name' => 'Task 2', 'status' => 'Active']);
        Task::create(['project_id' => 1, 'name' => 'Task 3', 'status' => 'Active']);
        Task::create(['project_id' => 4, 'name' => 'Task 4', 'status' => 'Active']);
        Task::create(['project_id' => 4, 'name' => 'Task 5', 'status' => 'Active']);
    }
}
