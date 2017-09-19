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
            'isbn' => "9781904808169",
            'illustrator' => "John Tenniel",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/2647293-alice-s-adventures-in-wonderland",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "Alice's Adventures in Wonderland is an 1865 fantasy novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as children.",
            'description_quote' => '<p>“No wise fish would go anywhere without a porpoise.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Alice%27s_Adventures_in_Wonderland">Wikipedia</a>',
            'url_slug' => "alice-in-wonderland",
            'soundcloud_id' => "250835785",
            'country' => "United Kingdom"
        ]);

        DB::table('books')->insert([
            'title' => "Through the Looking-Glass, and What Alice Found There",
            'author' => "Lewis Carroll",
            'first_publication_date' => date_create("1871-01-01"),
            'genre' => "Children's fiction",
            'isbn' => "9780688120498",
            'illustrator' => "John Tenniel",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/83346.Through_the_Looking_Glass_and_What_Alice_Found_There",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "Through the Looking-Glass is a sequel to Lewis Carroll's <a href='http://laikareads.com/books/alice-in-wonderland'>Alice's Adventures in Wonderland</a>. Set some six months later than the earlier book, Alice again enters a fantastical world, this time by climbing through a mirror into the world that she can see beyond it. Through the Looking-Glass includes such celebrated verses as \"Jabberwocky\" and \"The Walrus and the Carpenter\", and the episode involving Tweedledum and Tweedledee.",
            'description_quote' => '<p>“Why, sometimes I\'ve believed as many as six impossible things before breakfast.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Through_the_Looking-Glass">Wikipedia</a>',
            'url_slug' => "through-the-looking-glass",
            'soundcloud_id' => "194010055",
            'country' => "United Kingdom"
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Sherlock Holmes",
            'author' => "Arthur Conan Doyle",
            'first_publication_date' => date_create("1892-10-14"),
            'genre' => "Detective fiction",
            'isbn' => "9780192835086",
            'illustrator' => "Sidney Paget",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/3590.The_Adventures_of_Sherlock_Holmes",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "The Adventures of Sherlock Holmes is a collection of twelve short stories by Arthur Conan Doyle, featuring his fictional detective Sherlock Holmes. It was first published on 14 October 1892; the individual stories had been serialised in The Strand Magazine between July 1891 and June 1892. The stories are not in chronological order, and the only characters common to all twelve are Holmes and Dr. Watson. The stories are related in first-person narrative from Watson's point of view.",
            'description_quote' => '<p>“Never trust to general impressions, my boy, but concentrate yourself upon details.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Adventures_of_Sherlock_Holmes">Wikipedia</a>',
            'url_slug' => "the-adventures-of-sherlock-holmes",
			'soundcloud_id' => "307524908",
            'country' => "United Kingdom"
        ]);

        DB::table('books')->insert([
            'title' => "The Hound of the Baskervilles",
            'author' => "Arthur Conan Doyle",
            'first_publication_date' => date_create("1902-01-01"),
            'genre' => "Detective fiction",
            'isbn' => "9780451528018",
            'illustrator' => "Sidney Paget",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/8921.The_Hound_of_the_Baskervilles",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "The Hound of the Baskervilles is the third of the crime novels written by Sir Arthur Conan Doyle featuring the detective Sherlock Holmes. Originally serialised in The Strand Magazine from August 1901 to April 1902, it is set largely on Dartmoor in Devon in England's West Country and tells the story of an attempted murder inspired by the legend of a fearsome, diabolical hound of supernatural origin. Sherlock Holmes and his companion Dr. Watson investigate the case.",
            'description_quote' => '<p>“There is nothing more stimulating than a case where everything goes against you.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Hound_of_the_Baskervilles">Wikipedia</a>',
            'url_slug' => "the-hound-of-the-baskervilles",
			'soundcloud_id' => "307524908",
            'country' => "United Kingdom"
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Tom Sawyer",
            'author' => "Mark Twain",
            'first_publication_date' => date_create("1876-01-01"),
            'genre' => "Children's literature",
            'isbn' => "9780143039563",
            'illustrator' => "True Williams",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/24583.The_Adventures_of_Tom_Sawyer",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "The Adventures of Tom Sawyer by Mark Twain is an 1876 novel about a young boy growing up along the Mississippi River. It is set in the fictional town of St. Petersburg, inspired by Hannibal, Missouri, where Twain lived.",
            'description_quote' => '<p>“He was not the Model Boy of the village. He knew the model boy very well though—and loathed him.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Adventures_of_Tom_Sawyer">Wikipedia</a>',
            'url_slug' => "the-adventures-of-tom-sawyer",
            'country' => "United States"
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Huckleberry Finn",
            'author' => "Mark Twain",
            'first_publication_date' => date_create("1884-12-10"),
            'genre' => "Children's literature",
            'isbn' => "9780142437179",
            'illustrator' => "E.W. Kemble",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/2956.The_Adventures_of_Huckleberry_Finn",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "The Adventures of Huckleberry Finn is a novel by Mark Twain, first published in the United Kingdom in December 1884 and in the United States in February 1885. Commonly named among the <a href='https://en.wikipedia.org/wiki/Great_American_Novel' target='_blank'>Great American Novels</a>, this is one of the first works of American literature to be written in vernacular English, characterized by local color regionalism. It is told in the first person by Huckleberry \"Huck\" Finn, a friend of Tom Sawyer, the narrator of two other Twain novels (Tom Sawyer Abroad and Tom Sawyer, Detective). It is a direct sequel to <a href='http://laikareads.com/books/the-adventures-of-tom-sawyer'>The Adventures of Tom Sawyer</a>.",
            'description_quote' => '<p>“Right is right, and wrong is wrong, and a body ain’t got no business doing wrong when he ain’t ignorant and knows better.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Adventures_of_Huckleberry_Finn">Wikipedia</a>',
            'url_slug' => "the-adventures-of-huckleberry-finn",
            'country' => "United Kingdom"
        ]);

        // DB::table('books')->insert([
        //     'title' => "",
        //     'author' => "",
        //     'first_publication_date' => date_create(""),
        //     'genre' => "",
        //     'isbn' => "",
        //     'illustrator' => "",
        //     'translator' => "",
        //     'goodreads_link' => "",
        //     'goodreads_avg_rating' => 0,
        //     'goodreads_count_ratings' => 0,
        //     'description' => "",
        //     'description_quote' => '<p>“”</p>',
        //     'description_source' => '<a target="_blank" href=""></a>',
        //     'url_slug' => "",
        //     'soundclound_id' => "",
        //     'country' => "",
        // ]);
    }
}
