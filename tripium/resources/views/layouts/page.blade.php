@extends('layouts.app')

@section('content')

<div class="fixed">
    <h1 class="text-center">@yield('title')</h1>
    @yield('page_content')
</div>

@endsection
