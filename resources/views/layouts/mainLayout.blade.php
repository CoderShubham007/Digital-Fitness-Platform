<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}">
    <title>Fitness Hub - @yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @stack("styles")
</head>

<body>
    <!-- Header -->
    @include('includes.header')

    <!-- Page Content -->
    @yield("content")

    <!-- Footer -->
    @include('includes.footer')

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @stack("scripts")
</body>

</html>