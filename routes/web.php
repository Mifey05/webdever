<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use App\Models\ProjPost;
use App\Models\User;

// Public pages
Route::get('/', fn() => view('home', ['title' => 'Home']));
Route::get('/about', fn() => view('about', ['title' => 'About']));
Route::get('/user', function () {
    $users = User::latest()->get();
    return view('user', [
        'title' => 'Project',
        'users' => $users,
    ]);
});
Route::get('/proj', function () {
    $projs = ProjPost::latest()->get();
    return view('proj', [
        'title' => 'Project',
        'projs' => $projs,
    ]);
});
Route::get('/blog', function () {
    $posts = BlogPost::latest()->get();
    return view('blog', [
        'title' => 'Blog',
        'posts' => $posts,
    ]);
});
Route::get('/contact', fn() => view('contact', ['title' => 'Contact']));

// Admin page
Route::get('/admin', fn() => view('admin.index', ['title' => 'Admin Dashboard']));
