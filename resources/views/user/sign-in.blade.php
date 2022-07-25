@extends('layout.master')
@section('title')
    Sign In
@endsection
@section('content')

    <div class="home">
        <h1>SIGN IN</h1>
    </div>

</div class="col-sm-12 col-md-10 col-lg-8">
    <h1>Sign in</h1>
    <form method="POST" action="{{route('sign-in')}}">
@endsection