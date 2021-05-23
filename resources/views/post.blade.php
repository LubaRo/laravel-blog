<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <x-author-and-category :category="$post->category" :author="$post->user"></x-author-and-category>

        <p>{!! $post->body !!}</p>
    </article>

    <div>
        <a href="/">Go home</a>
    </div>
</x-layout>
