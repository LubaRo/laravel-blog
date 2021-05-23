<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <x-author-and-category :post="$post"></x-author-and-category>

        <p>{!! $post->body !!}</p>
    </article>

    <div>
        <a href="/">Go home</a>
    </div>
</x-layout>
