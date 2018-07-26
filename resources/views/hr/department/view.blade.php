@extends('layouts.hr')
@section('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href={{route('department.edit',\App\Department::find($id)->id)}}>{{\App\Department::find($id)->department}} Department</a>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <br>
                <table id="users" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Skills</th>
                    </tr>
                    </thead>
                </table>
                <div class="form-group">
                    <div class="float-right">
                        {!! Form::open(['method'=>'post','action'=>'GenerateReportController@downloadUserExcel']) !!}
                            {!! Form::hidden('department',$id,['value'=>$id]) !!}
                            {!! Form::submit('Generate List of Employee',['class'=>'btn btn-warning pull-right']) !!}
                        {!! Form::close() !!}
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#users').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/hris/public/viewdept/get_datatable/'+{{$id}} ,
                columns : [
                    {data: 'id', name: 'employees.id'},
                    {data: 'name',name: 'users.name'},
                    {data: 'lastname',name: 'users.lastname'},
                    {data: 'email' ,name: 'users.email',
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + '../profile/'+ row.id +'">' + data + '</a>';
                            }

                            return data;
                        }
                    },
                    {data: 'skill', name:'employees.skill'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection()