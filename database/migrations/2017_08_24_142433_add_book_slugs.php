<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookSlugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
			$table->string('url_slug', 200)->default('');
		});
		DB::table('books')
			->where('isbn', '9781904808169')
				->update([	'url_slug' => "alice-in-wonderland"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
			$table->dropColumn('url_slug');
		});
    }
}
