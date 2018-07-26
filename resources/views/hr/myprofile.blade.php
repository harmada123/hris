@extends('layouts.users')
@section('css')

    @endsection
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
                    <a href={{url('skill',Auth::user()->id)}}>
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
                    @if($user->isActive != null)
                    <div class="form-group">
                        {!! Form::model($emp,['method'=>'PATCH','action'=>['EmployeeController@update',$emp],'files'=>true]) !!}
                        {{Form::label('address','Address:')}}
                        {{Form::text('address',null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('contact_no','Contact Number:')}}
                        {{Form::text('contact_no',null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {!! Form::label('skill','Skills:') !!}
                        {!! Form::textarea('skill',null,['class'=>'form-control','data-role'=>'tagsinput']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('resume_id','Resume:') !!}
                        {!! Form::file('resume_id',['class'=>'btn']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Info',['class'=>'btn btn-success']) !!}
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection()