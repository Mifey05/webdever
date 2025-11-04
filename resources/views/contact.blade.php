@extends('layouts.app')

@section('content')
<h1>Contact Us</h1>
<p>We’d love to hear from you. Fill out the form below or reach us through social media.</p>

<form class="mt-4" action="#" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Your name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="you@example.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection
