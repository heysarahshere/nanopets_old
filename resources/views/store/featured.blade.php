@extends('layout.master')
@section('title')
    About
@endsection
@section('content')

    <div class="about-heading">
        <div class="container">
            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-7">
                    <h1>STORE</h1>
                    <p>Buy all the things</p>
                </div>
                <div class="col-5 ml-auto">
                    <img class="about-featured-img" src="{{ Storage::disk('s3')->url('/images/eggs/desert.png') }}"/>
                </div>
            </div>
        </div>
    </div>

@endsection
