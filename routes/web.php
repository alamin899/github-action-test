<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $users = User::all();

    $users->toArray();

    return view('welcome', compact('users'));
});

Route::get('/test', function () {
    $users = User::all();
    $users->toArray();

    return view('welcome', compact('users'));
});
