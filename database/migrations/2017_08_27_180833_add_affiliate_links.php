<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAffiliateLinks extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('affiliates', function (Blueprint $table) {
            $table->string('amazon_link', 200);
            $table->string('bd_link', 200);
            $table->dropColumn('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('affiliates', function (Blueprint $table) {
            $table->dropColumn('amazon_link');
            $table->dropColumn('bd_link');
            $table->string('link', 200);
        });
    }
}
