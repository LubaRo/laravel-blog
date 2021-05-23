<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>

            <x-author-and-category :post="$post"></x-author-and-category>

            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>
