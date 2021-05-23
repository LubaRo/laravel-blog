<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <div>
            <span>By <a href="#">{{ $post->user->name }}</a></span>
            <span>&nbsp;in <x-category-link :category="$post->category"></x-category-link></span>
        </div>

        <p>{!! $post->body !!}</p>
    </article>

    <div>
        <a href="/">Go home</a>
    </div>
</x-layout>
