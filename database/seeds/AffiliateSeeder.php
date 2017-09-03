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
            'title' => "Alice's Adventures in Wonderland and Through the Looking Glass (Clothbound Classics)",
            'order' => 1,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Adventures-Wonderland-Clothbound-Classics-Hardcover/dp/B00NPMPSCK/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-Lewis-Carroll-Sir-John-Tenniel/9780141192468/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/1.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Yayoi Kusama)",
            'order' => 2,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Lewis-Carrolls-Alices-Adventures-Wonderland/dp/0141197307/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Lewis-Carrolls-Alices-Adventures-in-Wonderland-Lewis-Carroll-Yayoi-Kusam/9780141197302/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/2.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Narrated by Scarlett Johansson)",
            'order' => 3,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-in-Wonderland/dp/B015D84R02/?tag=laikareads-20",
            'bd_link' => "",
			'type' => 'audible',
            'cover_image' => 'images/alice-in-wonderland/3.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Andrea D'Aquino)",
            'order' => 4,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Classics-Reimagined-Alices-Adventures-Wonderland/dp/1631590758/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Classics-Reimagined-Alices-Adventures-in-Wonderland-Lewis-Carroll-Andre-Daquino/9781631590757/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/4.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Alice's Adventures in Wonderland (Illustrated by Anna Bond)",
            'order' => 5,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Lewis-Carroll/dp/0147515874/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-Lewis-Carroll/9780147515872/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/5.jpg'
        ]);
        DB::table('affiliates')->insert([
            'title' => "Alice’s Adventures in Wonderland (Illustrated by Salvador Dali)",
            'order' => 6,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'amazon_link' => "https://www.amazon.com/Alices-Adventures-Wonderland-Lewis-Carroll/dp/0691170029/?tag=laikareads-20",
            'bd_link' => "https://www.bookdepository.com/Alices-Adventures-in-Wonderland-Lewis-Carroll-Mark-Burstein-Salvador-Dali/9780691170022/?a_aid=ffed6a58",
            'cover_image' => 'images/alice-in-wonderland/6.jpg'
        ]);
    }
}
