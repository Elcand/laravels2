<?php

use App\Models\Address;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::all();
    $address = Address::all();
    return view('test', compact('users', 'address'));
});

Route::get('/posts', function () {
    // Tag::insert([
    //     [
    //         'name' => 'Laravel',
    //     ],
    //     [
    //         'name' => 'JS',
    //     ],
    //     [
    //         'name' => 'PHP',
    //     ],
    // ]);

    $post = Post::first();
    $tag = Tag::first();

    $post->tags()->sync([2, 3]);

    $posts = Post::all();
    return view('post', compact('posts'));
});

Route::get('/tags', function () {
    $tags = Tag::all();
    return view('tags', compact('tags'));
});
