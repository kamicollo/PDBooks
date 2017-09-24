<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheWindInTheWillowsSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "The River Bank",
			'number' => "Chapter One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Open Road",
			'number' => "Chapter Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Wild Wood",
			'number' => "Chapter Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Mr. Badger",
			'number' => "Chapter Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Dulce Domum",
			'number' => "Chapter Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Mr. Toad",
			'number' => "Chapter Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Piper at the Gates of Dawn",
			'number' => "Chapter Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Toad's Adventures",
			'number' => "Chapter Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Wayfarers All",
			'number' => "Chapter Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Further Adventures of Toad",
			'number' => "Chapter Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "'Like Summer Tempests Came His Tears'",
			'number' => "Chapter Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Return of Ulysses",
			'number' => "Chapter Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Wind in the Willows")->value('id'),
			'content' => File::get(storage_path("books/the-wind-in-the-willows/12.html"))
		]);
	}
}
