@extends('layout.master')
@section('title')
    Food Stuffs
@endsection
@section('content')
    @include('partials.store-nav')

    <div>
        <div class="container store-body text-center pt-4">
            <div class="row justify-content-center align-items-center m-auto">
                @foreach($foods as $food)
                    <div class="col-lg-3 col-sm-4 pb-5">
                        <div class="card store-card" style="width: 100%;">
                            <div class="{{ $food->mainStat }}-ombre-btn">
                                <div class="row justify-content-center align-items-center mt-auto pt-2">
                                    <i class="fa-solid fa-coins pr-2 pb-2" style="color: #4d3c06;font-size: 30px"></i>
                                    <h2 class="text-center">
                                        {{ $food->cost }}
                                    </h2>
                                </div>
                            </div>
                            <div class="store-img-container">
                                <img class="card-img-top" src="{{ Storage::disk('s3')->url($food->image) }}"
                                     alt="{{ $food->name }} Image">
                            </div>
                            <div class="card-body pb-2 {{ $food->mainStat }}">
                                <h2 class="card-title" style="font-size: larger">{{ $food->name }}</h2>
                                <p class="card-text">{{ $food->description }}</p>
                            </div>
                            <a href="#" class="btn btn-primary purchase-btn">Purchase</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row" style="position: relative">
            <div class="col pt-3 mr-auto">
                {{ $foods->links() }}
            </div>
        </div>
    </div>
@endsection
