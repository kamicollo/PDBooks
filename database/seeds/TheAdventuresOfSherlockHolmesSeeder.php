<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheAdventuresOfSherlockHolmesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "A Scandal in Bohemia (I)",
			'number' => "Adventure One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/1.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "A Scandal in Bohemia (II)",
			'number' => "Adventure One",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/2.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "A Scandal in Bohemia (III)",
			'number' => "Adventure One",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/3.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Red-Headed League",
			'number' => "Adventure Two",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/4.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "A Case of Identity",
			'number' => "Adventure Three",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/5.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Boscombe Valley Mystery",
			'number' => "Adventure Four",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/6.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Five Orange Pips",
			'number' => "Adventure Five",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/7.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Man with the Twisted Lip",
			'number' => "Adventure Six",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/8.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Blue Carbuncle",
			'number' => "Adventure Seven",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/9.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Speckled Band",
			'number' => "Adventure Eight",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/10.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Engineer’s Thumb",
			'number' => "Adventure Nine",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/11.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Noble Bachelor",
			'number' => "Adventure Ten",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/12.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Beryl Coronet",
			'number' => "Adventure Eleven",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/13.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "The Adventure of the Copper Beeches",
			'number' => "Adventure Twelve",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-sherlock-holmes/14.html"))
		]);
	}
}
