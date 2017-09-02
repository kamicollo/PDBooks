<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('books')->insert([
            'title' => "Alice's Adventures in Wonderland",
            'author' => "Lewis Carroll",
            'first_publication_date' => date_create("1865-11-26"),
            'genre' => "Children's literature",
            'isbn' => '',
            'illustrator' => "Sir John Tenniel",
            'translator' => '',
            'goodreads_avg_rating' => 4.0,
            'goodread__countof_ratings' => 86036,
            'link_to_goodreads' => "https://www.goodreads.com/book/show/20570315-alice-s-adventures-in-wonderland",
            'background_image' => "images/alice-in-wonderland/background.png",
            'cover_image' => "images/alice-in-wonderland/cover.jpg",
            'description' => "Alice's Adventures in Wonderland is an 1865 fantasy novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children.",
            'descr_quote' => '<p>“No wise fish would go anywhere without a porpoise.”</p>',
            'descr_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Alice%27s_Adventures_in_Wonderland">Wikipedia</a>',
            'url_slug' => "alice-in-wonderland"
        ]);
    }
}
