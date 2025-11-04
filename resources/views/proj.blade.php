@extends('layouts.app')

@section('content')
<h1>Project</h1>
<p>Welcome to our Project section. Here’s where we share our recent works.</p>

<div class="list-group mt-4">
    @php
        use Illuminate\Support\Str;
    @endphp
    @foreach ($projs as $proj)
        <a href="#" class="list-group-item list-group-item-action">
            <h5>{{ $proj->name }}</h5>
            <p class="mb-1">{!! nl2br(e($proj->content)) !!}</p>
            <small class="text-muted">Published {{ $proj->created_at->diffForHumans() }}</small>
        </a>
    @endforeach
</div>
@endsection
