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
            'genre' => "Fantasy",
            'isbn' => "9780007350827",
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
            'genre' => "Fantasy",
            'isbn' => "9780007350933",
            'illustrator' => "John Tenniel",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/83346.Through_the_Looking_Glass_and_What_Alice_Found_There",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "Through the Looking-Glass is a sequel to Lewis Carroll's <a class='laika' href='http://laikareads.com/books/alice-in-wonderland'>Alice's Adventures in Wonderland</a>. Set some six months later than the earlier book, Alice again enters a fantastical world, this time by climbing through a mirror into the world that she can see beyond it. Through the Looking-Glass includes such celebrated verses as \"Jabberwocky\" and \"The Walrus and the Carpenter\", and the episode involving Tweedledum and Tweedledee.",
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
            'genre' => "Classic Detective",
            'isbn' => "9780199536955",
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
            'genre' => "Classic Detective",
            'isbn' => "9780140437867",
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
            'genre' => "Adventure",
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
			'soundcloud_id' => "283654932",
            'country' => "United States"
        ]);

        DB::table('books')->insert([
            'title' => "The Adventures of Huckleberry Finn",
            'author' => "Mark Twain",
            'first_publication_date' => date_create("1884-12-10"),
            'genre' => "Adventure",
            'isbn' => "9780142437179",
            'illustrator' => "E.W. Kemble",
			'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/2956.The_Adventures_of_Huckleberry_Finn",
			'goodreads_avg_rating' => 0,
			'goodreads_count_ratings' => 0,
            'description' => "The Adventures of Huckleberry Finn is a novel by Mark Twain, first published in the United Kingdom in December 1884 and in the United States in February 1885. Commonly named among the <a href='https://en.wikipedia.org/wiki/Great_American_Novel' target='_blank'>Great American Novels</a>, this is one of the first works of American literature to be written in vernacular English, characterized by local color regionalism. It is told in the first person by Huckleberry \"Huck\" Finn, a friend of Tom Sawyer, the narrator of two other Twain novels (Tom Sawyer Abroad and Tom Sawyer, Detective). It is a direct sequel to <a class='laika' href='http://laikareads.com/books/the-adventures-of-tom-sawyer'>The Adventures of Tom Sawyer</a>.",
            'description_quote' => '<p>“Right is right, and wrong is wrong, and a body ain’t got no business doing wrong when he ain’t ignorant and knows better.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Adventures_of_Huckleberry_Finn">Wikipedia</a>',
            'url_slug' => "the-adventures-of-huckleberry-finn",
			'soundcloud_id' => "86291985",
            'country' => "United Kingdom"
        ]);

		DB::table('books')->insert([
            'title' => "The Yellow Wallpaper",
            'author' => "Charlotte Perkins Gilman",
            'first_publication_date' => date_create("1892"),
            'genre' => "Gender Issues",
            'isbn' => "9781558611580",
            'illustrator' => "",
            'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/286957.The_Yellow_Wall_Paper",
            'goodreads_avg_rating' => 0,
            'goodreads_count_ratings' => 0,
            'description' => "The Yellow Wallpaper is a 6,000-word short story by American writer Charlotte Perkins Gilman, first published in January 1892 in The New England Magazine. It is regarded as an important early work of American feminist literature, illustrating attitudes in the 19th century toward women's health, both physical and mental.",
            'description_quote' => '<p>“There are things in that paper that nobody knows but me, or ever will.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Yellow_Wallpaper">Wikipedia</a>',
            'url_slug' => "the-yellow-wallpaper",
            'soundcloud_id' => "164996001",
            'country' => "United States"
        ]);

		DB::table('books')->insert([
            'title' => "The Awakening",
            'author' => "Kate Chopin",
            'first_publication_date' => date_create("1899-04-22"),
            'genre' => "Gender Issues",
            'isbn' => "9780543898081",
            'illustrator' => "",
            'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/58345.The_Awakening",
            'goodreads_avg_rating' => 0,
            'goodreads_count_ratings' => 0,
            'description' => "The Awakening is a novel by Kate Chopin, first published in 1899. Set in New Orleans and on the Louisiana Gulf coast at the end of the 19th century, the plot centers on Edna Pontellier and her struggle between her increasingly unorthodox views on femininity and motherhood with the prevailing social attitudes of the turn-of-the-century American South. It is one of the earliest American novels that focuses on women's issues without condescension. It is also widely seen as a landmark work of early feminism, generating a mixed reaction from contemporary readers and critics.",
            'description_quote' => '<p>“She was becoming herself and daily casting aside that fictitious self which we assume like a garment with which to appear before the world.”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/The_Awakening_(Chopin_novel)">Wikipedia</a>',
            'url_slug' => "the-awakening",
            'soundcloud_id' => "",
            'country' => "United States"
        ]);

		DB::table('books')->insert([
            'title' => "Sense and Sensibility",
            'author' => "Jane Austen",
            'first_publication_date' => date_create("1811"),
            'genre' => "Romance",
            'isbn' => "9780141439662",
            'illustrator' => "Hugh Thomson",
            'translator' => "",
            'goodreads_link' => "https://www.goodreads.com/book/show/14935.Sense_and_Sensibility",
            'goodreads_avg_rating' => 0,
            'goodreads_count_ratings' => 0,
            'description' => "Sense and Sensibility is a novel by Jane Austen, published in 1811. It was published anonymously; <i>By A Lady</i> appears on the cover page where the author's name might have been. It tells the story of the Dashwood sisters, Elinor and Marianne, both of age to marry.",
            'description_quote' => '<p>“The more I know of the world, the more I am convinced that I shall never see a man whom I can really love. I require so much!”</p>',
            'description_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Sense_and_Sensibility">Wikipedia</a>',
            'url_slug' => "sense-and-sensibility",
            'soundcloud_id' => "213793616",
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
        //     'soundcloud_id' => "",
        //     'country' => ""
        // ]);
    }
}
