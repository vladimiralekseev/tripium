<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>

@include('components.header')

<div class="wrapper-main">
    <div class="pb-lg-5 mb-5"></div>
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
<script src="/js/splide.min.js"></script>
<script src="/js/general.js?v=2.2"></script>

@stack('scripts')
</body>
</html>

