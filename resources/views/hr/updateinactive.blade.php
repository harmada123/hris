@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Activate User
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div class="col-md-2">
                    <div class="form-group">
                        @if($user->photo != null)
                            <img src="{{url('/images/'.$user->photo->file)}}" height='200px' class="img-rounded" alt="">
                        @endif
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <h1>Name :<a href={{route('users.edit',$user->id)}}>{{$user->name. " ". $user->lastname}}</a> </h1>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            Email : {{$user->email}}
                        </div>
                        <div class="form-group">
                            Job Role : {{$user->job ? $user->job->job_id : 'No Description yet'}}
                        </div>
                        <div class="form-group">
                            Status : {{$user->status ? $user->status->status : "Inactive"}}
                        </div>
                        <div class="form-group">
                            {!! Form::model($user,['method'=>'PATCH','action'=>['UpdateUserController@update',$user]]) !!}
                                {{--{!! Form::hidden('user_id',$user->id) !!}--}}
                                <div class="form-group">
                                    {!! Form::hidden('isActive',1) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Activate',['class'=>'btn btn-info']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection()