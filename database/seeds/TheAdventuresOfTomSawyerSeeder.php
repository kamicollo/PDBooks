<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheAdventuresOfTomSawyerSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Preface",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/1.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter One",
			'number' => "",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/2.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Two",
			'number' => "",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/3.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Three",
			'number' => "",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/4.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Four",
			'number' => "",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/5.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Five",
			'number' => "",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/6.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Six",
			'number' => "",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/7.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Seven",
			'number' => "",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/8.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eight",
			'number' => "",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/9.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Nine",
			'number' => "",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/10.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Ten",
			'number' => "",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/11.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eleven",
			'number' => "",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/12.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twelve",
			'number' => "",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/13.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirteen",
			'number' => "",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/14.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fourteen",
			'number' => "",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/15.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fifteen",
			'number' => "",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/16.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Sixteen",
			'number' => "",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/17.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Seventeen",
			'number' => "",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/18.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eighteen",
			'number' => "",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/19.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Nineteen",
			'number' => "",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/20.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty",
			'number' => "",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/21.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-One",
			'number' => "",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/22.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Two",
			'number' => "",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/23.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Three",
			'number' => "",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/24.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Four",
			'number' => "",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/25.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Five",
			'number' => "",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/26.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Six",
			'number' => "",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/27.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Seven",
			'number' => "",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/28.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Eight",
			'number' => "",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/29.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Nine",
			'number' => "",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/30.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty",
			'number' => "",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/31.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-One",
			'number' => "",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/32.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Two",
			'number' => "",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/33.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Three",
			'number' => "",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/34.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Four",
			'number' => "",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/35.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Five",
			'number' => "",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/36.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Conclusion",
			'number' => "",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/37.html"))
		]);
	}
}
