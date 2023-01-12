<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>

<body>
    @include('navbar')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
