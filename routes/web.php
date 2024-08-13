<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimeEntryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Project routes
Route::get('/projects', [ProjectController::class, 'index']);

// Task routes
Route::get('/tasks', [TaskController::class, 'index']);

// Time Entry routes
Route::get('/time-entries/create', [TimeEntryController::class, 'create']);
Route::post('/time-entries', [TimeEntryController::class, 'store']);
Route::get('/time-entries', [TimeEntryController::class, 'index'])->name('time-entries.index');
Route::get('/report', [TimeEntryController::class, 'report']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/reports/search', [ReportController::class, 'search'])->name('reports.search');

