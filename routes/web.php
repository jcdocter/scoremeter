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
    return view('home');
});

Route::group(['middleware' => ['auth']], function() {

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/total', function () {
        $groups = DB::table('groupController')->get();
        return view('total', compact('groups'));
    });
    
    Route::get('/players', function () {
        $participants = DB::table('participants')->get();
        return view('players', compact('participants'));
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/players', 'AllplayersController@index')->name('total');
});





Auth::routes();

