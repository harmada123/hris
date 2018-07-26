@extends('layouts.hr')
@section('content')
    <div class="col-lg-6 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Job Role
            </div>
            <div class="panel-body">
                {{Form::model($job,['method'=>'PATCH','action'=>['HrJobController@update',$job]])}}
                <div class="form-group">
                    {{Form::label('job_id','Job Role:')}}
                    {{Form::text('job_id',null,['class'=>'form-control'])}}
                </div>
                {{Form::submit('Update Job Role',['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection()