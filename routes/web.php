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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});


Route::get('/entry', "App\Http\Controllers\EntryController@entry")->name("form.show");

Route::get('/entry/confirm','App\Http\Controllers\EntryController@confirm')->name("form.confirm");
Route::post('/entry/confirm','App\Http\Controllers\EntryController@confirm')->name("form.send");

Route::get('/entry/confirm/thanks','App\Http\Controllers\EntryController@thanks')->name("form.thanks");
Route::post('/entry/confirm/thanks','App\Http\Controllers\EntryController@thanks')->name("form.complete");

Route::get('/service', function () {
    return view('service');
});

Route::get('terms', function () {
    return view('terms');
});

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('contact', function () {
    return view('contact');
});