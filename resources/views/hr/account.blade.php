@extends('layouts.users')
@section('content')
    <div class="row">
        <div class=" col-md-3 col-sm-3">
            <div class="style-box-one Style-one-clr-one">
                <a href={{url('account',Auth::user()->id)}}>
                    <span class="fa fa-5x fa-gears"></span>
                    <h5>Edit Profile</h5>
                </a>
            </div>
        </div>
        <div class=" col-md-3 col-sm-3">
            <div class="style-box-one Style-one-clr-three">
                <a href={{url('myprofile',Auth::user()->id)}}>
                    <span class="fa fa-5x fa-gears"></span>
                    <h5>Edit Profile</h5>
                </a>
            </div>

        </div>
        <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                    <a href={{url('skill',$user->id)}}>
                        <span class="fa fa-5x fa-wrench"></span>
                        <h5>Skills and Resume Update</h5>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Profile
        </div>
        <div class="panel-body">
            <div class=" col-md-8 col-sm-5">
                <div class="table-responsive">
                    {{Form::model($user,['method'=>'Patch','action'=>['UsersController@update',$user],'files'=>true])}}
                        <div class="form-group">
                            {{Form::label('name','Name:')}}
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
                            {!! Form::label('password','Password:') !!}
                            {!! Form::password('password',['class'=> 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('conpassword','Confirm Password:') !!}
                            {!! Form::password('conpassword',['class'=> 'form-control' ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo_id','Picture:') !!}
                            {!! Form::file('photo_id',['class'=>'btn']) !!}
                        </div>
                        <div class="form-group">
                            {{Form::submit('Update Profile',['class'=>'btn btn-success'])}}
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection