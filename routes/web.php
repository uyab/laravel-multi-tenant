<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $users = \App\User::all();
    $posts = null;

    if (request('user')) {
        Config::set('database.connections.tenant.database', 'multi_tenant_'.request('user'));
        DB::purge();

        $posts = \App\Post::all();
    }

    return view('welcome', compact('users', 'posts'));
});
