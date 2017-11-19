@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1> {{ $post->title }} </h1>
        {{ $post->body }}
        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        {{  $comment->body }} <br>
                        <small>{{  $comment->created_at->diffForHumans() }}</small>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="card">
            <form method="post" action="/posts/{{ $post->id }}/comments">
                <div class="form-group">
                    <label for="body">Comment:</label>
                    <textarea class="form-control" id="body" name="body" required placholder="Your comment here"></textarea>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Add comment</button>
            </form>
        </div>
    </div>
@endsection