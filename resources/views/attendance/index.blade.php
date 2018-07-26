@extends('layouts.users')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')

        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">Time In</div>
                        <div class="panel-body">
                            {!! Form::open(['method'=>'post','action'=>'AttendanceController@store']) !!}
                            {!! Form::hidden('email',Auth::user()->email,['value'=>Auth::user()->email]) !!}
                            {!! Form::hidden('email',Auth::user()->email,['value'=>Auth::user()->email]) !!}
                            {!! Form::hidden('ip',$_SERVER['REMOTE_ADDR'],['value'=>$_SERVER['REMOTE_ADDR']]) !!}
                            {!! Form::hidden('date',\Carbon\Carbon::now()->toDateString(),['value'=>\Carbon\Carbon::now()->toDateString()]) !!}
                                <div class="form-group">
                                    {!! Form::label('time','Time In:') !!}
                                    {!! Form::text('time',\Carbon\Carbon::now()->toTimeString(),['class'=>'form-control','value'=>\Carbon\Carbon::now()->toTimeString()]) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('type','Time In:') !!}
                                    {!! Form::select('type',array('Time In'=>'Time In','Time Out'=>'Time Out'),null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-5">
                                        {!! Form::submit('Punch In',['class'=>'btn btn-success']) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">Attendance</div>
                        <div class="panel-body">
                            {!! $calendar->calendar() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection()
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
@endsection()
