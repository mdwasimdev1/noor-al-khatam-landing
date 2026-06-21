@extends('layouts.app')

@section('title', 'নূরানি আংটি | Mastercrafted Gemstone Sterling Silver Rings')

@section('content')
    @include('landing.hero')
    {{-- @include('landing.benefits') --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="w-full h-full rounded  flex items-center justify-center">
            <img src="{{ asset('images/benefits.jpeg') }}" alt="নূর আল খাতাম লোগো"
                class="w-full h-full object-contain rounded-md">
        </div>
    </div>
    @include('landing.gallery')
    @include('landing.order-form')
@endsection
