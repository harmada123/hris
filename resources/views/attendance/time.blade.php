@extends('layouts.hr')
@section('content')
    <div class="col-md-12 col-md-offset-1">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Shift Summary
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th> Type</th>
                                    <th> Time</th>
                                    <th> Ip Address</th>
                                </tr>
                            </thead>
                            @foreach($times as $time)

                            <tbody>
                                <tr>
                                    <td>{{$time->type}}</td>
                                    <td>{{$time->time}}</td>
                                    <td>{{$time->ip}}</td>
                                    {{--<td> {{date('H:i:s',strtotime($time->time. ' hour' ,strtotime(Auth::user()->schedule->time_in)))}}</td>--}}
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection()