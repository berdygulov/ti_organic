<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="content-language" content="ru">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<h1>text</h1>
<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
