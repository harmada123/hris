@extends('layouts.hr')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Skills
        </div>
        <div class="panel-body">
            <div class="form-group">
                <h1>Name :<a href={{route('users.edit',$user->id)}}>{{$user->name. " ". $user->lastname}}</a> </h1>
            </div>
            <hr>

            <div class=" col-md-4 col-sm-4">

                <div class="form-group">
                    Job Role : {{$user->job ? $user->job->job_id : 'No Description yet'}}
                </div>
                <div class="form-group">
                    Status : {{$employee->status ? $employee->status->status : 'No Description yet'}}
                </div>

                <div class="form-group">
                    Address : {{$employee->address}}
                </div>
                <div class="form-group">
                    Contact Number : {{$employee->contact_no}}
                </div>
                <div class="form-group">
                    Schedule : {{$user->schedule ? $user->schedule->schedule  : 'No Description yet'}}
                </div>
                <div class="form-group">
                    Skills : {{$employee->skill}}
                </div>
                    Download Resume : @if($employee->resume != null)
                                        <a href={{'../resume/'.$employee->resume->file}}>{{$user->name}}'s Resume</a>
                                      @endif

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    @if($user->photo != null)
                        <img src="{{url('/images/'.$user->photo->file)}}" height='200px' class="img-rounded" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection