<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBookDescriptions extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('books', function (Blueprint $table) {
            $table->text('descr_quote')->nullable();
            $table->string('descr_source', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('descr_quote');
        });
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('descr_source');
        });
    }
}
