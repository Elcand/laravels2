<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/join', function () {
    // $userWithOrders = DB::table('users')
    //     ->join('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.*', 'orders.*')
    //     ->get();
    $userWithOrders = DB::table('users')
        ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.name', 'orders.product_name')
        ->get();

    dd($userWithOrders);
});
