<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheWizardOfOzSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Introduction",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Cyclone",
			'number' => "Chapter One",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Council with the Munchkins",
			'number' => "Chapter Two",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "How Dorothy Saved the Scarecrow",
			'number' => "Chapter Three",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Road Through the Forest",
			'number' => "Chapter Four",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Rescue of the Tin Woodman",
			'number' => "Chapter Five",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Cowardly Lion",
			'number' => "Chapter Six",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Journey to the Great Oz",
			'number' => "Chapter Seven",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Deadly Poppy Field",
			'number' => "Chapter Eight",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Queen of the Field Mice",
			'number' => "Chapter Nine",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Guardian of the Gates",
			'number' => "Chapter Ten",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Emerald City of Oz",
			'number' => "Chapter Eleven",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/12.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Search for the Wicked Witch",
			'number' => "Chapter Twelve",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/13.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Rescue",
			'number' => "Chapter Thirteen",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/14.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Winged Monkeys",
			'number' => "Chapter Fourteen",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/15.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Discovery of Oz, the Terrible",
			'number' => "Chapter Fifteen",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/16.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Magic Art of the Great Humbug",
			'number' => "Chapter Sixteen",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/17.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "How the Balloon Was Launched",
			'number' => "Chapter Seventeen",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/18.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Away to the South",
			'number' => "Chapter Eighteen",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/19.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Attacked by the Fighting Trees",
			'number' => "Chapter Nineteen",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/20.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Dainty China Country",
			'number' => "Chapter Twenty",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/21.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Lion Becomes the King of Beasts",
			'number' => "Chapter Twenty-One",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/22.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "The Country of the Quadlings",
			'number' => "Chapter Twenty-Two",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/23.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Glinda The Good Witch Grants Dorothy's Wish",
			'number' => "Chapter Twenty-Three",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/24.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Home Again",
			'number' => "Chapter Twenty-Four",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Wonderful Wizard of Oz")->value('id'),
			'content' => File::get(storage_path("books/the-wizard-of-oz/25.html"))
		]);


	}
}
