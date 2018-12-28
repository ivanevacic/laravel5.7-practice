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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

//  New Route with it's view ->resources/views/...
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo'   => 'foobar'
    ]);
});
