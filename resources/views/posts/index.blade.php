@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    @if($post->cover_image == '')
                        <div class="container">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    @else
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}" style="width: 100%;"/>
                        </div>
                        <div class="col-md-8  col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif
@endsection