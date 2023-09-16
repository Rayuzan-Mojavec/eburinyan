<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>
        Welcome, Eburinyan!
    </title>
</head>

<body class="bg-gradient-to-r from-[#FF101F] via-[#DF99F0] to-[#81D6E3]">
    @include('core.taskbar')
    @yield('content')
</body>

</html>
