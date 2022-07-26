@extends('layout.master')
@section('title')
    Food Stuffs
@endsection
@section('content')
    @include('partials.store-nav')

    <div class="py-5 container">
        <h1>food</h1>
        <div class="row">
            @foreach($foods as $food)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ Storage::disk('s3')->url($food->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h2 class="card-title">{{$food->name}}</h2>
                  <p class="card-text">{{$food->description}}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
