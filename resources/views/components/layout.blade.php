<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    {{ $slot }}
</body>
</html>
