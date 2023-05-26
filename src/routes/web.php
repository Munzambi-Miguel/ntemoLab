<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->middleware('auth')->middleware('prevent-back-history');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth')->middleware('prevent-back-history');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('auth');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::group(['prefix' => 'configuration', 'middleware' => ['prevent-back-history', 'auth']], function () {
    Route::view('/uses', 'Core.Users.users-index')->name('listUsers');
    Route::view('/profiles', 'Core.util.profiles-index')->name('listProfiles');
});

Route::group(['prefix' => 'user', 'middleware' => ['prevent-back-history', 'auth']], function () {
    Route::get('/impersonate/{user}', 'App\Http\Controllers\Web\UserController@impersonateUser')->name('impersonate');
    Route::get('/leaveimpersonate', 'App\Http\Livewire\Listas\Users\UserList@leaveimpersonateUser')->name('leaveimpersonate');
    Route::get('/userProfile', 'App\Http\Controllers\UserController@perfilUtilizador')->name('perfilUtilizador');
});

//Auth::routes();

Route::get('/testeAPI', 'App\Http\Controllers\UserController@testeAPI');
