<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DeliveryController;
Use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('/book', BookController::class);
Route::get('/book/search', 'BookController@index');

Route::resource('/delivery', DeliveryController::class);
Route::get('/delivery/search', 'DeliveryController@index');
Route::get('/master_users', 'UserController@index');


Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');


// Route::get('/welcome', 'WelcomeController@index')->name('welcome');
// Route::get('/end', 'EndController@index')->name('end');


