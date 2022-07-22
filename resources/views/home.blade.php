@extends('layout.master')
@section('title')
    Home
@endsection
@section('content')

    <header>
        @include('partials.nav')
        @include('partials.message')
        @include('partials.errors')
    </header>

    <div class="home">
        <h1>WELCOME TO NANOPETS</h1>
    </div>
@endsection
