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

        TimeEntry::create($validated);
        return redirect('/time-entries');
    }
}
