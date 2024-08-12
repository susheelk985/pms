@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2>Manage Projects</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SNo</th>
                    <th>Project Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
