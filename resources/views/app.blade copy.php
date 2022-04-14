<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/core-style.css">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="icon" href="../../assets/img/core-img/favicon.ico">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

    </div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>

<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="../../assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../../assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="../../assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="../../assets/js/active.js"></script>
</body>
</html>