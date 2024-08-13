<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SNo</th>
                <th>Name</th>
                <th>Total Hours</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->tasks->sum('hours') }}</td>
            </tr>
            @foreach($project->tasks as $task)
                <tr>
                    <td></td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->hours }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
