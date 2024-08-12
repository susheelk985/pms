<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create(['name' => 'Project 1', 'status' => 'Active']);
        Project::create(['name' => 'Project 2', 'status' => 'Inactive']);
        Project::create(['name' => 'Project 3', 'status' => 'Active']);
        Project::create(['name' => 'Project 4', 'status' => 'Active']);
        Project::create(['name' => 'Project 5', 'status' => 'Active']);
    }
}
