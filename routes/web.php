<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/join', function () {
    // $userWithOrders = DB::table('users') //inner join
    //     ->join('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.*', 'orders.*')
    //     ->get();
    // $userWithOrders = DB::table('users') // left join
    //     ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
    //     ->select('users.name', 'orders.product_name')
    //     ->get();
    // $orderWithOrders = DB::table('orders') // right join
    //     ->rightJoin('users', 'users.id', '=', 'orders.user_id')
    //     ->select('orders.product_name', 'users.name')
    //     ->get();
    // $fullOuterJoin = DB::table('users')
    //     ->leftJoin('orders', 'orders.id', '=', 'orders.user_id')
    //     ->select('users.name', 'orders.product_name')
    //     ->unionall(
    //         DB::table('users')
    //             ->rightJoin('orders', 'orders.user_id', '=', 'orders.user_id')
    //             ->select('users.name', 'orders.product_name')
    //     )->get();

    // dd($fullOuterJoin);
});
