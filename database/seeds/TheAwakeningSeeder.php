<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheAwakeningSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Chapter One",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Two",
			'number' => "",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Three",
			'number' => "",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Four",
			'number' => "",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Five",
			'number' => "",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Six",
			'number' => "",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seven",
			'number' => "",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eight",
			'number' => "",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nine",
			'number' => "",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Ten",
			'number' => "",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eleven",
			'number' => "",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twelve",
			'number' => "",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/12.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirteen",
			'number' => "",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/13.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fourteen",
			'number' => "",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/14.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifteen",
			'number' => "",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/15.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Sixteen",
			'number' => "",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/16.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seventeen",
			'number' => "",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/17.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eighteen",
			'number' => "",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/18.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nineteen",
			'number' => "",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/19.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty",
			'number' => "",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/20.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-One",
			'number' => "",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/21.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Two",
			'number' => "",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/22.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Three",
			'number' => "",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/23.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Four",
			'number' => "",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/24.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Five",
			'number' => "",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/25.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Six",
			'number' => "",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/26.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Seven",
			'number' => "",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/27.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Eight",
			'number' => "",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/28.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Nine",
			'number' => "",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/29.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty",
			'number' => "",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/30.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-One",
			'number' => "",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/31.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Two",
			'number' => "",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/32.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Three",
			'number' => "",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/33.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Four",
			'number' => "",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/34.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Five",
			'number' => "",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/35.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Six",
			'number' => "",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/36.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Seven",
			'number' => "",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/37.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Eight",
			'number' => "",
			'order' => 38,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/38.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Nine",
			'number' => "",
			'order' => 39,
			'book_id' => DB::table('books')->where('title', "The Awakening")->value('id'),
			'content' => File::get(storage_path("books/the-awakening/39.html"))
		]);
	}
}
