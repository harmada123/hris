@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Department
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                {!! Form::model($dept,['method'=>'Patch','action'=>['DepartmentController@update',$dept],'files'=>true]) !!}
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