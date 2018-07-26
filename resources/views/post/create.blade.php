@extends('layouts.hr')
@section('css')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create Post
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                {{Form::open(['method'=>'POST','action'=>'PostController@store','files'=>true])}}
                {!! Form::hidden('user_id',Auth::user()->id,['value'=>Auth::user()->id]) !!}
                <div class="form-group">
                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('content','Content:')}}
                    {{Form::textarea('content',null,['class'=>'form-control'])}}
                </div>

            </div>
            <div class="form-group">
                {{Form::submit('Create Announcement',['class'=>'btn btn-info'])}}
            </div>
        </div>

    </div>
@endsection