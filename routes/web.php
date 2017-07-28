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
    return view('home', ['bodyclass' => 'home']);
});

Route::get('book/{id?}', function($id = 1) {
	$book = App\Book::find($id);
    return view('book', 
			[	'bodyclass' => 'book', 
				'book' => $book,
				'object' => $book,
				'affiliates' => App\Book::find($id)->affiliates()->orderBy('order', 'asc')->get()
			]);
})->name('book');

Route::get('book/{id}/chapter/{order}', function($id, $order) {
	$chapter = App\Book::find($id)->chapters()->where('order', '=', $order)->first();
    return view('chapter', 
			[	'bodyclass' => 'chapter',
				'book' => App\Book::find($id),
				'chapter' => $chapter,
				'object' => $chapter
			]);
})->name('chapter');
