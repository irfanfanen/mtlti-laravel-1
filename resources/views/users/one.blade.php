<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($user)
        <p>Selamat datang, {{ $user->name }}!</p>
        <p>di, {{ $user->address }}!</p>
    @else
        <p>Silakan login.</p>
    @endif
</body>
</html>