<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBookDescriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
			$table->text('descr_quote')->nullable();
			$table->string('descr_source', 200)->nullable();
		});
		DB::table('books')
					->where('isbn', '9781904808169')
					->update([	'description' => "Alice's Adventures in Wonderland (commonly shortened to Alice in Wonderland) is an 1865 fantasy novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children.",
								'descr_quote' => '<p>“No wise fish would go anywhere without a porpoise.”</p>',
								'descr_source' => '<a target="_blank" href="https://en.wikipedia.org/wiki/Alice%27s_Adventures_in_Wonderland">Wikipedia</a>'
					]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		
		DB::update('update books 
			set description = 
				CONCAT("<blockquote>", descr_quote, "</blockquote>", "<p>", description, descr_source, "</p>")'
		);
		
        Schema::table('books', function (Blueprint $table) {
			$table->dropColumn('descr_quote');
		});
		Schema::table('books', function (Blueprint $table) {
			$table->dropColumn('descr_source');
		});
    }
}
