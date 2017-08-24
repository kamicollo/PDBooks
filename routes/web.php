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
	return view('home', ['bodyclass' => 'home', 'object' => App\Page::create()]);
})->name('home');

Route::get('about', function () {
	return view('about', ['bodyclass' => 'about', 'object' => App\Page::create()]);
})->name('about');

Route::get('books/{book}', function(App\Book $book) {	
	return view('book',
			[	'bodyclass' => 'book',
				'book' => $book,
				'object' => $book,
				'affiliates' => $book->affiliates()->orderBy('order', 'asc')->get()
			]);
})->name('book')->where(['book' => '[-a-z0-9]+']);

Route::get('books/{book}/{order}', function(\App\Book $book, $order) {
	$chapter = $book->chapters()->where('order', '=', $order)->first();
	if ($chapter === null) {
		return view('errors.404');
	} else {
		return view('chapter',
			[	'bodyclass' => 'chapter',
				'book' => $book,
				'chapter' => $chapter,
				'object' => $chapter
			]);
	}
})->name('chapter')->where(['book' => '[-a-z0-9]+', 'order' => '[0-9]+']);
