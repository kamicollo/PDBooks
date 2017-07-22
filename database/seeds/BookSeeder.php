<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => "Alice's Adventures in Wonderland",
            'author' => "Lewis Carroll",
            'first_publication_date' => date_create("1865-11-26"),
            'genre' => "Children's literature",
            'isbn' => '9781904808169',
            'illustrator' => "John Tenniel",
            'translator' => '',
            'goodreads_avg_rating' => 3.99,
            'goodread__countof_ratings' => 78595,
            'link_to_goodreads' => "https://www.goodreads.com/book/show/13543134-alice-s-adventures-in-wonderland",
            'background_image' => "images/bg.svg",
            'cover_image' => "images/cover.jpg",
            'description' => "<blockquote>
						<p>“No wise fish would go anywhere without a porpoise.”</p>
					</blockquote>
          <p>Alice's Adventures in Wonderland (commonly shortened to Alice in Wonderland) is an 1865 fantasy novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children. <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/Alice%27s_Adventures_in_Wonderland\">Wikipedia</a></p>",
        ]);
    }
}
