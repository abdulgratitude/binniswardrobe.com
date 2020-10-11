<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if( View::hasSection('title'))  @yield('title') @else {{ config('app.name', 'MyGLIT') }}@endif</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')
</head>
<body class="dashboard-overflow-hide">
<style>
    #ticker-notification-marquee {
        font-size: 12px;
        background: #222;
        color: #fff;
        padding: 7px 0;
        margin: 0 auto;
        white-space: nowrap;
        overflow: hidden;
        width: 100%;
    }

    #ticker-notification-marquee > span {
        display: inline-block;
        padding-left: 100%;
        animation: marquee 25s linear infinite;
    }

    #ticker-notification-marquee > span i{
        margin: 0 15px;
    }

    @keyframes marquee {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(-100%, 0);
        }
    }
</style>
<div class="app-loader"></div>
@yield('sidebar') @hasSection('sidebar')
    <div id="main" class="h-100">
        @yield('notification')
        @endif @yield('header')
        @yield('content')
        @yield('footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (View::hasSection('sidebar'))
        @include('layouts.sidebar.script')
    @endif
    @include('layouts.script')
    @yield('script')
    @include('layouts.messages')
</body>
</html>
