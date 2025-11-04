@extends('layouts.app')

@section('content')
<h1>User</h1>
<p>Welcome to our User section. Here’s some of the page users.</p>

<div class="list-group mt-4">
    @php
        use Illuminate\Support\Str;
    @endphp
    @foreach ($users as $user)
        <a href="#" class="list-group-item list-group-item-action">
            <h5>{{ $user->name }}</h5>
            <p class="mb-1">{!! nl2br(e($user->email)) !!}</p>
        </a>
    @endforeach
</div>
@endsection
