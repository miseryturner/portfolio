<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | {{ config('app.name') }}</title>
    
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    @include('layout.header')

    @yield('content')
</body>

</html>