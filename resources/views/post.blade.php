<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </article>

    <div>
        <a href="/">Go home</a>
    </div>
</x-layout>
