@props(['time'])

<span>Published <time>{{ $time->diffForHumans() }}</time></span>
