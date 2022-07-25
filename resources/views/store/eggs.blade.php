@extends('layout.master')
@section('title')
    Eggs
@endsection
@section('content')

    <div>
        <div class="container pt-5 store-body text-center">
            <h1>Creature Eggs</h1>
            <h2>Ready to hatch!</h2>
            <hr>
            <div class="row justify-content-center align-items-center m-auto">
                @foreach($eggs as $egg)
                    <div class="col-3">
                        <div class="card {{ $egg->element }}" style="width: 100%;">
                            <img class="card-img-top" src="{{ Storage::disk('s3')->url($egg->image) }}"
                                 alt="Card image cap">
                            <div class="card-body py-0">
                                <h2 class="card-title">{{ $egg->name }}</h2>
                                <p class="card-text">{{ $egg->description }}</p>
                                <a href="#" class="btn btn-primary ombre-btn my-3">Purchase</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
