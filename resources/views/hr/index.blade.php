@extends('layouts.hr')
@section('content')
    @if(count($posts) > 0 )
        @foreach($posts as $post)

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$post->title}}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        {!! $post->content !!}
                    </div>
                    Created at: {{$post->created_at}}
                </div>
            </div>

        @endforeach
        @else
        <div class="panel panel-default">
            <div class="panel-heading">
                Announcement
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                        There are no further announcement.
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-5"></div>
        {{$posts->links()}}
    </div>
@endsection