<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TimeEntry;
use Illuminate\Http\Request;

class TimeEntryController extends Controller
{
    public function index()
    {
        $timeEntries = TimeEntry::with('project', 'task')->get();
        // return $timeEntries;
        return view('time_entries.index', compact('timeEntries'));
    }

    public function create()
    {
        $tasks = Task::all();
        return view('time_entries.create', compact('tasks'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'task_id' => 'required|integer',
            'hours' => 'required|integer',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);
        $project_id = Task::where('id',$request->task_id)->pluck('project_id')->first();
        $new_array = array('project_id'=>$project_id);
        $findal_data = array_merge($validated, $new_array);

        TimeEntry::create($findal_data);
        return redirect('/time-entries');
    }
}
