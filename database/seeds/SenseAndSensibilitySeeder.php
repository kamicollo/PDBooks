<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SenseAndSensibilitySeeder extends Seeder {
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
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Two",
			'number' => "",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Three",
			'number' => "",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Four",
			'number' => "",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Five",
			'number' => "",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Six",
			'number' => "",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seven",
			'number' => "",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eight",
			'number' => "",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nine",
			'number' => "",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Ten",
			'number' => "",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eleven",
			'number' => "",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twelve",
			'number' => "",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/12.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirteen",
			'number' => "",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/13.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fourteen",
			'number' => "",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/14.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifteen",
			'number' => "",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/15.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Sixteen",
			'number' => "",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/16.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seventeen",
			'number' => "",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/17.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eighteen",
			'number' => "",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/18.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nineteen",
			'number' => "",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/19.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty",
			'number' => "",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/20.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-One",
			'number' => "",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/21.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Two",
			'number' => "",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/22.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Three",
			'number' => "",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/23.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Four",
			'number' => "",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/24.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Five",
			'number' => "",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/25.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Six",
			'number' => "",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/26.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Seven",
			'number' => "",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/27.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Eight",
			'number' => "",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/28.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Nine",
			'number' => "",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/29.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty",
			'number' => "",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/30.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-One",
			'number' => "",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/31.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Two",
			'number' => "",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/32.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Three",
			'number' => "",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/33.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Four",
			'number' => "",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/34.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Five",
			'number' => "",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/35.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Six",
			'number' => "",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/36.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Seven",
			'number' => "",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/37.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Eight",
			'number' => "",
			'order' => 38,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/38.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Nine",
			'number' => "",
			'order' => 39,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/39.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty",
			'number' => "",
			'order' => 40,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/40.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-One",
			'number' => "",
			'order' => 41,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/41.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Two",
			'number' => "",
			'order' => 42,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/42.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Three",
			'number' => "",
			'order' => 43,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/43.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Four",
			'number' => "",
			'order' => 44,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/44.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Five",
			'number' => "",
			'order' => 45,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/45.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Six",
			'number' => "",
			'order' => 46,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/46.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Seven",
			'number' => "",
			'order' => 47,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/47.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Eight",
			'number' => "",
			'order' => 48,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/48.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Nine",
			'number' => "",
			'order' => 49,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/49.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty",
			'number' => "",
			'order' => 50,
			'book_id' => DB::table('books')->where('title', "Sense and Sensibility")->value('id'),
			'content' => File::get(storage_path("books/sense-and-sensibility/50.html"))
		]);
	}
}
