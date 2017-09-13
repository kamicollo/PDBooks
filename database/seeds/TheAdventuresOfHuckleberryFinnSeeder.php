<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheAdventuresOfHuckleberryFinnSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Notice",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/1.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Explanatory",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/2.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter One",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/3.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Two",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/4.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Three",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/5.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Four",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/6.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Five",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/7.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Six",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/8.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Seven",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/9.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eight",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/10.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Nine",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/11.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Ten",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/12.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eleven",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/13.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twelve",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/14.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirteen",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/15.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fourteen",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/16.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fifteen",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/17.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Sixteen",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/18.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Seventeen",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/19.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Eighteen",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/20.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Nineteen",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/21.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/22.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-One",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/23.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Two",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/24.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Three",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/25.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Four",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/26.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Five",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/27.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Six",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/28.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Seven",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/29.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Eight",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/30.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Twenty-Nine",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/31.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/32.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-One",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/33.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Two",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/34.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Three",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/35.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Four",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/36.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Five",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/37.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Six",
			'order' => 38,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/38.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Seven",
			'order' => 39,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/39.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Eight",
			'order' => 40,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/40.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Thirty-Nine",
			'order' => 41,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/41.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fourty",
			'order' => 42,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/42.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fourty-One",
			'order' => 43,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/43.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter Fourty-Two",
			'order' => 44,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/44.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "",
			'number' => "Chapter The Last",
			'order' => 45,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/45.html"))
		]);
	}
}
