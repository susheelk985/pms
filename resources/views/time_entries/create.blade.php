@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Time Entry</h2>
    <form action="/time-entries" method="POST">
        @csrf
        <div class="form-group">
        Task ID<select name="task_id" class="form-control">
            @foreach ($tasks as $task)
                <option value="{{ $task->id }}">{{ $task->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group">
        Hours<input type="number" name="hours" min="1" class="form-control" required>
        </div>
        <div class="form-group">
        Date<input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
        Description<textarea class="form-control" name="description" ></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control">Add Time Entry</button>
        </div>
    </form>
</div>
@endsection
