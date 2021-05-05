<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset("img/food_1.png") }}">
    <link rel="stylesheet" href="{{ asset("css/index.css") }}">
    <link rel="stylesheet" href="@yield('css')">

    <title>@yield('title')</title>
</head>
<body>

@include('header')

    <div class="upper_block">
        <h1>@yield('heading')</h1>
        <svg width="60" height="49" viewBox="0 0 60 49" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="10" cy="39" r="10" fill="#A4031F"/>
            <circle cx="30" cy="10" r="10" fill="#A4031F"/>
            <circle cx="50" cy="39" r="10" fill="#A4031F"/>
        </svg>
        <p>@yield('text')</p>
    </div>
@yield('content')

@include('footer')

<script src="{{ asset("js/menu.js") }}"></script>
</body>
</html>
