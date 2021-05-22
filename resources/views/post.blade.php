<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <x-category-link :category="$post->category"></x-category-link>

        <p>{!! $post->body !!}</p>
    </article>

    <div>
        <a href="/">Go home</a>
    </div>
</x-layout>
