@extends('layouts.hr')
@section('content')
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Job Role
            </div>
            <div class="panel-body">
                {{Form::open(['method'=>'Post','action'=>'HrJobController@store'])}}
                    <div class="form-group">
                        {{Form::label('job_id','Job Role:')}}
                        {{Form::text('job_id',null,['class'=>'form-control'])}}
                    </div>
                    {{Form::submit('Create Job Role',['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Job Role
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        @if(count($jobs) > 0 )
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Role</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($jobs as $job)
                                <tr>
                                    <td>
                                        {{$job->id}}
                                    </td>
                                    <td>
                                        <a href={{route('jobs.edit',$job->id)}}>{{$job->job_id}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td>
                                    No Data Found
                                </td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection