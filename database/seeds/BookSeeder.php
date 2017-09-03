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
            'illustrator' => "John Tenniel",
            'translator' => '',
            'goodreads_avg_rating' => 4.0,
            'goodreads_count_ratings' => 86036,
            'goodreads_link' => "https://www.goodreads.com/book/show/20570315-alice-s-adventures-in-wonderland",
            'description' => "Alice's Adventures in Wonderland is an 1865 fantasy novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children.",
            'description_quote' => '<p>“No wise fish would go anywhere without a porpoise.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Alice%27s_Adventures_in_Wonderland">Wikipedia</a>',
            'url_slug' => "alice-in-wonderland",
            'soundcloud_id' => '250835785',
            'country' => 'United Kingdom'
        ]);

        DB::table('books')->insert([
            'title' => "Through the Looking-Glass, and What Alice Found There",
            'author' => "Lewis Carroll",
            'first_publication_date' => date_create("1871-01-01"),
            'genre' => "Children's fiction",
            'isbn' => '',
            'illustrator' => "John Tenniel",
            'translator' => '',
            'goodreads_avg_rating' => 4.06,
            'goodreads_count_ratings' => 77841,
            'goodreads_link' => "https://www.goodreads.com/book/show/28094104-through-the-looking-glass-and-what-alice-found-there",
            'description' => "Through the Looking-Glass is a novel by Lewis Carroll (Charles Lutwidge Dodgson), and the sequel to Alice's Adventures in Wonderland (1865). Set some six months later than the earlier book, Alice again enters a fantastical world, this time by climbing through a mirror into the world that she can see beyond it. Through the Looking-Glass includes such celebrated verses as \"Jabberwocky\" and \"The Walrus and the Carpenter\", and the episode involving Tweedledum and Tweedledee.",
            'description_quote' => '<p>“Why, sometimes I\'ve believed as many as six impossible things before breakfast.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Through_the_Looking-Glass">Wikipedia</a>',
            'url_slug' => "through-the-looking-glass",
            'country' => 'United Kingdom'
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Sherlock Holmes",
            'author' => "Arthur Conan Doyle",
            'first_publication_date' => date_create("1892-10-14"),
            'genre' => "Detective fiction",
            'isbn' => '',
            'illustrator' => "Sidney Paget",
            'translator' => '',
            'goodreads_avg_rating' => 4.29,
            'goodreads_count_ratings' => 185639,
            'goodreads_link' => "https://www.goodreads.com/book/show/3590.The_Adventures_of_Sherlock_Holmes",
            'description' => "The Adventures of Sherlock Holmes is a collection of twelve short stories by Arthur Conan Doyle, featuring his fictional detective Sherlock Holmes. It was first published on 14 October 1892; the individual stories had been serialised in The Strand Magazine between July 1891 and June 1892. The stories are not in chronological order, and the only characters common to all twelve are Holmes and Dr. Watson. The stories are related in first-person narrative from Watson's point of view.",
            'description_quote' => '<p>“Never trust to general impressions, my boy, but concentrate yourself upon details.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Adventures_of_Sherlock_Holmes">Wikipedia</a>',
            'url_slug' => "the-adventures-of-sherlock-holmes",
            'country' => 'United Kingdom'
        ]);

        DB::table('books')->insert([
            'title' => "The Hound of the Baskervilles",
            'author' => "Arthur Conan Doyle",
            'first_publication_date' => date_create("1902-01-01"),
            'genre' => "Detective fiction",
            'isbn' => '',
            'illustrator' => "Sidney Paget",
            'translator' => '',
            'goodreads_avg_rating' => 4.09,
            'goodreads_count_ratings' => 179284,
            'goodreads_link' => "https://www.goodreads.com/book/show/8921.The_Hound_of_the_Baskervilles",
            'description' => "The Hound of the Baskervilles is the third of the crime novels written by Sir Arthur Conan Doyle featuring the detective Sherlock Holmes. Originally serialised in The Strand Magazine from August 1901 to April 1902, it is set largely on Dartmoor in Devon in England's West Country and tells the story of an attempted murder inspired by the legend of a fearsome, diabolical hound of supernatural origin. Sherlock Holmes and his companion Dr. Watson investigate the case. This was the first appearance of Holmes since his apparent death in \"The Final Problem\", and the success of The Hound of the Baskervilles led to the character's eventual revival.",
            'description_quote' => '<p>“There is nothing more stimulating than a case where everything goes against you.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Hound_of_the_Baskervilles">Wikipedia</a>',
            'url_slug' => "the-hound-of-the-baskervilles",
            'country' => 'United Kingdom'
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Tom Sawyer",
            'author' => "Mark Twain",
            'first_publication_date' => date_create("1876-01-01"),
            'genre' => "Children's literature",
            'isbn' => '',
            'illustrator' => "True Williams",
            'translator' => '',
            'goodreads_avg_rating' => 3.9,
            'goodreads_count_ratings' => 595846,
            'goodreads_link' => "https://www.goodreads.com/book/show/24583.The_Adventures_of_Tom_Sawyer",
            'description' => "The Adventures of Tom Sawyer by Mark Twain is an 1876 novel about a young boy growing up along the Mississippi River. It is set in the fictional town of St. Petersburg, inspired by Hannibal, Missouri, where Twain lived.",
            'description_quote' => '<p>“He was not the Model Boy of the village. He knew the model boy very well though—and loathed him.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Adventures_of_Tom_Sawyer">Wikipedia</a>',
            'url_slug' => "the-adventures-of-tom-sawyer",
            'country' => 'United States'
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Huckleberry Finn",
            'author' => "Mark Twain",
            'first_publication_date' => date_create("1884-12-10"),
            'genre' => "Children's literature",
            'isbn' => '',
            'illustrator' => "E.W. Kemble",
            'translator' => '',
            'goodreads_avg_rating' => 3.8,
            'goodreads_count_ratings' => 1004110,
            'goodreads_link' => "https://www.goodreads.com/book/show/2956.The_Adventures_of_Huckleberry_Finn",
            'description' => "The Adventures of Huckleberry Finn is a novel by Mark Twain, first published in the United Kingdom in December 1884 and in the United States in February 1885. Commonly named among the Great American Novels, the work is among the first in major American literature to be written throughout in vernacular English, characterized by local color regionalism. It is told in the first person by Huckleberry \"Huck\" Finn, a friend of Tom Sawyer the narrator of two other Twain novels (Tom Sawyer Abroad and Tom Sawyer, Detective). It is a direct sequel to The Adventures of Tom Sawyer.",
            'description_quote' => '<p>“Right is right, and wrong is wrong, and a body ain’t got no business doing wrong when he ain’t ignorant and knows better.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Adventures_of_Huckleberry_Finn">Wikipedia</a>',
            'url_slug' => "the-adventures-of-huckleberry-finn",
            'country' => 'United States'
        ]);

        // DB::table('books')->insert([
        //     'title' => "",
        //     'author' => "",
        //     'first_publication_date' => date_create(""),
        //     'genre' => "",
        //     'isbn' => '',
        //     'illustrator' => "",
        //     'translator' => '',
        //     'goodreads_avg_rating' => 0.0,
        //     'goodreads_count_ratings' => 0,
        //     'goodreads_link' => "",
        //     'description' => "",
        //     'description_quote' => '<p>“”</p>',
        //     'description_source' => '<a target="_blank" href=""></a>',
        //     'url_slug' => "",
        //     'soundclound_id' => "",
        //     'country' => "",
        // ]);
    }
}
