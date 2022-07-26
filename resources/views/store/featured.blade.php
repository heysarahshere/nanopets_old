@extends('layout.master')
@section('title')
    Featured
@endsection
@section('content')
    @include('partials.store-nav')

    <div class="about-heading">
        <div class="container">
            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-2">
                </div>
                <div class="col-5">
                    <p>Buy all the things</p>
                </div>
                <div class="col-5 ml-auto">
                    <img class="about-featured-img" src="{{ Storage::disk('s3')->url('/images/eggs/desert.png') }}"/>
                </div>
            </div>
        </div>
    </div>

@endsection
