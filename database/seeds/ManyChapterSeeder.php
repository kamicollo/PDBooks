<?php

use Illuminate\Database\Seeder;

class ManyChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createChapter(2);
		$this->createChapter(3);
		$this->createChapter(4);
		$this->createChapter(6);
		$this->createChapter(7);
		$this->createChapter(8);
		$this->createChapter(9);
    }
	
	public function createChapter($order) {
		DB::table('chapters')->insert([
            'title' => "Down the Rabbit-Hole",
            'number' => 'One or not. Maybe ' . $order,
            'order' => $order,
            'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
            'description' => "
		    <p>
		      Alice was beginning to get very tired of sitting by her sister on the
		      bank, and of having nothing to do: once or twice she had peeped into the
		      book her sister was reading, but it had no pictures or conversations in
		      it, ‘and what is the use of a book,’ thought Alice ‘without pictures or
		      conversations?’ 
		    </p>
		    <p>
		      So she was considering in her own mind (as well as she could, for the hot
		      day made her feel very sleepy and stupid), whether the pleasure of making
		      a daisy-chain would be worth the trouble of getting up and picking the
		      daisies, when suddenly a White Rabbit with pink eyes ran close by her.
		    </p>
			<code>
			 _________________________________
				( So you're back... about time... )
				 ---------------------------------
						o   ^__^
						 o  (oo)\_______
							(__)\       )\/\
								||----w |
								||     ||

			</code>
            ",
        ]);
	}
}
