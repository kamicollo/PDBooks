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

Route::get('book/{id?}', function($id = 1) {
    return view('book', ['bodyclass' => 'overview', 'book' => App\Book::find($id), 'affiliates' => App\Book::find($id)->affiliates()->orderBy('order', 'asc')->get()]);
});

Route::get('book/{id}/chapter/{number}', function($id, $number) {
    return view('chapter', ['bodyclass' => 'read', 'book' => App\Book::find($id), 'chapter' => App\Book::find($id)->chapters()->find($number)]);
});
