@extends('layouts.master')


@section('content')

    <div class="col-sm-8">
        <h1>Login</h1>
        <form method="post" action="/login">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

@endsection