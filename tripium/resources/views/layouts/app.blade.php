<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tripium</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="image/png" rel="icon" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon:wght@400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link href="/css/splide.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/general.css?v=2.0" rel="stylesheet" type="text/css"/>

    {!! RecaptchaV3::initJs() !!}
</head>

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
<script src="/js/main.js?v=2.0"></script>
@yield('scripts')
@stack('scripts')
</body>
</html>

