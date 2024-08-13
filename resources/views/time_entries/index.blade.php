@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 align="center">Time Entry Listing</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Project Name</th>
                    <th>Task Name</th>
                    <th>Hours</th>
                    <th>Date</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($timeEntries as $timeEntry)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $timeEntry->project->name }}</td>
                        <td>{{ $timeEntry->task->name }}</td>
                        <td>{{ $timeEntry->hours }}</td>
                        <td>{{ date('d-m-Y', strtotime($timeEntry->date)) }}</td>
                        <td>{{ $timeEntry->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
