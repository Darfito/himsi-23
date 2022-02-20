<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <!-- Primary Style -->
    {{-- <link rel="stylesheet" href="{{ url('assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ url('assets/scss/app.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Poppins:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6R0KVNDRDE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6R0KVNDRDE');
    </script>

    @livewireStyles

</head>

<body>
    <div class="container @yield('container')">
        @if ($message = Session::get('info'))
            <div class="alert alert-info-form">{{ $message }}</div>
        @endif
        @if ($message = Session::get('danger'))
            <div class="alert alert-danger-form">{{ $message }}</div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger-form">{{ $message }}</div>
        @endif
        @if ($message = Session::get('warning'))
            <div class="alert alert-warning-form">{{ $message }}</div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success-form">{{ $message }}</div>
        @endif

        @include('template.koneksi.navbar')

        @yield('content')
    </div>



    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ url('js/app.js') }}"></script>
    @yield('extrajs')
    @livewireScripts

</body>

</html>
