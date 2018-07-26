@extends('layouts.users')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            All Employee Users
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                {!! Form::open(['method'=>'POST','action'=>'LeaveController@store']) !!}
                {!! Form::hidden('status','Pending',['value'=>'Pending']) !!}
                {!! Form::hidden('user_id',$user->id,['value'=>$user->id]) !!}
                {!! Form::hidden('email',$user->email,['value'=>$user->email]) !!}

                <div class="form-group">
                    {!! Form::label('leave_type','Leave Type:') !!}
                    {!! Form::select('leave_type',array('Choose Leave') + $leaves ,null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('start','Start Date:') !!}
                    {!! Form::date('start',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('end','End Date:') !!}
                    {!! Form::date('end',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('reason','Reason:') !!}
                    {!! Form::textarea('reason',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit',['class'=>'btn btn-info']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection()