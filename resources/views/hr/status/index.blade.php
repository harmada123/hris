@extends('layouts.hr')
@section('content')
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Status Type
            </div>
            <div class="panel-body">
                {{Form::open(['method'=>'Post','action'=>'StatusController@store'])}}
                <div class="form-group">
                    {{Form::label('status','Status:')}}
                    {{Form::text('status',null,['class'=>'form-control'])}}
                </div>
                {{Form::submit('Create Status Type',['class'=>'btn btn-primary'])}}
                {{Form::close()}}
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Status
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        @if(count($status) > 0 )
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Status Type</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($status as $stats)
                                <tr>
                                    <td>
                                        {{$stats->id}}
                                    </td>
                                    <td>
                                        {{$stats->status}}
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