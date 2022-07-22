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

    <section class="home">
        <h1>WELCOME TO NANOPETS</h1>
    </section>
@endsection
