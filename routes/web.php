<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('create-post', function () {
    $user = User::first();

    $user->posts()->create([
        'title' => Str::random(150),
        'body' => Str::random(400),
    ]);

    return 'ok';
});

Route::get('/', function () {
    return view('welcome');
});
