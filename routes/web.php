<?php

//Super important import style
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
    return view('welcome');
});

// Route::get('/friends', function () {
//     //Pulling info from the DB
//     $friends = Friend::all();
//     //Sending goods to the friends template
//     return view('friends', ['friends' => $friends]);
// });

// Resource route that pulls from the controller
Route::resource('friends', 'FriendController');
