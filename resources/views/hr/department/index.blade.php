@extends('layouts.hr')
@section('content')


    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Users
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        @if(count($departments) > 0 )
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Department</th>
                                <th>Location</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($departments as $department)
                                <tr>
                                    <td>
                                        {{$department->id}}
                                    </td>
                                    <td>
                                         <a href={{url('viewdept',$department->id)}}>{{$department->department}}</a>
                                    </td>
                                    <td>
                                        {{$department->location}}
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
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection