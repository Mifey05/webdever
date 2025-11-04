@extends('layouts.app')

@section('content')
<h1>Blog</h1>
<p>Welcome to our blog section. Here’s where we share our thoughts and updates.</p>

<div class="list-group mt-4">
    @php
        use Illuminate\Support\Str;
    @endphp
    @foreach ($posts as $post)
        <a href="#" class="list-group-item list-group-item-action">
            <h5>{{ $post->name }}</h5>
            <p class="mb-1">{!! nl2br(e($post->content)) !!}</p>
            <small class="text-muted">Published {{ $post->created_at->diffForHumans() }}</small>
        </a>
    @endforeach
</div>
@endsection
