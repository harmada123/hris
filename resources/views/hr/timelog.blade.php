@extends('layouts.hr')

@section('css')

@endsection
@section('content')
    <script>
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // add a zero in front of numbers<10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                startTime()
            }, 500);
        }
        startTime();
    </script>

    <div class="panel panel-default">
        <div class="panel-heading">
            All Employee Users
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div id="time"></div>
                <div class="form-group">


                    {{Form::submit('Punch In',['class'=>'btn btn-default'])}}
                </div>

            </div>
        </div>

    </div>

@endsection