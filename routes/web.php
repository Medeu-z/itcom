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

Route::name('user.')->group(function() {
    Route::view('/private', 'afterlogin')->middleware('auth')->name('private');

    Route::get('/login', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/signup', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('signup');
    })->name('signup');

    Route::post('/signup', [\App\Http\Controllers\SignUpController::class, 'save']);
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

