@extends('layouts.hr')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit {{$users->name}}'s Profile
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div class="col-md-3">
                    <div class="row"><br>
                        <br>
                    </div>
                    <div class="row offset-2">
                        @if($users->photo != null)
                            <img src='{{url('/images/'.$users->photo->file)}}' height="200px" class="img-rounded col-lg-offset-3" alt="">
                        @endif
                    </div>

                    <br>

                </div>
                {{Form::model($employee,['method'=>'Patch','action'=>['EmployeeController@update',$employee],'files'=>true])}}
                <div class="col-md-3">
                    <div class="form-group">
                        {{Form::label('sss','SSS:')}}
                        {{Form::text('sss',null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('tin','TIN:')}}
                        {{Form::text('tin',null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('pagibig','Pagibig:')}}
                        {{Form::text('pagibig',null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('philhealth','Phil Health')}}
                        {{Form::text('philhealth',null,['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-md-3">


                    <div class="form-group">
                        {{Form::label('job_id','Job Role:')}}
                        {{Form::select('job_id',array('Choose Options') + $jobs,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('department_id','Department:')}}
                        {{Form::select('department_id',array('Choose Options') + $depts,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('sched_id','Schedule:')}}
                        {{Form::select('sched_id',array('Choose Options') + $scheds,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status_id','Status:')}}
                        {{Form::select('status_id',array('Choose Options') + $status,null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Update User',['class'=>'btn btn-success pull-right'])}}
                    </div>

                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection