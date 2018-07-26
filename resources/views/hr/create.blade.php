@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">

        <div class="panel-heading">
            All Employee Users
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                {{Form::open(['method'=>'POST','action'=>'HrUsersController@store','files'=>true])}}
                <div class="form-group">
                    {{Form::label('name','First Name:')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('middlename','Middle Name:')}}
                    {{Form::text('middlename',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('lastname','Last Name:')}}
                    {{Form::text('lastname',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::text('email',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password:') !!}
                    {!! Form::password('password',['class'=> 'form-control' ]) !!}
                </div>
                <div class="form-group">
                    {{Form::label('job_id','Job Role:')}}
                    {{Form::select('job_id',array('Choose Options') + $jobs,null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id','Picture:') !!}
                    {!! Form::file('photo_id',['class'=>'btn']) !!}
                </div>
                <div class="form-group">
                    {{Form::submit('Create Users',['class'=>'btn btn-success'])}}
                </div>

                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection