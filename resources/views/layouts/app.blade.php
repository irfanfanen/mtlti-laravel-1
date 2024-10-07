<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Website Saya</h1>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2024 Website Saya</p>
    </footer>
</body>
</html>