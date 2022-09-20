@extends('layout.master')
@section('title')
    @unless(Auth::check())
        {{Auth::user()->username}}
    @endunless
@endsection
@section('content')

    <div class="home">
        <h1>{{Auth::user()->username}}</h1>
    </div>
    <div class="container" style="padding-bottom: 20%;">
        <div class="row">
            @foreach($pets as $pet)
                <div class="col-4 pb-5"><h2>{{ $pet->name }}</h2>
                    <div class="card-body pb-2 {{ $pet->element }}">
                        <h2 class="card-title">{{ $pet->name }}</h2>
                        <p class="card-text">{{ $pet->description }}</p>
                    </div>

                    {{--                line_image--}}
                    {{--                color_image--}}
                    {{--                eye_image--}}
                    {{--                tail_image--}}
                    {{--                head_image--}}
                    {{--                wing_image--}}
                    <div class="monster-parent col-12">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->tail_image) }}"
                             alt="{{ $pet->name }} Image">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->wing_image) }}"
                             alt="{{ $pet->name }} Image">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->head_image) }}"
                             alt="{{ $pet->name }} Image">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->color_image) }}"
                             alt="{{ $pet->name }} Image">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->eye_image) }}"
                             alt="{{ $pet->name }} Image">
                        <img class="monster-child" src="{{ Storage::disk('public')->url("/" . $pet->line_image) }}"
                             alt="{{ $pet->name }} Image">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
