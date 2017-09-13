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
			'title' => "Notice",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/1.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Explanatory",
			'number' => "",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/2.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter One",
			'number' => "",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/3.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Two",
			'number' => "",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/4.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Three",
			'number' => "",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/5.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Four",
			'number' => "",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/6.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Five",
			'number' => "",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/7.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Six",
			'number' => "",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/8.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Seven",
			'number' => "",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/9.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eight",
			'number' => "",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/10.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Nine",
			'number' => "",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/11.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Ten",
			'number' => "",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/12.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eleven",
			'number' => "",
			'order' => 13,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/13.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twelve",
			'number' => "",
			'order' => 14,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/14.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirteen",
			'number' => "",
			'order' => 15,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/15.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fourteen",
			'number' => "",
			'order' => 16,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/16.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fifteen",
			'number' => "",
			'order' => 17,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/17.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Sixteen",
			'number' => "",
			'order' => 18,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/18.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Seventeen",
			'number' => "",
			'order' => 19,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/19.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Eighteen",
			'number' => "",
			'order' => 20,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/20.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Nineteen",
			'number' => "",
			'order' => 21,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/21.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty",
			'number' => "",
			'order' => 22,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/22.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-One",
			'number' => "",
			'order' => 23,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/23.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Two",
			'number' => "",
			'order' => 24,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/24.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Three",
			'number' => "",
			'order' => 25,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/25.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Four",
			'number' => "",
			'order' => 26,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/26.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Five",
			'number' => "",
			'order' => 27,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/27.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Six",
			'number' => "",
			'order' => 28,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/28.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Seven",
			'number' => "",
			'order' => 29,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/29.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Eight",
			'number' => "",
			'order' => 30,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/30.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Twenty-Nine",
			'number' => "",
			'order' => 31,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/31.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty",
			'number' => "",
			'order' => 32,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/32.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-One",
			'number' => "",
			'order' => 33,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/33.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Two",
			'number' => "",
			'order' => 34,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/34.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Three",
			'number' => "",
			'order' => 35,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/35.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Four",
			'number' => "",
			'order' => 36,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/36.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Five",
			'number' => "",
			'order' => 37,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/37.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Six",
			'number' => "",
			'order' => 38,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/38.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Seven",
			'number' => "",
			'order' => 39,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/39.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Eight",
			'number' => "",
			'order' => 40,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/40.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Thirty-Nine",
			'number' => "",
			'order' => 41,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/41.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fourty",
			'number' => "",
			'order' => 42,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/42.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fourty-One",
			'number' => "",
			'order' => 43,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/43.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter Fourty-Two",
			'number' => "",
			'order' => 44,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/44.html"))
		]);
		DB::table('chapters')->insert([
			'title' => "Chapter The Last",
			'number' => "",
			'order' => 45,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => File::get(storage_path("books/the-adventures-of-huckleberry-finn/45.html"))
		]);
	}
}
