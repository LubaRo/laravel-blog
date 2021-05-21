<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>My blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <?php foreach ($posts as $post): ?>
            <?= $post; ?>
        <?php endforeach; ?>
    </body>
</html>
