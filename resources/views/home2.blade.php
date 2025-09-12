<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home2</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <h1>Selamat Datang di Halaman Home</h1>

    <nav>
        <a href="/">Home2</a> | <a href="/laravel">Laravel</a>
    </nav>

    <div>
        <img src="{{ asset('images/laravel.png') }}" alt="Logo Laravel" width="900">
    </div>
</body>
</html>
