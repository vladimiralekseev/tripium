@extends('layouts.app')

@section('content')

<div class="fixed">
    <h1 class="text-center mb-lg-5 mb-4">@yield('title')</h1>
    @yield('page_content')
</div>

@endsection
