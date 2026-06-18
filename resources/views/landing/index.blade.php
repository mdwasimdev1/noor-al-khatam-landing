@extends('layouts.app')

@section('title', 'Noor Al Khatam | Mastercrafted Gemstone Sterling Silver Rings')

@section('content')
    @include('landing.hero')
    @include('landing.benefits')
    @include('landing.gallery')
    @include('landing.reviews')
    @include('landing.pricing')
    @include('landing.faq')
    @include('landing.order-form')
@endsection
