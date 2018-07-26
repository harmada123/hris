@extends('layouts.users')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            All Employee Users
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table id="users" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Reason</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($leaves as $leave)
                    <tr>
                        <td>
                            {{$leave->id}}
                        </td>
                        <td>
                            {{$leave->start}}
                        </td>
                        <td>
                            {{$leave->end}}
                        </td>
                        <td>
                            {{$leave->reason}}
                        </td>
                        <td>
                            {{$leave->status}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
