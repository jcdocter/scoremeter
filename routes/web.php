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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $users = DB::table('users')->get();
    return view('home', compact('users'));
});

Route::group(['middleware' => ['auth']], function() {

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/total', function () {
        $groups = DB::table('groups')->get();
        return view('total', compact('groups'));
    });
    
    Route::get('/players', function () {
        $participants = DB::table('participants')->get();
        return view('players', compact('participants'));
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/players', 'playersController@index')->name('players');

    Route::get('/total', 'TotalescoreController@index')->name('total');
});

Auth::routes();