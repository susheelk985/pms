<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('report.index', compact('projects'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $projects = Project::with(['tasks.timeEntries'])
            ->where('name', 'like', "%{$query}%")
            ->get();

        $report = [];

        foreach ($projects as $project) {
            $projectData = [
                'project_name' => $project->name,
                'total_hours' => 0,
                'tasks' => []
            ];

            foreach ($project->tasks as $task) {
                $taskHours = $task->timeEntries->sum('hours');

                $projectData['tasks'][] = [
                    'task_name' => $task->name,
                    'task_hours' => $taskHours
                ];

                $projectData['total_hours'] += $taskHours;
            }

            $report[] = $projectData;
        }

        return response()->json($report);
    }
}
