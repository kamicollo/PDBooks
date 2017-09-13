<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ThroughTheLookingGlassSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Looking-Glass House",
			'number' => "Chapter One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Garden of Live Flowers",
			'number' => "Chapter Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Looking-Glass Insects",
			'number' => "Chapter Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Tweedledum and Tweedledee",
			'number' => "Chapter Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Wool and Water",
			'number' => "Chapter Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Humpty Dumpty",
			'number' => "Chapter Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Lion and the Unicorn",
			'number' => "Chapter Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "‘It’s My Own Invention’",
			'number' => "Chapter Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Queen Alice",
			'number' => "Chapter Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Shaking",
			'number' => "Chapter Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Waking",
			'number' => "Chapter Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Which Dreamed It?",
			'number' => "Chapter Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => File::get(storage_path("books/through-the-looking-glass/12.html"))
		]);
	}
}
