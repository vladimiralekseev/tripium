@extends('layouts.app')

@section('title', 'Tripium')

@section('content')

    @include('main.platform')
    @include('main.products')
    @include('main.solutions')
    @include('main.features')
    @include('main.reviews')
    @include('main.contact-us')

@endsection
