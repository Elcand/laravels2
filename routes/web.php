<?php

use App\Models\Address;
use App\Models\Post;
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
    // Post::insert([
    //     [
    //         'user_id' => 1,
    //         'name' => 'Alam',
    //     ],
    //     [
    //         'user_id' => 2,
    //         'name' => 'Nael',
    //     ],
    //     [
    //         'user_id' => 3,
    //         'name' => 'apin',
    //     ],
    // ]);

    $posts = Post::with('user')->get();
    return view('post', compact('posts'));
});
