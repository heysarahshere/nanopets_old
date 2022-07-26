@extends('layout.master')
@section('title')
    Eggs
@endsection
@section('content')

    <div>
        <div class="container pt-5 store-body text-center">
            <h1>Creature Eggs</h1>
            <h2 style="color: #840e8d">Ready to hatch!</h2>
            <hr>
            <div class="row justify-content-center align-items-center m-auto">
                @foreach($eggs as $egg)
                    <div class="col-lg-3 col-sm-4">
                        <div class="card store-card" style="width: 100%;">
                            <div class="{{ $egg->element }}-ombre-btn">
                                <div class="row justify-content-center align-items-center mt-auto pt-2">
                                    <i class="fa-solid fa-coins pr-2 pb-2" style="color: #4d3c06;font-size: 30px"></i>
                                    <h2 class="text-center">
                                        {{ $egg->cost }}
                                    </h2>
                                </div>
                            </div>
                            <div class="store-img-container">
                                <img class="card-img-top" src="{{ Storage::disk('s3')->url($egg->image) }}"
                                     alt="{{ $egg->name }} Image">
                            </div>
                            <div class="card-body pb-2 {{ $egg->element }}">
                                <h2 class="card-title">{{ $egg->name }}</h2>
                                <p class="card-text">{{ $egg->description }}</p>
                            </div>
                            <a href="#" class="btn btn-primary purchase-btn">Purchase</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
