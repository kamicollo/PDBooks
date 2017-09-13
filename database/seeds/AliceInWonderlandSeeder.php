<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AliceInWonderlandSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Down the Rabbit-Hole",
			'number' => "Chapter One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Pool of Tears",
			'number' => "Chapter Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "A Caucus-Race and a Long Tale",
			'number' => "Chapter Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Rabbit Sends a Little Bill",
			'number' => "Chapter Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Advice from a Caterpillar",
			'number' => "Chapter Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Pig and Pepper",
			'number' => "Chapter Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "A Mad Tea-Party",
			'number' => "Chapter Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Queen’s Croquet-Ground",
			'number' => "Chapter Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Mock Turtle’s Story",
			'number' => "Chapter Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Lobster Quadrille",
			'number' => "Chapter Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Who Stole the Tarts?",
			'number' => "Chapter Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Alice’s Evidence",
			'number' => "Chapter Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => File::get(storage_path("books/alice-in-wonderland/12.html"))
		]);
	}
}
