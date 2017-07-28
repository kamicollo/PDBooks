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

Route::get('book/{id}/goodreads', function($id) {
    $book = App\Book::find($id);
    try {
        $client = new GuzzleHttp\Client(['base_uri' => 'https://www.goodreads.com/book/isbn/']);
        $response = $client->request('GET', $book->isbn, 
            ['query' => 
                [
                    'key'    => env('GOODREADS_KEY'),
                    'format' => 'xml'
                ]
            ]
        );
        
        $xml = \simplexml_load_string($response->getBody(), null, LIBXML_NOCDATA);
        $number_of_ratings = (int) $xml->xpath("book/work/ratings_count/text()")[0];
        $sum_of_ratings = (int) $xml->xpath("book/work/ratings_sum/text()")[0];
        $url = $xml->xpath("book/url")[0];
        $average_rating = $sum_of_ratings / $number_of_ratings;
        $book->goodreads_avg_rating = $average_rating;
        $book->goodread__countof_ratings = $number_of_ratings;
        $book->link_to_goodreads = $url;
        $book->save();
    } catch (\ErrorException $error) {
        //Pokemons!
    }
    return $book;
    

});
