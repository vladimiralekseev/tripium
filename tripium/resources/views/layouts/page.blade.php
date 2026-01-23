@extends('layouts.app')

@section('content')
<div class="mb-5"></div>
<div class="fixed">
    <div class="px-lg-5">
        <div class="row mb-lg-5 mb-4">
            <div class="col-xl-8 col-lg-10">
                <h1 class="mb-3">@yield('title')</h1>
                @hasSection('up-text')
                    <div class="mb-lg-5 mb-4">@yield('up-text')</div>
                @endif
                @hasSection('label')
                    <div class="tag tag-special tag-sky mb-lg-5 mb-4 px-4">@yield('label')</div>
                @endif
            </div>
        </div>

        @yield('page_content')
    </div>
</div>

@endsection
