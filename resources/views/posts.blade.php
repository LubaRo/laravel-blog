<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>My blog</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <?php foreach ($posts as $post): ?>

            <article>
                <h1><a href="/posts/<?= $post->slug ?>"><?= $post->title; ?></a></h1>
                <p><?= $post->body; ?></p>
            </article>
        <?php endforeach; ?>
    </body>
</html>
