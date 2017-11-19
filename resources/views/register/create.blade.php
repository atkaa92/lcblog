@extends('layouts.master')


@section('content')

    <div class="col-sm-8">
        <h1>Register</h1>
        <form method="post" action="/register">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control" name="password_confirmation" required>
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

@endsection