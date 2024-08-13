@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 align="center">Report</h2>
    <input type="text" id="search" class="form-control" placeholder="Search by project name...">

    <div id="report-results" class="mt-4">
        <!-- The filtered report will be injected here by AJAX -->
    </div>
</div>


@endsection

@section('java_script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();
            $.ajax({
                url: '{{ route("reports.search") }}',
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    let output = '';
                    let count = 0;
                    output += `
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="3">Report</th>
                                    </tr>
                                    <tr>
                                        <th>SNo</th>
                                        <th>Task Name</th>
                                        <th>Task Hours</th>
                                    </tr>
                                </thead>
                                <tbody>`;
                    data.forEach(function(project) {
                        count++;
                        output += `
                                <tr>
                                    <td>`+count+`</td>
                                    <td>${project.project_name}</td>
                                    <td>${project.total_hours}</td>
                                </tr>`;

                        project.tasks.forEach(function(task, index) {
                            output += `
                                <tr>
                                    <td></td>
                                    <td>${task.task_name}</td>
                                    <td>${task.task_hours}</td>
                                </tr>`;
                        });


                    });
                    output += `
                                </tbody>
                            </table>`;

                    $('#report-results').html(output);
                }
            });
        });
    });
</script>
@endsection
