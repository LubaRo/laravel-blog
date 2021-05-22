<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>

            <x-category-link :category="$post->category"></x-category-link>

            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>
