@extends('layouts.master')

@section('content')
<h1>Admin Dashboard</h1>
<p>Welcome to the admin panel. Manage users, posts, and settings here.</p>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Users</h5>
                <p>Manage all registered users.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Posts</h5>
                <p>View, edit, or delete posts.</p>
            </div>
        </div>
    </div>
</div>
@endsection
