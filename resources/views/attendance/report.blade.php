@extends('layouts.hr')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Generate Report</div>
                    <div class="panel-body">
                        {!! Form::open(['method'=>'post','action'=>'GenerateReportController@downloadExcel']) !!}
                        <div class="form-group">
                            {{Form::label('from','From:')}}
                            {{Form::date('from',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('to','To:')}}
                            {{Form::date('to',null,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::submit('Generate Report',['class'=>'btn btn-info'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()