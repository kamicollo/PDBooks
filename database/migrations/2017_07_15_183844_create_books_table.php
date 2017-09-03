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
            $table->integer('goodreads_count_ratings');
            $table->string('goodreads_link', 200);
            $table->text('description');
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
