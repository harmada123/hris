@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
         Leave Request
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div class="col-md-4">
                    <div class="form-group">
                        Employee: {{$leave->email}}
                    </div>
                    <div class="form-group">
                        Start Date: {{$leave->start}}
                    </div>
                    <div class="form-group">
                        End Date: {{$leave->end}}
                    </div>
                    <div class="form-group">
                        Reason : {{$leave->reason}}
                    </div>

                    <div class="form-group">
                        {!! Form::model($leave,['method'=>'patch','action'=>['LeaveController@update',$leave]]) !!}
                        {!! Form::select('status',array('Approve'=>'Approve','Reject'=>'Reject'),null,['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Status',['class'=>'btn btn-info']) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection()