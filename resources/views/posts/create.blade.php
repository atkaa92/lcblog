@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <form method="post" action="/posts">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="pwd">Body:</label>
                <textarea class="form-control" id="body" name="body" required>
                </textarea>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div><!-- /.blog-main -->
@endsection