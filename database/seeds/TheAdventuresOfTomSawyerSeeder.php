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
			'title' => "",
			'number' => "Preface",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/1.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter One",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/2.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Two",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/3.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Three",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/4.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Four",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/5.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Five",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/6.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Six",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/7.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Seven",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/8.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eight",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/9.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Nine",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/10.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Ten",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/11.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eleven",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/12.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twelve",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/13.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirteen",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/14.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fourteen",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/15.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fifteen",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/16.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Sixteen",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/17.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Seventeen",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/18.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eighteen",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/19.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Nineteen",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/20.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/21.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-One",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/22.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Two",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/23.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Three",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/24.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Four",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/25.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Five",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/26.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Six",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/27.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Seven",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/28.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Eight",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/29.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Nine",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/30.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/31.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-One",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/32.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Two",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/33.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Three",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/34.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Four",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/35.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Five",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/36.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Conclusion",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-tom-sawyer/37.html"))
		]);
	}
}
