<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrideAndPrejudiceSeeder extends Seeder {
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
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/1.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Two",
			'number' => "",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/2.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Three",
			'number' => "",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/3.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Four",
			'number' => "",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/4.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Five",
			'number' => "",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/5.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Six",
			'number' => "",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/6.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seven",
			'number' => "",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/7.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eight",
			'number' => "",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/8.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nine",
			'number' => "",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/9.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Ten",
			'number' => "",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/10.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eleven",
			'number' => "",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/11.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twelve",
			'number' => "",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/12.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirteen",
			'number' => "",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/13.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fourteen",
			'number' => "",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/14.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifteen",
			'number' => "",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/15.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Sixteen",
			'number' => "",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/16.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Seventeen",
			'number' => "",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/17.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Eighteen",
			'number' => "",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/18.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Nineteen",
			'number' => "",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/19.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty",
			'number' => "",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/20.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-One",
			'number' => "",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/21.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Two",
			'number' => "",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/22.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Three",
			'number' => "",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/23.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Four",
			'number' => "",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/24.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Five",
			'number' => "",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/25.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Six",
			'number' => "",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/26.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Seven",
			'number' => "",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/27.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Eight",
			'number' => "",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/28.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Nine",
			'number' => "",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/29.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty",
			'number' => "",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/30.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-One",
			'number' => "",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/31.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Two",
			'number' => "",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/32.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Three",
			'number' => "",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/33.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Four",
			'number' => "",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/34.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Five",
			'number' => "",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/35.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Six",
			'number' => "",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/36.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Seven",
			'number' => "",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/37.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Eight",
			'number' => "",
			'order' => 38,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/38.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Nine",
			'number' => "",
			'order' => 39,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/39.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty",
			'number' => "",
			'order' => 40,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/40.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-One",
			'number' => "",
			'order' => 41,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/41.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Two",
			'number' => "",
			'order' => 42,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/42.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Three",
			'number' => "",
			'order' => 43,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/43.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Four",
			'number' => "",
			'order' => 44,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/44.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Five",
			'number' => "",
			'order' => 45,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/45.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Six",
			'number' => "",
			'order' => 46,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/46.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Seven",
			'number' => "",
			'order' => 47,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/47.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Eight",
			'number' => "",
			'order' => 48,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/48.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Forty-Nine",
			'number' => "",
			'order' => 49,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/49.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty",
			'number' => "",
			'order' => 50,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/50.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-One",
			'number' => "",
			'order' => 51,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/51.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Two",
			'number' => "",
			'order' => 52,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/52.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Three",
			'number' => "",
			'order' => 53,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/53.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Four",
			'number' => "",
			'order' => 54,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/54.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Five",
			'number' => "",
			'order' => 55,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/55.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Six",
			'number' => "",
			'order' => 56,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/56.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Seven",
			'number' => "",
			'order' => 57,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/57.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Eight",
			'number' => "",
			'order' => 58,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/58.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Fifty-Nine",
			'number' => "",
			'order' => 59,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/59.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Sixty",
			'number' => "",
			'order' => 60,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/60.html"))
		]);

		DB::table('chapters')->insert([
			'title' => "Chapter Sixty-One",
			'number' => "",
			'order' => 61,
			'book_id' => DB::table('books')->where('title', "Pride and Prejudice")->value('id'),
			'content' => File::get(storage_path("books/pride-and-prejudice/61.html"))
		]);
	}
}
