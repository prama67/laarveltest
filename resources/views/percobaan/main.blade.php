<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percobaan</title>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

    @include('navbar.navbar')
        
    @yield('navbar')
    
</body>
</html>