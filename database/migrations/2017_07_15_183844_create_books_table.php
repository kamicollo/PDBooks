<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 200);
            $table->string('author', 200);
            $table->date('first_publication_date');
            $table->string('genre', 200);
            $table->string('illustrator', 200);
            $table->float('goodreads_avg_rating', 3, 2);
            $table->integer('goodread__countof_ratings');
            $table->string('link_to_goodreads', 200);
            $table->text('description');
            $table->string('background_image', 200);
            $table->string('cover_image', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('books');
    }
}
