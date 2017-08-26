<?php

use Illuminate\Database\Seeder;

class AffiliateSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/1.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/2.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/3.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/4.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/5.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Mekeke",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'link' => "",
            'cover_image' => 'images/6.jpg'
        ]);
    }
}
