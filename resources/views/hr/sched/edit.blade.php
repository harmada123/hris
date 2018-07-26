@extends('layouts.hr')

@section('content')
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Shift Schedule
            </div>
            <div class="panel-body">
                {{Form::model($sched,['method'=>'PATCH','action'=>['ShiftManagementController@update',$sched]])}}
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
@endsection