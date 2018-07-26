@extends('layouts.payroll')
@section('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Department
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <br>
                <table id="departments" class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Department</th>
                        <th>Location</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#departments').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/hris/public/dept/get_datatable/' ,
                columns : [
                    {data: 'id'},
                    {data: 'department' ,
                        "render": function(data, type, row, meta){
                            if(type === 'display'){
                                data = '<a href="' + '../public/employeelist/'+ row.id +'">' + data + '</a>';
                            }

                            return data;
                        }
                    },
                    {data: 'location'},
                ],
                pageLength: 5,
            });
        });
    </script>
@endsection()