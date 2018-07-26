@extends('layouts.hr')
@section('content')
    <div class="col-lg-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Leave Status
                <div class="panel-body">
                    {{Form::open(['method'=>'Post','action'=>'CreateLeaveController@store'])}}
                    <div class="form-group">
                        {{Form::label('leave','Leave Type:')}}
                        {{Form::text('leave',null,['class'=>'form-control'])}}
                    </div>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Leave Status
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        @if(count($leaves) > 0 )
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Role</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($leaves as $leave)
                                <tr>
                                    <td>
                                        {{$leave->id}}
                                    </td>
                                    <td>
                                        {{$leave->leave}}
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td>
                                        No Data Found
                                    </td>
                                </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()