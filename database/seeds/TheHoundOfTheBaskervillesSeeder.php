<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheHoundOfTheBaskervillesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Mr. Sherlock Holmes",
			'number' => "Chapter One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Curse of the Baskervilles",
			'number' => "Chapter Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Problem",
			'number' => "Chapter Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Sir Henry Baskerville",
			'number' => "Chapter Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Three Broken Threads",
			'number' => "Chapter Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Baskerville Hall",
			'number' => "Chapter Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Stapletons of Merripit House",
			'number' => "Chapter Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "First Report of Dr. Watson",
			'number' => "Chapter Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Light upon the Moor",
			'number' => "Chapter Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Extract from the Diary of Dr. Watson",
			'number' => "Chapter Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Man on the Tor",
			'number' => "Chapter Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Death on the Moor",
			'number' => "Chapter Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/12.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Fixing the Nets",
			'number' => "Chapter Thirteen",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/13.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Hound of the Baskervilles",
			'number' => "Chapter Fourteen",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/14.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "A Retrospection",
			'number' => "Chapter Fifteen",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => File::get(storage_path("books/the-hound-of-the-baskervilles/15.html"))
		]);
	}
}
