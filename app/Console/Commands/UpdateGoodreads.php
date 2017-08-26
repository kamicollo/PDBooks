<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateGoodreads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:goodreads {slug?*} {--b|batch=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates Goodreads statistics. Use -b to limit number of books affected or provide slugs as arguments.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();		
		$this->client = new \GuzzleHttp\Client(['base_uri' => 'https://www.goodreads.com/book/isbn/']);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
		//if specific slugs are provided, update them		
		if (!empty($this->argument('slug'))) {
			foreach ($this->argument('slug') as $slug) {
				$book = \App\Book::where('url_slug', $slug)->first();
				if ($book !== null) {
					$this->updateBook($book);
				} else {
					$this->error(sprintf('Book "%s" not found in the database', $slug));
				}
			}
		} else { //otherwise, update n of the oldest entries
			$books = \App\Book::oldest('updated_at')->take($this->option('batch'))->get();
			foreach($books as $book) {
				$this->updateBook($book);
			}
		}
	}
	
	public function updateBook(\App\Book $book) {
		try {
			$response = $this->client->request('GET', (string) $book->isbn, 
				['query' => 
					[
						'key'    => env('GOODREADS_KEY'),
						'format' => 'xml'
					]
				]
			);
			$this->parseResponse($book, $response);	
			
		} catch (\GuzzleHttp\Exception\ClientException $g_error) {
			if ($g_error->getCode() == 404) {
				$this->error(sprintf(
					'Goodreads did not recognize ISBN (given: %s) of book "%s"',
					(string) $book->isbn,
					$book->title
				));
			} else {
				$this->error(sprintf(
					'Unknown Goodreads error for book %s: %s',
					$book->title,
					$g_error->getMessage()
				));
			}
		} 				
    }
	
	public function parseResponse(\App\Book $book, \GuzzleHttp\Psr7\Response $response) {
		try {
			$xml = \simplexml_load_string($response->getBody(), null, LIBXML_NOCDATA);
			$number_of_ratings = (int) $xml->xpath("book/work/ratings_count/text()")[0];
			$sum_of_ratings = (int) $xml->xpath("book/work/ratings_sum/text()")[0];
			$url = $xml->xpath("book/url")[0];
			$average_rating = $sum_of_ratings / $number_of_ratings;
			$book->goodreads_avg_rating = $average_rating;
			$book->goodread__countof_ratings = $number_of_ratings;
			$book->link_to_goodreads = $url;
			$book->save();
			$this->info(
				sprintf(
					'Book "%s" updated. Avg rating: %f, total ratings: %d',
					$book->title,
					$book->goodreads_avg_rating,
					$book->goodread__countof_ratings
				)
			);
		} catch (\ErrorException $e) {
			$this->error(sprintf(
				'Error updating "%s". Likely malformed XML received',
				$book->title
			));
		}
	}
}
