<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>My blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <article>
            <h1><?= $post->title; ?></h1>
            <p><?= $post->body; ?></p>
        </article>
        <a href="/">Go home</a>
    </body>
</html>
