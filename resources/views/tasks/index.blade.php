@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2>Manage Tasks</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Project Name</th>
                    <th>Task Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task->project->name }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
