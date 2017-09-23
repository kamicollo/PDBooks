<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheYellowWallpaperSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "The Yellow Wallpaper",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Yellow Wallpaper")->value('id'),
			'content' => File::get(storage_path("books/the-yellow-wallpaper/1.html"))
		]);
	}
}
