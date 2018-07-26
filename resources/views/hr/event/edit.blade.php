@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Department
        </div>
        <div class="panel-body">
            <div class="col-md-8">
            </div>
                {{Form::submit('Create Department',['class'=>'btn btn-primary'])}}
            {{Form::close()}}
        </div>

@endsection()