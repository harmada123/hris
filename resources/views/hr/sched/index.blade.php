@extends('layouts.hr')

@section('content')
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Shift Schedule
            </div>
            <div class="panel-body">
                {{Form::open(['method'=>'Post','action'=>'ShiftManagementController@store'])}}
                <div class="form-group">
                    {{Form::label('schedule','Schedule:')}}
                    {{Form::text('schedule',null,['class'=>'form-control','placeholder'=>'Eg. Monday-Friday 8am-5pm'])}}
                </div>
                <div class="form-group">
                    {{Form::label('days','Working Days:')}}
                    {{Form::select('days',array(261=>'5 Working Days a week',312=>'6 Working Days a week'),null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('working_hours','Working Hours:')}}
                    {{Form::number('working_hours',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('time_in','Shift Start:')}}
                    {{Form::time('time_in',null,['class'=>'form-control'])}}
                </div>

                {{Form::submit('Create Shift Schedule',['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Schedule
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        @if(count($scheds) > 0 )
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Schedule</th>
                                <th>Shift Start</th>
                                <th>Shift End</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($scheds as $sched)
                                <tr>
                                    <td>
                                        {{$sched->id}}
                                    </td>
                                    <td>
                                        <a href={{route('sched.edit',$sched->id)}}>{{$sched->schedule}}</a>
                                    </td>
                                    <td>
                                        {{$sched->time_in}}
                                    </td>
                                    <td>
                                        {{date('H:i:s',strtotime('1 hour'. + $sched->working_hours. ' hour',strtotime($sched->time_in)))}}
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
@endsection