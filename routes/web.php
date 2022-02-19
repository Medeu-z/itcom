<?php

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
    return view('main');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('loginer', function () {
    return view('afterlogin');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/qa', function () {
    return view('qa');
});

Route::get('/profile', function () {
    return view('userprofile');
});

Route::get('/createpost', function () { //** тут короче к каждому новому посту новый айди добавлять надо */
    return view('createpost');
});

Route::get('/myprofile', function () {
    return view('myprofile');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});
Route::get('/notifications', function () {
    return view('notifications');
});

