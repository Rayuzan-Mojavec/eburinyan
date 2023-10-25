<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
    <script src="{{ asset('js/edit.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('itb.png') }}">
    <title>
        Welcome, Eburinyan!
    </title>
</head>

<body style="flex-shrink: 0;" class=" flex flex-col min-h-screen bg-gradient-to-r from-[#FF101F] via-[#DF99F0] to-[#81D6E3]">
    @include('core.taskbar')
    @yield('content')
    @include('core.footer')
</body>

</html>
