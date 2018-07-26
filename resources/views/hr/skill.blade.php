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
            Skills
        </div>
        <div class="panel-body">
            <div class=" col-md-6 col-sm-6">
                <div class="form-group">
                    Job Role : {{$user->job ? $user->job->job_id : 'No Description yet'}}
                </div>
                <div class="form-group">
                    Status : {{$employee->status ? $employee->status->status : "Not Yet Configure"}}
                </div>

                <div class="form-group">
                    Address : {{$employee->address}}
                </div>
                <div class="form-group">
                    Contact Number : {{$employee->contact_no}}
                </div>
                <div class="form-group">
                    Schedule : {{$employee->schedule ? $employee->schedule->schedule : "No Schedule Yet" }}
                </div>
                <div class="form-group">
                    Skills : {{$employee->skill}}
                </div>
                Download Resume :   @if($employee->resume != null)
                                        <a href={{'../resume/'.$employee->resume->file}}>{{$user->name}}'s Resume</a>
                                    @endif
            </div>
            <div class="col-md-6">
                {{--SSS: {{$user->employee->sss}}--}}
            </div>
        </div>
    </div>
@endsection