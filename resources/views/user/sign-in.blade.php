@extends('layout.master')
@section('title')
    Sign In
@endsection
@section('content')

    <div class="home">
        <h1>SIGN IN</h1>
    </div>

<div class="col-6 pb-5">
    <h1>Sign in</h1>
    <form method="POST" action="{{route('sign-in')}}">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          @@csrf
          <button type="submit" class="btn btn-primary">Submit</button>
    </form></div>
@endsection