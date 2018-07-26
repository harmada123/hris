@extends('layouts.hr')
@section('content')
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Department
            </div>
            <div class="panel-body">
                {{Form::open(['method'=>'Post','action'=>'DepartmentController@store'])}}
                <div class="form-group">
                    {{Form::label('department','Department Name:')}}
                    {{Form::text('department',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('location','Location:')}}
                    {{Form::textarea('location',null,['class'=>'form-control'])}}
                </div>
                {{Form::submit('Create Department',['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection()