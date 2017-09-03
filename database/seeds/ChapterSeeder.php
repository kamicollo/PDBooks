<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChapterSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('chapters')->insert([
			'title' => "Down the Rabbit-Hole",
			'number' => "One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
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
		    <p>
		      There was nothing so <i>very</i> remarkable in that; nor did Alice think it so
		      <i>very</i> much out of the way to hear the Rabbit say to itself, ‘Oh dear! Oh
		      dear! I shall be late!’ (when she thought it over afterwards, it occurred
		      to her that she ought to have wondered at this, but at the time it all
		      seemed quite natural); but when the Rabbit actually <i>took a watch out of
		      its waistcoat-pocket</i>, and looked at it, and then hurried on, Alice started
		      to her feet, for it flashed across her mind that she had never before seen
		      a rabbit with either a waistcoat-pocket, or a watch to take out of it, and
		      burning with curiosity, she ran across the field after it, and fortunately
		      was just in time to see it pop down a large rabbit-hole under the hedge.
		    </p>
		    <p>
		      In another moment down went Alice after it, never once considering how in
		      the world she was to get out again.
		    </p>
		    <p>
		      The rabbit-hole went straight on like a tunnel for some way, and then
		      dipped suddenly down, so suddenly that Alice had not a moment to think
		      about stopping herself before she found herself falling down a very deep
		      well.
		    </p>
		    <p>
		      Either the well was very deep, or she fell very slowly, for she had plenty
		      of time as she went down to look about her and to wonder what was going to
		      happen next. First, she tried to look down and make out what she was
		      coming to, but it was too dark to see anything; then she looked at the
		      sides of the well, and noticed that they were filled with cupboards and
		      book-shelves; here and there she saw maps and pictures hung upon pegs. She
		      took down a jar from one of the shelves as she passed; it was labelled
		      <span class='aiw-marmelade'>ORANGE MARMALADE</span>, but to her great disappointment it was empty: she did
		      not like to drop the jar for fear of killing somebody, so managed to put
		      it into one of the cupboards as she fell past it.
		    </p>
		    <p>
		      ‘Well!’ thought Alice to herself, ‘after such a fall as this, I shall
		      think nothing of tumbling down stairs! How brave they’ll all think me at
		      home! Why, I wouldn’t say anything about it, even if I fell off the top of
		      the house!’ (Which was very likely true.)
		    </p>
		    <p>
		      Down, down, down. Would the fall <i>never</i> come to an end! ‘I wonder how many
		      miles I’ve fallen by this time?’ she said aloud. ‘I must be getting
		      somewhere near the centre of the earth. Let me see: that would be four
		      thousand miles down, I think—’ (for, you see, Alice had learnt
		      several things of this sort in her lessons in the schoolroom, and though
		      this was not a <i>very</i> good opportunity for showing off her knowledge, as
		      there was no one to listen to her, still it was good practice to say it
		      over) ‘—yes, that’s about the right distance—but then I wonder
		      what Latitude or Longitude I’ve got to?’ (Alice had no idea what Latitude
		      was, or Longitude either, but thought they were nice grand words to say.)
		    </p>
		    <p>
		      Presently she began again. ‘I wonder if I shall fall right <i>through</i> the
		      earth! How funny it’ll seem to come out among the people that walk with
		      their heads downward! The Antipathies, I think—’ (she was rather
		      glad there <i>was</i> no one listening, this time, as it didn’t sound at all the
		      right word) ‘—but I shall have to ask them what the name of the
		      country is, you know. Please, Ma’am, is this New Zealand or Australia?’
		      (and she tried to curtsey as she spoke—fancy <i>curtseying</i> as you’re
		      falling through the air! Do you think you could manage it?) ‘And what an
		      ignorant little girl she’ll think me for asking! No, it’ll never do to
		      ask: perhaps I shall see it written up somewhere.’
		    </p>
		    <p>
		      Down, down, down. There was nothing else to do, so Alice soon began
		      talking again. ‘Dinah’ll miss me very much to-night, I should think!’
		      (Dinah was the cat.) ‘I hope they’ll remember her saucer of milk at
		      tea-time. Dinah my dear! I wish you were down here with me! There are no
		      mice in the air, I’m afraid, but you might catch a bat, and that’s very
		      like a mouse, you know. But do cats eat bats, I wonder?’ And here Alice
		      began to get rather sleepy, and went on saying to herself, in a dreamy
		      sort of way, ‘Do cats eat bats? Do cats eat bats?’ and sometimes, ‘Do bats
		      eat cats?’ for, you see, as she couldn’t answer either question, it didn’t
		      much matter which way she put it. She felt that she was dozing off, and
		      had just begun to dream that she was walking hand in hand with Dinah, and
		      saying to her very earnestly, ‘Now, Dinah, tell me the truth: did you ever
		      eat a bat?’ when suddenly, thump! thump! down she came upon a heap of
		      sticks and dry leaves, and the fall was over.
		    </p>
		    <p>
		      Alice was not a bit hurt, and she jumped up on to her feet in a moment:
		      she looked up, but it was all dark overhead; before her was another long
		      passage, and the White Rabbit was still in sight, hurrying down it. There
		      was not a moment to be lost: away went Alice like the wind, and was just
		      in time to hear it say, as it turned a corner, ‘Oh my ears and whiskers,
		      how late it’s getting!’ She was close behind it when she turned the
		      corner, but the Rabbit was no longer to be seen: she found herself in a
		      long, low hall, which was lit up by a row of lamps hanging from the roof.
		    </p>
		    <p>
		      There were doors all round the hall, but they were all locked; and when
		      Alice had been all the way down one side and up the other, trying every
		      door, she walked sadly down the middle, wondering how she was ever to get
		      out again.
		    </p>
		    <p>
		      Suddenly she came upon a little three-legged table, all made of solid
		      glass; there was nothing on it except a tiny golden key, and Alice’s first
		      thought was that it might belong to one of the doors of the hall; but,
		      alas! either the locks were too large, or the key was too small, but at
		      any rate it would not open any of them. However, on the second time round,
		      she came upon a low curtain she had not noticed before, and behind it was
		      a little door about fifteen inches high: she tried the little golden key
		      in the lock, and to her great delight it fitted!
		    </p>
		    <p>
		      Alice opened the door and found that it led into a small passage, not much
		      larger than a rat-hole: she knelt down and looked along the passage into
		      the loveliest garden you ever saw. How she longed to get out of that dark
		      hall, and wander about among those beds of bright flowers and those cool
		      fountains, but she could not even get her head through the doorway; ‘and
		      even if my head would go through,’ thought poor Alice, ‘it would be of
		      very little use without my shoulders. Oh, how I wish I could shut up like
		      a telescope! I think I could, if I only knew how to begin.’ For, you see,
		      so many out-of-the-way things had happened lately, that Alice had begun to
		      think that very few things indeed were really impossible.
		    </p>
		    <p>
		      There seemed to be no use in waiting by the little door, so she went back
		      to the table, half hoping she might find another key on it, or at any rate
		      a book of rules for shutting people up like telescopes: this time she
		      found a little bottle on it, (‘which certainly was not here before,’ said
		      Alice,) and round the neck of the bottle was a paper label, with the words
		      <span class='aiw-drink'>DRINK ME</span> beautifully printed on it in large letters.
		    </p>
		    <p>
		      It was all very well to say ‘Drink me,’ but the wise little Alice was not
		      going to do <i>that</i> in a hurry. ‘No, I’ll look first,’ she said, ‘and see
		      whether it’s marked “<i>poison</i>” or not’; for she had read several nice little
		      histories about children who had got burnt, and eaten up by wild beasts
		      and other unpleasant things, all because they <i>would</i> not remember the
		      simple rules their friends had taught them: such as, that a red-hot poker
		      will burn you if you hold it too long; and that if you cut your finger
		      <i>very</i> deeply with a knife, it usually bleeds; and she had never forgotten
		      that, if you drink much from a bottle marked ‘poison,’ it is almost
		      certain to disagree with you, sooner or later.
		    </p>
		    <p>
		      However, this bottle was <i>not</i> marked ‘poison,’ so Alice ventured to taste
		      it, and finding it very nice, (it had, in fact, a sort of mixed flavour of
		      cherry-tart, custard, pine-apple, roast turkey, toffee, and hot buttered
		      toast,) she very soon finished it off.
		    </p>
		    <p class='aiw-separator'>*****</p>
		    <p>
		      ‘What a curious feeling!’ said Alice; ‘I must be shutting up like a
		      telescope.’
		    </p>
		    <p>
		      And so it was indeed: she was now only ten inches high, and her face
		      brightened up at the thought that she was now the right size for going
		      through the little door into that lovely garden. First, however, she
		      waited for a few minutes to see if she was going to shrink any further:
		      she felt a little nervous about this; ‘for it might end, you know,’ said
		      Alice to herself, ‘in my going out altogether, like a candle. I wonder
		      what I should be like then?’ And she tried to fancy what the flame of a
		      candle is like after the candle is blown out, for she could not remember
		      ever having seen such a thing.
		    </p>
		    <p>
		      After a while, finding that nothing more happened, she decided on going
		      into the garden at once; but, alas for poor Alice! when she got to the
		      door, she found she had forgotten the little golden key, and when she went
		      back to the table for it, she found she could not possibly reach it: she
		      could see it quite plainly through the glass, and she tried her best to
		      climb up one of the legs of the table, but it was too slippery; and when
		      she had tired herself out with trying, the poor little thing sat down and
		      cried.
		    </p>
		    <p>
		      ‘Come, there’s no use in crying like that!’ said Alice to herself, rather
		      sharply; ‘I advise you to leave off this minute!’ She generally gave
		      herself very good advice, (though she very seldom followed it), and
		      sometimes she scolded herself so severely as to bring tears into her eyes;
		      and once she remembered trying to box her own ears for having cheated
		      herself in a game of croquet she was playing against herself, for this
		      curious child was very fond of pretending to be two people. ‘But it’s no
		      use now,’ thought poor Alice, ‘to pretend to be two people! Why, there’s
		      hardly enough of me left to make <i>one</i> respectable person!’
		    </p>
		    <p>
		      Soon her eye fell on a little glass box that was lying under the table:
		      she opened it, and found in it a very small cake, on which the words <span class='aiw-eat'>EAT
		      ME</span> were beautifully marked in currants. ‘Well, I’ll eat it,’ said Alice,
		      ‘and if it makes me grow larger, I can reach the key; and if it makes me
		      grow smaller, I can creep under the door; so either way I’ll get into the
		      garden, and I don’t care which happens!’
		    </p>
		    <p>
		      She ate a little bit, and said anxiously to herself, ‘Which way? Which
		      way?’, holding her hand on the top of her head to feel which way it was
		      growing, and she was quite surprised to find that she remained the same
		      size: to be sure, this generally happens when one eats cake, but Alice had
		      got so much into the way of expecting nothing but out-of-the-way things to
		      happen, that it seemed quite dull and stupid for life to go on in the
		      common way.
		    </p>
		    <p>
		      So she set to work, and very soon finished off the cake.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Pool of Tears",
			'number' => "Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
			  &lsquo;Curiouser and curiouser!&rsquo; cried Alice (she was so much surprised, that
			  for the moment she quite forgot how to speak good English); &lsquo;now I&rsquo;m
			  opening out like the largest telescope that ever was! Good-bye, feet!&rsquo;
			  (for when she looked down at her feet, they seemed to be almost out of
			  sight, they were getting so far off). &lsquo;Oh, my poor little feet, I wonder
			  who will put on your shoes and stockings for you now, dears? I&rsquo;m sure <i>I</i>
			  shan&rsquo;t be able! I shall be a great deal too far off to trouble myself
			  about you: you must manage the best way you can;&mdash;but I must be kind
			  to them,&rsquo; thought Alice, &lsquo;or perhaps they won&rsquo;t walk the way I want to go!
			  Let me see: I&rsquo;ll give them a new pair of boots every Christmas.&rsquo;
			</p>
			<p>
			  And she went on planning to herself how she would manage it. &lsquo;They must go
			  by the carrier,&rsquo; she thought; &lsquo;and how funny it&rsquo;ll seem, sending presents
			  to one&rsquo;s own feet! And how odd the directions will look!
			</p>
			<p class='aiw-foot' class='stanza'>
			 Alice&rsquo;s Right Foot, Esq.
			<br>
			   Hearthrug,
			<br>
				 near The Fender,
			<br>
				   (with Alice&rsquo;s love).
			</p>
			<p>
			  Oh dear, what nonsense I&rsquo;m talking!&rsquo;
			</p>
			<p>
			  Just then her head struck against the roof of the hall: in fact she was
			  now more than nine feet high, and she at once took up the little golden
			  key and hurried off to the garden door.
			</p>
			<p>
			  Poor Alice! It was as much as she could do, lying down on one side, to
			  look through into the garden with one eye; but to get through was more
			  hopeless than ever: she sat down and began to cry again.
			</p>
			<p>
			  &lsquo;You ought to be ashamed of yourself,&rsquo; said Alice, &lsquo;a great girl like
			  you,&rsquo; (she might well say this), &lsquo;to go on crying in this way! Stop this
			  moment, I tell you!&rsquo; But she went on all the same, shedding gallons of
			  tears, until there was a large pool all round her, about four inches deep
			  and reaching half down the hall.
			</p>
			<p>
			  After a time she heard a little pattering of feet in the distance, and she
			  hastily dried her eyes to see what was coming. It was the White Rabbit
			  returning, splendidly dressed, with a pair of white kid gloves in one hand
			  and a large fan in the other: he came trotting along in a great hurry,
			  muttering to himself as he came, &lsquo;Oh! the Duchess, the Duchess! Oh! won&rsquo;t
			  she be savage if I&rsquo;ve kept her waiting!&rsquo; Alice felt so desperate that she
			  was ready to ask help of any one; so, when the Rabbit came near her, she
			  began, in a low, timid voice, &lsquo;If you please, sir&mdash;&rsquo; The Rabbit
			  started violently, dropped the white kid gloves and the fan, and skurried
			  away into the darkness as hard as he could go.
			</p>
			<p>
			  Alice took up the fan and gloves, and, as the hall was very hot, she kept
			  fanning herself all the time she went on talking: &lsquo;Dear, dear! How queer
			  everything is to-day! And yesterday things went on just as usual. I wonder
			  if I&rsquo;ve been changed in the night? Let me think: was I the same when I got
			  up this morning? I almost think I can remember feeling a little different.
			  But if I&rsquo;m not the same, the next question is, Who in the world am I? Ah,
			  <i>that&rsquo;s</i> the great puzzle!&rsquo; And she began thinking over all the children she
			  knew that were of the same age as herself, to see if she could have been
			  changed for any of them.
			</p>
			<p>
			  &lsquo;I&rsquo;m sure I&rsquo;m not Ada,&rsquo; she said, &lsquo;for her hair goes in such long
			  ringlets, and mine doesn&rsquo;t go in ringlets at all; and I&rsquo;m sure I can&rsquo;t be
			  Mabel, for I know all sorts of things, and she, oh! she knows such a very
			  little! Besides, <i>she&rsquo;s</i> she, and <i>I&rsquo;m</i> I, and&mdash;oh dear, how puzzling it
			  all is! I&rsquo;ll try if I know all the things I used to know. Let me see: four
			  times five is twelve, and four times six is thirteen, and four times seven
			  is&mdash;oh dear! I shall never get to twenty at that rate! However, the
			  Multiplication Table doesn&rsquo;t signify: let&rsquo;s try Geography. London is the
			  capital of Paris, and Paris is the capital of Rome, and Rome&mdash;no,
			  <i>that&rsquo;s</i> all wrong, I&rsquo;m certain! I must have been changed for Mabel! I&rsquo;ll
			  try and say &ldquo;<i>How doth the little</i>&mdash;&ldquo;&rsquo; and she crossed her hands on her
			  lap as if she were saying lessons, and began to repeat it, but her voice
			  sounded hoarse and strange, and the words did not come the same as they
			  used to do:&mdash;
			</p>
			<p class='aiw-crocodile stanza'>
			 &lsquo;How doth the little crocodile
			<br>
			  Improve his shining tail,
			<br>
			 And pour the waters of the Nile
			<br>
			  On every golden scale!
			<br>
			</p>
			<p class='aiw-crocodile stanza'>
			 &lsquo;How cheerfully he seems to grin,
			<br>
			  How neatly spread his claws,
			<br>
			 And welcome little fishes in
			<br>
			  With gently smiling jaws!&rsquo;
			</p>
			<p>
			  &lsquo;I&rsquo;m sure those are not the right words,&rsquo; said poor Alice, and her eyes
			  filled with tears again as she went on, &lsquo;I must be Mabel after all, and I
			  shall have to go and live in that poky little house, and have next to no
			  toys to play with, and oh! ever so many lessons to learn! No, I&rsquo;ve made up
			  my mind about it; if I&rsquo;m Mabel, I&rsquo;ll stay down here! It&rsquo;ll be no use their
			  putting their heads down and saying &ldquo;Come up again, dear!&rdquo; I shall only
			  look up and say &ldquo;Who am I then? Tell me that first, and then, if I like
			  being that person, I&rsquo;ll come up: if not, I&rsquo;ll stay down here till I&rsquo;m
			  somebody else&rdquo;&mdash;but, oh dear!&rsquo; cried Alice, with a sudden burst of
			  tears, &lsquo;I do wish they <i>would</i> put their heads down! I am so <i>very</i> tired of
			  being all alone here!&rsquo;
			</p>
			<p>
			  As she said this she looked down at her hands, and was surprised to see
			  that she had put on one of the Rabbit&rsquo;s little white kid gloves while she
			  was talking. &lsquo;How <i>can</i> I have done that?&rsquo; she thought. &lsquo;I must be growing
			  small again.&rsquo; She got up and went to the table to measure herself by it,
			  and found that, as nearly as she could guess, she was now about two feet
			  high, and was going on shrinking rapidly: she soon found out that the
			  cause of this was the fan she was holding, and she dropped it hastily,
			  just in time to avoid shrinking away altogether.
			</p>
			<p>
			  &lsquo;That <i>was</i> a narrow escape!&rsquo; said Alice, a good deal frightened at the
			  sudden change, but very glad to find herself still in existence; &lsquo;and now
			  for the garden!&rsquo; and she ran with all speed back to the little door: but,
			  alas! the little door was shut again, and the little golden key was lying
			  on the glass table as before, &lsquo;and things are worse than ever,&rsquo; thought
			  the poor child, &lsquo;for I never was so small as this before, never! And I
			  declare it&rsquo;s too bad, that it is!&rsquo;
			</p>
			<p>
			  As she said these words her foot slipped, and in another moment, splash!
			  she was up to her chin in salt water. Her first idea was that she had
			  somehow fallen into the sea, &lsquo;and in that case I can go back by railway,&rsquo;
			  she said to herself. (Alice had been to the seaside once in her life, and
			  had come to the general conclusion, that wherever you go to on the English
			  coast you find a number of bathing machines in the sea, some children
			  digging in the sand with wooden spades, then a row of lodging houses, and
			  behind them a railway station.) However, she soon made out that she was in
			  the pool of tears which she had wept when she was nine feet high.
			</p>
			<p>
			  &lsquo;I wish I hadn&rsquo;t cried so much!&rsquo; said Alice, as she swam about, trying to
			  find her way out. &lsquo;I shall be punished for it now, I suppose, by being
			  drowned in my own tears! That <i>will</i> be a queer thing, to be sure! However,
			  everything is queer to-day.&rsquo;
			</p>
			<p>
			  Just then she heard something splashing about in the pool a little way
			  off, and she swam nearer to make out what it was: at first she thought it
			  must be a walrus or hippopotamus, but then she remembered how small she
			  was now, and she soon made out that it was only a mouse that had slipped
			  in like herself.
			</p>
			<p>
			  &lsquo;Would it be of any use, now,&rsquo; thought Alice, &lsquo;to speak to this mouse?
			  Everything is so out-of-the-way down here, that I should think very likely
			  it can talk: at any rate, there&rsquo;s no harm in trying.&rsquo; So she began: &lsquo;O
			  Mouse, do you know the way out of this pool? I am very tired of swimming
			  about here, O Mouse!&rsquo; (Alice thought this must be the right way of
			  speaking to a mouse: she had never done such a thing before, but she
			  remembered having seen in her brother&rsquo;s Latin Grammar, &lsquo;A mouse&mdash;of a
			  mouse&mdash;to a mouse&mdash;a mouse&mdash;O mouse!&rsquo;) The Mouse looked at
			  her rather inquisitively, and seemed to her to wink with one of its little
			  eyes, but it said nothing.
			</p>
			<p>
			  &lsquo;Perhaps it doesn&rsquo;t understand English,&rsquo; thought Alice; &lsquo;I daresay it&rsquo;s a
			  French mouse, come over with William the Conqueror.&rsquo; (For, with all her
			  knowledge of history, Alice had no very clear notion how long ago anything
			  had happened.) So she began again: &lsquo;Ou est ma chatte?&rsquo; which was the first
			  sentence in her French lesson-book. The Mouse gave a sudden leap out of
			  the water, and seemed to quiver all over with fright. &lsquo;Oh, I beg your
			  pardon!&rsquo; cried Alice hastily, afraid that she had hurt the poor animal&rsquo;s
			  feelings. &lsquo;I quite forgot you didn&rsquo;t like cats.&rsquo;
			</p>
			<p>
			  &lsquo;Not like cats!&rsquo; cried the Mouse, in a shrill, passionate voice. &lsquo;Would
			  <i>you</i> like cats if you were me?&rsquo;
			</p>
			<p>
			  &lsquo;Well, perhaps not,&rsquo; said Alice in a soothing tone: &lsquo;don&rsquo;t be angry about
			  it. And yet I wish I could show you our cat Dinah: I think you&rsquo;d take a
			  fancy to cats if you could only see her. She is such a dear quiet thing,&rsquo;
			  Alice went on, half to herself, as she swam lazily about in the pool, &lsquo;and
			  she sits purring so nicely by the fire, licking her paws and washing her
			  face&mdash;and she is such a nice soft thing to nurse&mdash;and she&rsquo;s such
			  a capital one for catching mice&mdash;oh, I beg your pardon!&rsquo; cried Alice
			  again, for this time the Mouse was bristling all over, and she felt
			  certain it must be really offended. &lsquo;We won&rsquo;t talk about her any more if
			  you&rsquo;d rather not.&rsquo;
			</p>
			<p>
			  &lsquo;We indeed!&rsquo; cried the Mouse, who was trembling down to the end of his
			  tail. &lsquo;As if <i>I</i> would talk on such a subject! Our family always <i>hated</i> cats:
			  nasty, low, vulgar things! Don&rsquo;t let me hear the name again!&rsquo;
			</p>
			<p>
			  &lsquo;I won&rsquo;t indeed!&rsquo; said Alice, in a great hurry to change the subject of
			  conversation. &lsquo;Are you&mdash;are you fond&mdash;of&mdash;of dogs?&rsquo; The
			  Mouse did not answer, so Alice went on eagerly: &lsquo;There is such a nice
			  little dog near our house I should like to show you! A little bright-eyed
			  terrier, you know, with oh, such long curly brown hair! And it&rsquo;ll fetch
			  things when you throw them, and it&rsquo;ll sit up and beg for its dinner, and
			  all sorts of things&mdash;I can&rsquo;t remember half of them&mdash;and it
			  belongs to a farmer, you know, and he says it&rsquo;s so useful, it&rsquo;s worth a
			  hundred pounds! He says it kills all the rats and&mdash;oh dear!&rsquo; cried
			  Alice in a sorrowful tone, &lsquo;I&rsquo;m afraid I&rsquo;ve offended it again!&rsquo; For the
			  Mouse was swimming away from her as hard as it could go, and making quite
			  a commotion in the pool as it went.
			</p>
			<p>
			  So she called softly after it, &lsquo;Mouse dear! Do come back again, and we
			  won&rsquo;t talk about cats or dogs either, if you don&rsquo;t like them!&rsquo; When the
			  Mouse heard this, it turned round and swam slowly back to her: its face
			  was quite pale (with passion, Alice thought), and it said in a low
			  trembling voice, &lsquo;Let us get to the shore, and then I&rsquo;ll tell you my
			  history, and you&rsquo;ll understand why it is I hate cats and dogs.&rsquo;
			</p>
			<p>
			  It was high time to go, for the pool was getting quite crowded with the
			  birds and animals that had fallen into it: there were a Duck and a Dodo, a
			  Lory and an Eaglet, and several other curious creatures. Alice led the
			  way, and the whole party swam to the shore.
			</p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "A Caucus-Race and a Long Tale",
			'number' => "Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      They were indeed a queer-looking party that assembled on the bank&mdash;the
		      birds with draggled feathers, the animals with their fur clinging close to
		      them, and all dripping wet, cross, and uncomfortable.
		    </p>
		    <p>
		      The first question of course was, how to get dry again: they had a
		      consultation about this, and after a few minutes it seemed quite natural
		      to Alice to find herself talking familiarly with them, as if she had known
		      them all her life. Indeed, she had quite a long argument with the Lory,
		      who at last turned sulky, and would only say, &lsquo;I am older than you, and
		      must know better&rsquo;; and this Alice would not allow without knowing how old
		      it was, and, as the Lory positively refused to tell its age, there was no
		      more to be said.
		    </p>
		    <p>
		      At last the Mouse, who seemed to be a person of authority among them,
		      called out, &lsquo;Sit down, all of you, and listen to me! <i>I&rsquo;ll</i> soon make you
		      dry enough!&rsquo; They all sat down at once, in a large ring, with the Mouse in
		      the middle. Alice kept her eyes anxiously fixed on it, for she felt sure
		      she would catch a bad cold if she did not get dry very soon.
		    </p>
		    <p>
		      &lsquo;Ahem!&rsquo; said the Mouse with an important air, &lsquo;are you all ready? This is
		      the driest thing I know. Silence all round, if you please! &ldquo;William the
		      Conqueror, whose cause was favoured by the pope, was soon submitted to by
		      the English, who wanted leaders, and had been of late much accustomed to
		      usurpation and conquest. Edwin and Morcar, the earls of Mercia and
		      Northumbria&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Ugh!&rsquo; said the Lory, with a shiver.
		    </p>
		    <p>
		      &lsquo;I beg your pardon!&rsquo; said the Mouse, frowning, but very politely: &lsquo;Did you
		      speak?&rsquo;
		    </p>
		    <p>
		      &lsquo;Not I!&rsquo; said the Lory hastily.
		    </p>
		    <p>
		      &lsquo;I thought you did,&rsquo; said the Mouse. &lsquo;&mdash;I proceed. &ldquo;Edwin and Morcar,
		      the earls of Mercia and Northumbria, declared for him: and even Stigand,
		      the patriotic archbishop of Canterbury, found it advisable&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Found <i>what</i>?&rsquo; said the Duck.
		    </p>
		    <p>
		      &lsquo;Found <i>it</i>,&rsquo; the Mouse replied rather crossly: &lsquo;of course you know what
		      &ldquo;it&rdquo; means.&rsquo;
		    </p>
		    <p>
		      &lsquo;I know what &ldquo;it&rdquo; means well enough, when <i>I</i> find a thing,&rsquo; said the Duck:
		      &lsquo;it&rsquo;s generally a frog or a worm. The question is, what did the archbishop
		      find?&rsquo;
		    </p>
		    <p>
		      The Mouse did not notice this question, but hurriedly went on, &lsquo;&ldquo;&mdash;found
		      it advisable to go with Edgar Atheling to meet William and offer him the
		      crown. William&rsquo;s conduct at first was moderate. But the insolence of his
		      Normans&mdash;&rdquo; How are you getting on now, my dear?&rsquo; it continued,
		      turning to Alice as it spoke.
		    </p>
		    <p>
		      &lsquo;As wet as ever,&rsquo; said Alice in a melancholy tone: &lsquo;it doesn&rsquo;t seem to dry
		      me at all.&rsquo;
		    </p>
		    <p>
		      &lsquo;In that case,&rsquo; said the Dodo solemnly, rising to its feet, &lsquo;I move that
		      the meeting adjourn, for the immediate adoption of more energetic remedies&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Speak English!&rsquo; said the Eaglet. &lsquo;I don&rsquo;t know the meaning of half those
		      long words, and, what&rsquo;s more, I don&rsquo;t believe you do either!&rsquo; And the
		      Eaglet bent down its head to hide a smile: some of the other birds
		      tittered audibly.
		    </p>
		    <p>
		      &lsquo;What I was going to say,&rsquo; said the Dodo in an offended tone, &lsquo;was, that
		      the best thing to get us dry would be a Caucus-race.&rsquo;
		    </p>
		    <p>
		      &lsquo;What <i>is</i> a Caucus-race?&rsquo; said Alice; not that she wanted much to know, but
		      the Dodo had paused as if it thought that <i>somebody</i> ought to speak, and no
		      one else seemed inclined to say anything.
		    </p>
		    <p>
		      &lsquo;Why,&rsquo; said the Dodo, &lsquo;the best way to explain it is to do it.&rsquo; (And, as
		      you might like to try the thing yourself, some winter day, I will tell you
		      how the Dodo managed it.)
		    </p>
		    <p>
		      First it marked out a race-course, in a sort of circle, (&lsquo;the exact shape
		      doesn&rsquo;t matter,&rsquo; it said,) and then all the party were placed along the
		      course, here and there. There was no &lsquo;One, two, three, and away,&rsquo; but they
		      began running when they liked, and left off when they liked, so that it
		      was not easy to know when the race was over. However, when they had been
		      running half an hour or so, and were quite dry again, the Dodo suddenly
		      called out &lsquo;The race is over!&rsquo; and they all crowded round it, panting, and
		      asking, &lsquo;But who has won?&rsquo;
		    </p>
		    <p>
		      This question the Dodo could not answer without a great deal of thought,
		      and it sat for a long time with one finger pressed upon its forehead (the
		      position in which you usually see Shakespeare, in the pictures of him),
		      while the rest waited in silence. At last the Dodo said, &lsquo;<i>Everybody</i> has
		      won, and all must have prizes.&rsquo;
		    </p>
		    <p>
		      &lsquo;But who is to give the prizes?&rsquo; quite a chorus of voices asked.
		    </p>
		    <p>
		      &lsquo;Why, <i>she</i>, of course,&rsquo; said the Dodo, pointing to Alice with one finger;
		      and the whole party at once crowded round her, calling out in a confused
		      way, &lsquo;Prizes! Prizes!&rsquo;
		    </p>
		    <p>
		      Alice had no idea what to do, and in despair she put her hand in her
		      pocket, and pulled out a box of comfits, (luckily the salt water had not
		      got into it), and handed them round as prizes. There was exactly one
		      a-piece all round.
		    </p>
		    <p>
		      &lsquo;But she must have a prize herself, you know,&rsquo; said the Mouse.
		    </p>
		    <p>
		      &lsquo;Of course,&rsquo; the Dodo replied very gravely. &lsquo;What else have you got in
		      your pocket?&rsquo; he went on, turning to Alice.
		    </p>
		    <p>
		      &lsquo;Only a thimble,&rsquo; said Alice sadly.
		    </p>
		    <p>
		      &lsquo;Hand it over here,&rsquo; said the Dodo.
		    </p>
		    <p>
		      Then they all crowded round her once more, while the Dodo solemnly
		      presented the thimble, saying &lsquo;We beg your acceptance of this elegant
		      thimble&rsquo;; and, when it had finished this short speech, they all cheered.
		    </p>
		    <p>
		      Alice thought the whole thing very absurd, but they all looked so grave
		      that she did not dare to laugh; and, as she could not think of anything to
		      say, she simply bowed, and took the thimble, looking as solemn as she
		      could.
		    </p>
		    <p>
		      The next thing was to eat the comfits: this caused some noise and
		      confusion, as the large birds complained that they could not taste theirs,
		      and the small ones choked and had to be patted on the back. However, it
		      was over at last, and they sat down again in a ring, and begged the Mouse
		      to tell them something more.
		    </p>
		    <p>
		      &lsquo;You promised to tell me your history, you know,&rsquo; said Alice, &lsquo;and why it
		      is you hate&mdash;C and D,&rsquo; she added in a whisper, half afraid that it
		      would be offended again.
		    </p>
		    <p>
		      &lsquo;Mine is a long and a sad tale!&rsquo; said the Mouse, turning to Alice, and
		      sighing.
		    </p>
		    <p>
		      &lsquo;It <i>is</i> a long tail, certainly,&rsquo; said Alice, looking down with wonder at
		      the Mouse&rsquo;s tail; &lsquo;but why do you call it sad?&rsquo; And she kept on puzzling
		      about it while the Mouse was speaking, so that her idea of the tale was
		      something like this:&mdash;
		    </p>
			<p class='aiw-prosecute stanza'>
		         &lsquo;Fury said to a
		         mouse, That he
		        met in the
		       house,
		     &ldquo;Let us
		      both go to
		       law: <i>I</i> will
		        prosecute
		         <i>you</i>.&mdash;Come,
		           I&rsquo;ll take no
		           denial; We
		          must have a
		        trial: For
		      really this
		     morning I&rsquo;ve
		    nothing
		    to do.&rdquo;
		      Said the
		      mouse to the
		       cur, &ldquo;Such
		        a trial,
		         dear Sir,
		            With
		          no jury
		        or judge,
		       would be
		      wasting
		      our
		      breath.&rdquo;
		        &ldquo;I&rsquo;ll be
		        judge, I&rsquo;ll
		         be jury,&rdquo;
		             Said
		         cunning
		          old Fury:
		          &ldquo;I&rsquo;ll
		          try the
		            whole
		            cause,
		              and
		           condemn
		           you
		          to
		           death.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;You are not attending!&rsquo; said the Mouse to Alice severely. &lsquo;What are you
		      thinking of?&rsquo;
		    </p>
		    <p>
		      &lsquo;I beg your pardon,&rsquo; said Alice very humbly: &lsquo;you had got to the fifth
		      bend, I think?&rsquo;
		    </p>
		    <p>
		      &lsquo;I had <i>not</i>!&rsquo; cried the Mouse, sharply and very angrily.
		    </p>
		    <p>
		      &lsquo;A knot!&rsquo; said Alice, always ready to make herself useful, and looking
		      anxiously about her. &lsquo;Oh, do let me help to undo it!&rsquo;
		    </p>
		    <p>
		      &lsquo;I shall do nothing of the sort,&rsquo; said the Mouse, getting up and walking
		      away. &lsquo;You insult me by talking such nonsense!&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t mean it!&rsquo; pleaded poor Alice. &lsquo;But you&rsquo;re so easily offended,
		      you know!&rsquo;
		    </p>
		    <p>
		      The Mouse only growled in reply.
		    </p>
		    <p>
		      &lsquo;Please come back and finish your story!&rsquo; Alice called after it; and the
		      others all joined in chorus, &lsquo;Yes, please do!&rsquo; but the Mouse only shook
		      its head impatiently, and walked a little quicker.
		    </p>
		    <p>
		      &lsquo;What a pity it wouldn&rsquo;t stay!&rsquo; sighed the Lory, as soon as it was quite
		      out of sight; and an old Crab took the opportunity of saying to her
		      daughter &lsquo;Ah, my dear! Let this be a lesson to you never to lose <i>your</i>
		      temper!&rsquo; &lsquo;Hold your tongue, Ma!&rsquo; said the young Crab, a little snappishly.
		      &lsquo;You&rsquo;re enough to try the patience of an oyster!&rsquo;
		    </p>
		    <p>
		      &lsquo;I wish I had our Dinah here, I know I do!&rsquo; said Alice aloud, addressing
		      nobody in particular. &lsquo;She&rsquo;d soon fetch it back!&rsquo;
		    </p>
		    <p>
		      &lsquo;And who is Dinah, if I might venture to ask the question?&rsquo; said the Lory.
		    </p>
		    <p>
		      Alice replied eagerly, for she was always ready to talk about her pet:
		      &lsquo;Dinah&rsquo;s our cat. And she&rsquo;s such a capital one for catching mice you can&rsquo;t
		      think! And oh, I wish you could see her after the birds! Why, she&rsquo;ll eat a
		      little bird as soon as look at it!&rsquo;
		    </p>
		    <p>
		      This speech caused a remarkable sensation among the party. Some of the
		      birds hurried off at once: one old Magpie began wrapping itself up very
		      carefully, remarking, &lsquo;I really must be getting home; the night-air
		      doesn&rsquo;t suit my throat!&rsquo; and a Canary called out in a trembling voice to
		      its children, &lsquo;Come away, my dears! It&rsquo;s high time you were all in bed!&rsquo;
		      On various pretexts they all moved off, and Alice was soon left alone.
		    </p>
		    <p>
		      &lsquo;I wish I hadn&rsquo;t mentioned Dinah!&rsquo; she said to herself in a melancholy
		      tone. &lsquo;Nobody seems to like her, down here, and I&rsquo;m sure she&rsquo;s the best
		      cat in the world! Oh, my dear Dinah! I wonder if I shall ever see you any
		      more!&rsquo; And here poor Alice began to cry again, for she felt very lonely
		      and low-spirited. In a little while, however, she again heard a little
		      pattering of footsteps in the distance, and she looked up eagerly, half
		      hoping that the Mouse had changed his mind, and was coming back to finish
		      his story.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Rabbit Sends a Little Bill",
			'number' => "Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      It was the White Rabbit, trotting slowly back again, and looking anxiously
		      about as it went, as if it had lost something; and she heard it muttering
		      to itself &lsquo;The Duchess! The Duchess! Oh my dear paws! Oh my fur and
		      whiskers! She&rsquo;ll get me executed, as sure as ferrets are ferrets! Where
		      <i>can</i> I have dropped them, I wonder?&rsquo; Alice guessed in a moment that it was
		      looking for the fan and the pair of white kid gloves, and she very
		      good-naturedly began hunting about for them, but they were nowhere to be
		      seen&mdash;everything seemed to have changed since her swim in the pool,
		      and the great hall, with the glass table and the little door, had vanished
		      completely.
		    </p>
		    <p>
		      Very soon the Rabbit noticed Alice, as she went hunting about, and called
		      out to her in an angry tone, &lsquo;Why, Mary Ann, what <i>are</i> you doing out here?
		      Run home this moment, and fetch me a pair of gloves and a fan! Quick,
		      now!&rsquo; And Alice was so much frightened that she ran off at once in the
		      direction it pointed to, without trying to explain the mistake it had
		      made.
		    </p>
		    <p>
		      &lsquo;He took me for his housemaid,&rsquo; she said to herself as she ran. &lsquo;How
		      surprised he&rsquo;ll be when he finds out who I am! But I&rsquo;d better take him his
		      fan and gloves&mdash;that is, if I can find them.&rsquo; As she said this, she
		      came upon a neat little house, on the door of which was a bright brass
		      plate with the name &lsquo;W. RABBIT&rsquo; engraved upon it. She went in without
		      knocking, and hurried upstairs, in great fear lest she should meet the
		      real Mary Ann, and be turned out of the house before she had found the fan
		      and gloves.
		    </p>
		    <p>
		      &lsquo;How queer it seems,&rsquo; Alice said to herself, &lsquo;to be going messages for a
		      rabbit! I suppose Dinah&rsquo;ll be sending me on messages next!&rsquo; And she began
		      fancying the sort of thing that would happen: &lsquo;&ldquo;Miss Alice! Come here
		      directly, and get ready for your walk!&rdquo; &ldquo;Coming in a minute, nurse! But
		      I&rsquo;ve got to see that the mouse doesn&rsquo;t get out.&rdquo; Only I don&rsquo;t think,&rsquo;
		      Alice went on, &lsquo;that they&rsquo;d let Dinah stop in the house if it began
		      ordering people about like that!&rsquo;
		    </p>
		    <p>
		      By this time she had found her way into a tidy little room with a table in
		      the window, and on it (as she had hoped) a fan and two or three pairs of
		      tiny white kid gloves: she took up the fan and a pair of the gloves, and
		      was just going to leave the room, when her eye fell upon a little bottle
		      that stood near the looking-glass. There was no label this time with the
		      words <span class='aiw-drink'>DRINK ME</span> but nevertheless she uncorked it and put it to her lips.
		      &lsquo;I know <i>something</i> interesting is sure to happen,&rsquo; she said to herself,
		      &lsquo;whenever I eat or drink anything; so I&rsquo;ll just see what this bottle does.
		      I do hope it&rsquo;ll make me grow large again, for really I&rsquo;m quite tired of
		      being such a tiny little thing!&rsquo;
		    </p>
		    <p>
		      It did so indeed, and much sooner than she had expected: before she had
		      drunk half the bottle, she found her head pressing against the ceiling,
		      and had to stoop to save her neck from being broken. She hastily put down
		      the bottle, saying to herself &lsquo;That&rsquo;s quite enough&mdash;I hope I shan&rsquo;t
		      grow any more&mdash;As it is, I can&rsquo;t get out at the door&mdash;I do wish
		      I hadn&rsquo;t drunk quite so much!&rsquo;
		    </p>
		    <p>
		      Alas! it was too late to wish that! She went on growing, and growing, and
		      very soon had to kneel down on the floor: in another minute there was not
		      even room for this, and she tried the effect of lying down with one elbow
		      against the door, and the other arm curled round her head. Still she went
		      on growing, and, as a last resource, she put one arm out of the window,
		      and one foot up the chimney, and said to herself &lsquo;Now I can do no more,
		      whatever happens. What <i>will</i> become of me?&rsquo;
		    </p>
		    <p>
		      Luckily for Alice, the little magic bottle had now had its full effect,
		      and she grew no larger: still it was very uncomfortable, and, as there
		      seemed to be no sort of chance of her ever getting out of the room again,
		      no wonder she felt unhappy.
		    </p>
		    <p>
		      &lsquo;It was much pleasanter at home,&rsquo; thought poor Alice, &lsquo;when one wasn&rsquo;t
		      always growing larger and smaller, and being ordered about by mice and
		      rabbits. I almost wish I hadn&rsquo;t gone down that rabbit-hole&mdash;and yet&mdash;and
		      yet&mdash;it&rsquo;s rather curious, you know, this sort of life! I do wonder
		      what <i>can</i> have happened to me! When I used to read fairy-tales, I fancied
		      that kind of thing never happened, and now here I am in the middle of one!
		      There ought to be a book written about me, that there ought! And when I
		      grow up, I&rsquo;ll write one&mdash;but I&rsquo;m grown up now,&rsquo; she added in a
		      sorrowful tone; &lsquo;at least there&rsquo;s no room to grow up any more <i>here</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;But then,&rsquo; thought Alice, &lsquo;shall I <i>never</i> get any older than I am now?
		      That&rsquo;ll be a comfort, one way&mdash;never to be an old woman&mdash;but
		      then&mdash;always to have lessons to learn! Oh, I shouldn&rsquo;t like <i>that</i>!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, you foolish Alice!&rsquo; she answered herself. &lsquo;How can you learn lessons
		      in here? Why, there&rsquo;s hardly room for <i>you</i>, and no room at all for any
		      lesson-books!&rsquo;
		    </p>
		    <p>
		      And so she went on, taking first one side and then the other, and making
		      quite a conversation of it altogether; but after a few minutes she heard a
		      voice outside, and stopped to listen.
		    </p>
		    <p>
		      &lsquo;Mary Ann! Mary Ann!&rsquo; said the voice. &lsquo;Fetch me my gloves this moment!&rsquo;
		      Then came a little pattering of feet on the stairs. Alice knew it was the
		      Rabbit coming to look for her, and she trembled till she shook the house,
		      quite forgetting that she was now about a thousand times as large as the
		      Rabbit, and had no reason to be afraid of it.
		    </p>
		    <p>
		      Presently the Rabbit came up to the door, and tried to open it; but, as
		      the door opened inwards, and Alice&rsquo;s elbow was pressed hard against it,
		      that attempt proved a failure. Alice heard it say to itself &lsquo;Then I&rsquo;ll go
		      round and get in at the window.&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>That</i> you won&rsquo;t&rsquo; thought Alice, and, after waiting till she fancied she
		      heard the Rabbit just under the window, she suddenly spread out her hand,
		      and made a snatch in the air. She did not get hold of anything, but she
		      heard a little shriek and a fall, and a crash of broken glass, from which
		      she concluded that it was just possible it had fallen into a
		      cucumber-frame, or something of the sort.
		    </p>
		    <p>
		      Next came an angry voice&mdash;the Rabbit&rsquo;s&mdash;&lsquo;Pat! Pat! Where are
		      you?&rsquo; And then a voice she had never heard before, &lsquo;Sure then I&rsquo;m here!
		      Digging for apples, yer honour!&rsquo;
		    </p>
		    <p>
		      &lsquo;Digging for apples, indeed!&rsquo; said the Rabbit angrily. &lsquo;Here! Come and
		      help me out of <i>this</i>!&rsquo; (Sounds of more broken glass.)
		    </p>
		    <p>
		      &lsquo;Now tell me, Pat, what&rsquo;s that in the window?&rsquo;
		    </p>
		    <p>
		      &lsquo;Sure, it&rsquo;s an arm, yer honour!&rsquo; (He pronounced it &lsquo;arrum.&rsquo;)
		    </p>
		    <p>
		      &lsquo;An arm, you goose! Who ever saw one that size? Why, it fills the whole
		      window!&rsquo;
		    </p>
		    <p>
		      &lsquo;Sure, it does, yer honour: but it&rsquo;s an arm for all that.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it&rsquo;s got no business there, at any rate: go and take it away!&rsquo;
		    </p>
		    <p>
		      There was a long silence after this, and Alice could only hear whispers
		      now and then; such as, &lsquo;Sure, I don&rsquo;t like it, yer honour, at all, at
		      all!&rsquo; &lsquo;Do as I tell you, you coward!&rsquo; and at last she spread out her hand
		      again, and made another snatch in the air. This time there were <i>two</i> little
		      shrieks, and more sounds of broken glass. &lsquo;What a number of
		      cucumber-frames there must be!&rsquo; thought Alice. &lsquo;I wonder what they&rsquo;ll do
		      next! As for pulling me out of the window, I only wish they <i>could</i>! I&rsquo;m
		      sure <i>I</i> don&rsquo;t want to stay in here any longer!&rsquo;
		    </p>
		    <p>
		      She waited for some time without hearing anything more: at last came a
		      rumbling of little cartwheels, and the sound of a good many voices all
		      talking together: she made out the words: &lsquo;Where&rsquo;s the other ladder?&mdash;Why,
		      I hadn&rsquo;t to bring but one; Bill&rsquo;s got the other&mdash;Bill! fetch it here,
		      lad!&mdash;Here, put &lsquo;em up at this corner&mdash;No, tie &lsquo;em together
		      first&mdash;they don&rsquo;t reach half high enough yet&mdash;Oh! they&rsquo;ll do
		      well enough; don&rsquo;t be particular&mdash;Here, Bill! catch hold of this rope&mdash;Will
		      the roof bear?&mdash;Mind that loose slate&mdash;Oh, it&rsquo;s coming down!
		      Heads below!&rsquo; (a loud crash)&mdash;&lsquo;Now, who did that?&mdash;It was Bill,
		      I fancy&mdash;Who&rsquo;s to go down the chimney?&mdash;Nay, <i>I</i> shan&rsquo;t! <i>You</i> do
		      it!&mdash;<i>That</i> I won&rsquo;t, then!&mdash;Bill&rsquo;s to go down&mdash;Here, Bill!
		      the master says you&rsquo;re to go down the chimney!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh! So Bill&rsquo;s got to come down the chimney, has he?&rsquo; said Alice to
		      herself. &lsquo;Shy, they seem to put everything upon Bill! I wouldn&rsquo;t be in
		      Bill&rsquo;s place for a good deal: this fireplace is narrow, to be sure; but I
		      <i>think</i> I can kick a little!&rsquo;
		    </p>
		    <p>
		      She drew her foot as far down the chimney as she could, and waited till
		      she heard a little animal (she couldn&rsquo;t guess of what sort it was)
		      scratching and scrambling about in the chimney close above her: then,
		      saying to herself &lsquo;This is Bill,&rsquo; she gave one sharp kick, and waited to
		      see what would happen next.
		    </p>
		    <p>
		      The first thing she heard was a general chorus of &lsquo;There goes Bill!&rsquo; then
		      the Rabbit&rsquo;s voice along&mdash;&lsquo;Catch him, you by the hedge!&rsquo; then
		      silence, and then another confusion of voices&mdash;&lsquo;Hold up his head&mdash;Brandy
		      now&mdash;Don&rsquo;t choke him&mdash;How was it, old fellow? What happened to
		      you? Tell us all about it!&rsquo;
		    </p>
		    <p>
		      Last came a little feeble, squeaking voice, (&lsquo;That&rsquo;s Bill,&rsquo; thought
		      Alice,) &lsquo;Well, I hardly know&mdash;No more, thank ye; I&rsquo;m better now&mdash;but
		      I&rsquo;m a deal too flustered to tell you&mdash;all I know is, something comes
		      at me like a Jack-in-the-box, and up I goes like a sky-rocket!&rsquo;
		    </p>
		    <p>
		      &lsquo;So you did, old fellow!&rsquo; said the others.
		    </p>
		    <p>
		      &lsquo;We must burn the house down!&rsquo; said the Rabbit&rsquo;s voice; and Alice called
		      out as loud as she could, &lsquo;If you do. I&rsquo;ll set Dinah at you!&rsquo;
		    </p>
		    <p>
		      There was a dead silence instantly, and Alice thought to herself, &lsquo;I
		      wonder what they <i>will</i> do next! If they had any sense, they&rsquo;d take the roof
		      off.&rsquo; After a minute or two, they began moving about again, and Alice
		      heard the Rabbit say, &lsquo;A barrowful will do, to begin with.&rsquo;
		    </p>
		    <p>
		      &lsquo;A barrowful of <i>what</i>?&rsquo; thought Alice; but she had not long to doubt, for
		      the next moment a shower of little pebbles came rattling in at the window,
		      and some of them hit her in the face. &lsquo;I&rsquo;ll put a stop to this,&rsquo; she said
		      to herself, and shouted out, &lsquo;You&rsquo;d better not do that again!&rsquo; which
		      produced another dead silence.
		    </p>
		    <p>
		      Alice noticed with some surprise that the pebbles were all turning into
		      little cakes as they lay on the floor, and a bright idea came into her
		      head. &lsquo;If I eat one of these cakes,&rsquo; she thought, &lsquo;it&rsquo;s sure to make <i>some</i>
		      change in my size; and as it can&rsquo;t possibly make me larger, it must make
		      me smaller, I suppose.&rsquo;
		    </p>
		    <p>
		      So she swallowed one of the cakes, and was delighted to find that she
		      began shrinking directly. As soon as she was small enough to get through
		      the door, she ran out of the house, and found quite a crowd of little
		      animals and birds waiting outside. The poor little Lizard, Bill, was in
		      the middle, being held up by two guinea-pigs, who were giving it something
		      out of a bottle. They all made a rush at Alice the moment she appeared;
		      but she ran off as hard as she could, and soon found herself safe in a
		      thick wood.
		    </p>
		    <p>
		      &lsquo;The first thing I&rsquo;ve got to do,&rsquo; said Alice to herself, as she wandered
		      about in the wood, &lsquo;is to grow to my right size again; and the second
		      thing is to find my way into that lovely garden. I think that will be the
		      best plan.&rsquo;
		    </p>
		    <p>
		      It sounded an excellent plan, no doubt, and very neatly and simply
		      arranged; the only difficulty was, that she had not the smallest idea how
		      to set about it; and while she was peering about anxiously among the
		      trees, a little sharp bark just over her head made her look up in a great
		      hurry.
		    </p>
		    <p>
		      An enormous puppy was looking down at her with large round eyes, and
		      feebly stretching out one paw, trying to touch her. &lsquo;Poor little thing!&rsquo;
		      said Alice, in a coaxing tone, and she tried hard to whistle to it; but
		      she was terribly frightened all the time at the thought that it might be
		      hungry, in which case it would be very likely to eat her up in spite of
		      all her coaxing.
		    </p>
		    <p>
		      Hardly knowing what she did, she picked up a little bit of stick, and held
		      it out to the puppy; whereupon the puppy jumped into the air off all its
		      feet at once, with a yelp of delight, and rushed at the stick, and made
		      believe to worry it; then Alice dodged behind a great thistle, to keep
		      herself from being run over; and the moment she appeared on the other
		      side, the puppy made another rush at the stick, and tumbled head over
		      heels in its hurry to get hold of it; then Alice, thinking it was very
		      like having a game of play with a cart-horse, and expecting every moment
		      to be trampled under its feet, ran round the thistle again; then the puppy
		      began a series of short charges at the stick, running a very little way
		      forwards each time and a long way back, and barking hoarsely all the
		      while, till at last it sat down a good way off, panting, with its tongue
		      hanging out of its mouth, and its great eyes half shut.
		    </p>
		    <p>
		      This seemed to Alice a good opportunity for making her escape; so she set
		      off at once, and ran till she was quite tired and out of breath, and till
		      the puppy&rsquo;s bark sounded quite faint in the distance.
		    </p>
		    <p>
		      &lsquo;And yet what a dear little puppy it was!&rsquo; said Alice, as she leant
		      against a buttercup to rest herself, and fanned herself with one of the
		      leaves: &lsquo;I should have liked teaching it tricks very much, if&mdash;if I&rsquo;d
		      only been the right size to do it! Oh dear! I&rsquo;d nearly forgotten that I&rsquo;ve
		      got to grow up again! Let me see&mdash;how <i>is</i> it to be managed? I suppose
		      I ought to eat or drink something or other; but the great question is,
		      what?&rsquo;
		    </p>
		    <p>
		      The great question certainly was, what? Alice looked all round her at the
		      flowers and the blades of grass, but she did not see anything that looked
		      like the right thing to eat or drink under the circumstances. There was a
		      large mushroom growing near her, about the same height as herself; and
		      when she had looked under it, and on both sides of it, and behind it, it
		      occurred to her that she might as well look and see what was on the top of
		      it.
		    </p>
		    <p>
		      She stretched herself up on tiptoe, and peeped over the edge of the
		      mushroom, and her eyes immediately met those of a large caterpillar, that
		      was sitting on the top with its arms folded, quietly smoking a long
		      hookah, and taking not the smallest notice of her or of anything else.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Advice from a Caterpillar",
			'number' => "Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The Caterpillar and Alice looked at each other for some time in silence:
		      at last the Caterpillar took the hookah out of its mouth, and addressed
		      her in a languid, sleepy voice.
		    </p>
		    <p>
		      &lsquo;Who are <i>you</i>?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      This was not an encouraging opening for a conversation. Alice replied,
		      rather shyly, &lsquo;I&mdash;I hardly know, sir, just at present&mdash;at least
		      I know who I <i>was</i> when I got up this morning, but I think I must have been
		      changed several times since then.&rsquo;
		    </p>
		    <p>
		      &lsquo;What do you mean by that?&rsquo; said the Caterpillar sternly. &lsquo;Explain
		      yourself!&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t explain <i>myself</i>, I&rsquo;m afraid, sir&rsquo; said Alice, &lsquo;because I&rsquo;m not
		      myself, you see.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t see,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I can&rsquo;t put it more clearly,&rsquo; Alice replied very politely,
		      &lsquo;for I can&rsquo;t understand it myself to begin with; and being so many
		      different sizes in a day is very confusing.&rsquo;
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, perhaps you haven&rsquo;t found it so yet,&rsquo; said Alice; &lsquo;but when you
		      have to turn into a chrysalis&mdash;you will some day, you know&mdash;and
		      then after that into a butterfly, I should think you&rsquo;ll feel it a little
		      queer, won&rsquo;t you?&rsquo;
		    </p>
		    <p>
		      &lsquo;Not a bit,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, perhaps your feelings may be different,&rsquo; said Alice; &lsquo;all I know
		      is, it would feel very queer to <i>me</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;You!&rsquo; said the Caterpillar contemptuously. &lsquo;Who are <i>you</i>?&rsquo;
		    </p>
		    <p>
		      Which brought them back again to the beginning of the conversation. Alice
		      felt a little irritated at the Caterpillar&rsquo;s making such <i>very</i> short
		      remarks, and she drew herself up and said, very gravely, &lsquo;I think, you
		      ought to tell me who <i>you</i> are, first.&rsquo;
		    </p>
		    <p>
		      &lsquo;Why?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Here was another puzzling question; and as Alice could not think of any
		      good reason, and as the Caterpillar seemed to be in a <i>very</i> unpleasant
		      state of mind, she turned away.
		    </p>
		    <p>
		      &lsquo;Come back!&rsquo; the Caterpillar called after her. &lsquo;I&rsquo;ve something important
		      to say!&rsquo;
		    </p>
		    <p>
		      This sounded promising, certainly: Alice turned and came back again.
		    </p>
		    <p>
		      &lsquo;Keep your temper,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Is that all?&rsquo; said Alice, swallowing down her anger as well as she could.
		    </p>
		    <p>
		      &lsquo;No,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice thought she might as well wait, as she had nothing else to do, and
		      perhaps after all it might tell her something worth hearing. For some
		      minutes it puffed away without speaking, but at last it unfolded its arms,
		      took the hookah out of its mouth again, and said, &lsquo;So you think you&rsquo;re
		      changed, do you?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I am, sir,&rsquo; said Alice; &lsquo;I can&rsquo;t remember things as I used&mdash;and
		      I don&rsquo;t keep the same size for ten minutes together!&rsquo;
		    </p>
		    <p>
		      &lsquo;Can&rsquo;t remember <i>what</i> things?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, I&rsquo;ve tried to say &ldquo;How doth the little busy bee,&rdquo; but it all came
		      different!&rsquo; Alice replied in a very melancholy voice.
		    </p>
		    <p>
		      &lsquo;Repeat, &ldquo;<i>You are old, Father William</i>,&rdquo;&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice folded her hands, and began:&mdash;
		    </p>
			<p class='aiw-william stanza'>
		   &lsquo;You are old, Father William,&rsquo; the young man said,
		    <br>
		    &lsquo;And your hair has become very white;
		    <br>
		   And yet you incessantly stand on your head&mdash;
		    <br>
		    Do you think, at your age, it is right?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; Father William replied to his son,
		    <br>
		    &lsquo;I feared it might injure the brain;
		    <br>
		   But, now that I&rsquo;m perfectly sure I have none,
		    <br>
		    Why, I do it again and again.&rsquo;
		    </p>
		   <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;as I mentioned before,
		    <br>
		    And have grown most uncommonly fat;
		    <br>
		   Yet you turned a back-somersault in at the door&mdash;
		    <br>
		    Pray, what is the reason of that?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; said the sage, as he shook his grey locks,
		    <br>
		    &lsquo;I kept all my limbs very supple
		    <br>
		   By the use of this ointment&mdash;one shilling the box&mdash;
		    <br>
		    Allow me to sell you a couple?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;and your jaws are too weak
		    <br>
		    For anything tougher than suet;
		    <br>
		   Yet you finished the goose, with the bones and the beak&mdash;
		    <br>
		    Pray how did you manage to do it?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;In my youth,&rsquo; said his father, &lsquo;I took to the law,
		    <br>
		    And argued each case with my wife;
		    <br>
		   And the muscular strength, which it gave to my jaw,
		    <br>
		    Has lasted the rest of my life.&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;You are old,&rsquo; said the youth, &lsquo;one would hardly suppose
		    <br>
		    That your eye was as steady as ever;
		    <br>
		   Yet you balanced an eel on the end of your nose&mdash;
		    <br>
		    What made you so awfully clever?&rsquo;
		    </p>
		    <p class='aiw-william stanza'>
		   &lsquo;I have answered three questions, and that is enough,&rsquo;
		    <br>
		    Said his father; &lsquo;don&rsquo;t give yourself airs!
		    <br>
		   Do you think I can listen all day to such stuff?
		    <br>
		    Be off, or I&rsquo;ll kick you down stairs!&rsquo;
		    </p>
		    <p>
		      &lsquo;That is not said right,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Not <i>quite</i> right, I&rsquo;m afraid,&rsquo; said Alice, timidly; &lsquo;some of the words
		      have got altered.&rsquo;
		    </p>
		    <p>
		      &lsquo;It is wrong from beginning to end,&rsquo; said the Caterpillar decidedly, and
		      there was silence for some minutes.
		    </p>
		    <p>
		      The Caterpillar was the first to speak.
		    </p>
		    <p>
		      &lsquo;What size do you want to be?&rsquo; it asked.
		    </p>
		    <p>
		      &lsquo;Oh, I&rsquo;m not particular as to size,&rsquo; Alice hastily replied; &lsquo;only one
		      doesn&rsquo;t like changing so often, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;I <i>don&rsquo;t</i> know,&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      Alice said nothing: she had never been so much contradicted in her life
		      before, and she felt that she was losing her temper.
		    </p>
		    <p>
		      &lsquo;Are you content now?&rsquo; said the Caterpillar.
		    </p>
		    <p>
		      &lsquo;Well, I should like to be a <i>little</i> larger, sir, if you wouldn&rsquo;t mind,&rsquo;
		      said Alice: &lsquo;three inches is such a wretched height to be.&rsquo;
		    </p>
		    <p>
		      &lsquo;It is a very good height indeed!&rsquo; said the Caterpillar angrily, rearing
		      itself upright as it spoke (it was exactly three inches high).
		    </p>
		    <p>
		      &lsquo;But I&rsquo;m not used to it!&rsquo; pleaded poor Alice in a piteous tone. And she
		      thought of herself, &lsquo;I wish the creatures wouldn&rsquo;t be so easily offended!&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ll get used to it in time,&rsquo; said the Caterpillar; and it put the
		      hookah into its mouth and began smoking again.
		    </p>
		    <p>
		      This time Alice waited patiently until it chose to speak again. In a
		      minute or two the Caterpillar took the hookah out of its mouth and yawned
		      once or twice, and shook itself. Then it got down off the mushroom, and
		      crawled away in the grass, merely remarking as it went, &lsquo;One side will
		      make you grow taller, and the other side will make you grow shorter.&rsquo;
		    </p>
		    <p>
		      &lsquo;One side of <i>what</i>? The other side of <i>what</i>?&rsquo; thought Alice to herself.
		    </p>
		    <p>
		      &lsquo;Of the mushroom,&rsquo; said the Caterpillar, just as if she had asked it
		      aloud; and in another moment it was out of sight.
		    </p>
		    <p>
		      Alice remained looking thoughtfully at the mushroom for a minute, trying
		      to make out which were the two sides of it; and as it was perfectly round,
		      she found this a very difficult question. However, at last she stretched
		      her arms round it as far as they would go, and broke off a bit of the edge
		      with each hand.
		    </p>
		    <p>
		      &lsquo;And now which is which?&rsquo; she said to herself, and nibbled a little of the
		      right-hand bit to try the effect: the next moment she felt a violent blow
		      underneath her chin: it had struck her foot!
		    </p>
		    <p>
		      She was a good deal frightened by this very sudden change, but she felt
		      that there was no time to be lost, as she was shrinking rapidly; so she
		      set to work at once to eat some of the other bit. Her chin was pressed so
		      closely against her foot, that there was hardly room to open her mouth;
		      but she did it at last, and managed to swallow a morsel of the lefthand
		      bit.
			<p class='aiw-separator'>*****</p>
		      &lsquo;Come, my head&rsquo;s free at last!&rsquo; said Alice in a tone of delight, which
		      changed into alarm in another moment, when she found that her shoulders
		      were nowhere to be found: all she could see, when she looked down, was an
		      immense length of neck, which seemed to rise like a stalk out of a sea of
		      green leaves that lay far below her.
		    </p>
		    <p>
		      &lsquo;What <i>can</i> all that green stuff be?&rsquo; said Alice. &lsquo;And where <i>have</i> my
		      shoulders got to? And oh, my poor hands, how is it I can&rsquo;t see you?&rsquo; She
		      was moving them about as she spoke, but no result seemed to follow, except
		      a little shaking among the distant green leaves.
		    </p>
		    <p>
		      As there seemed to be no chance of getting her hands up to her head, she
		      tried to get her head down to them, and was delighted to find that her
		      neck would bend about easily in any direction, like a serpent. She had
		      just succeeded in curving it down into a graceful zigzag, and was going to
		      dive in among the leaves, which she found to be nothing but the tops of
		      the trees under which she had been wandering, when a sharp hiss made her
		      draw back in a hurry: a large pigeon had flown into her face, and was
		      beating her violently with its wings.
		    </p>
		    <p>
		      &lsquo;Serpent!&rsquo; screamed the Pigeon.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m <i>not</i> a serpent!&rsquo; said Alice indignantly. &lsquo;Let me alone!&rsquo;
		    </p>
		    <p>
		      &lsquo;Serpent, I say again!&rsquo; repeated the Pigeon, but in a more subdued tone,
		      and added with a kind of sob, &lsquo;I&rsquo;ve tried every way, and nothing seems to
		      suit them!&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t the least idea what you&rsquo;re talking about,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve tried the roots of trees, and I&rsquo;ve tried banks, and I&rsquo;ve tried
		      hedges,&rsquo; the Pigeon went on, without attending to her; &lsquo;but those
		      serpents! There&rsquo;s no pleasing them!&rsquo;
		    </p>
		    <p>
		      Alice was more and more puzzled, but she thought there was no use in
		      saying anything more till the Pigeon had finished.
		    </p>
		    <p>
		      &lsquo;As if it wasn&rsquo;t trouble enough hatching the eggs,&rsquo; said the Pigeon; &lsquo;but
		      I must be on the look-out for serpents night and day! Why, I haven&rsquo;t had a
		      wink of sleep these three weeks!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m very sorry you&rsquo;ve been annoyed,&rsquo; said Alice, who was beginning to see
		      its meaning.
		    </p>
		    <p>
		      &lsquo;And just as I&rsquo;d taken the highest tree in the wood,&rsquo; continued the
		      Pigeon, raising its voice to a shriek, &lsquo;and just as I was thinking I
		      should be free of them at last, they must needs come wriggling down from
		      the sky! Ugh, Serpent!&rsquo;
		    </p>
		    <p>
		      &lsquo;But I&rsquo;m <i>not</i> a serpent, I tell you!&rsquo; said Alice. &lsquo;I&rsquo;m a&mdash;I&rsquo;m a&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Well! <i>What</i> are you?&rsquo; said the Pigeon. &lsquo;I can see you&rsquo;re trying to invent
		      something!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&mdash;I&rsquo;m a little girl,&rsquo; said Alice, rather doubtfully, as she
		      remembered the number of changes she had gone through that day.
		    </p>
		    <p>
		      &lsquo;A likely story indeed!&rsquo; said the Pigeon in a tone of the deepest
		      contempt. &lsquo;I&rsquo;ve seen a good many little girls in my time, but never <i>one</i>
		      with such a neck as that! No, no! You&rsquo;re a serpent; and there&rsquo;s no use
		      denying it. I suppose you&rsquo;ll be telling me next that you never tasted an
		      egg!&rsquo;
		    </p>
		    <p>
		      &lsquo;I <i>have</i> tasted eggs, certainly,&rsquo; said Alice, who was a very truthful
		      child; &lsquo;but little girls eat eggs quite as much as serpents do, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t believe it,&rsquo; said the Pigeon; &lsquo;but if they do, why then they&rsquo;re a
		      kind of serpent, that&rsquo;s all I can say.&rsquo;
		    </p>
		    <p>
		      This was such a new idea to Alice, that she was quite silent for a minute
		      or two, which gave the Pigeon the opportunity of adding, &lsquo;You&rsquo;re looking
		      for eggs, I know <i>that</i> well enough; and what does it matter to me whether
		      you&rsquo;re a little girl or a serpent?&rsquo;
		    </p>
		    <p>
		      &lsquo;It matters a good deal to <i>me</i>,&rsquo; said Alice hastily; &lsquo;but I&rsquo;m not looking
		      for eggs, as it happens; and if I was, I shouldn&rsquo;t want <i>yours</i>: I don&rsquo;t
		      like them raw.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, be off, then!&rsquo; said the Pigeon in a sulky tone, as it settled down
		      again into its nest. Alice crouched down among the trees as well as she
		      could, for her neck kept getting entangled among the branches, and every
		      now and then she had to stop and untwist it. After a while she remembered
		      that she still held the pieces of mushroom in her hands, and she set to
		      work very carefully, nibbling first at one and then at the other, and
		      growing sometimes taller and sometimes shorter, until she had succeeded in
		      bringing herself down to her usual height.
		    </p>
		    <p>
		      It was so long since she had been anything near the right size, that it
		      felt quite strange at first; but she got used to it in a few minutes, and
		      began talking to herself, as usual. &lsquo;Come, there&rsquo;s half my plan done now!
		      How puzzling all these changes are! I&rsquo;m never sure what I&rsquo;m going to be,
		      from one minute to another! However, I&rsquo;ve got back to my right size: the
		      next thing is, to get into that beautiful garden&mdash;how <i>is</i> that to be
		      done, I wonder?&rsquo; As she said this, she came suddenly upon an open place,
		      with a little house in it about four feet high. &lsquo;Whoever lives there,&rsquo;
		      thought Alice, &lsquo;it&rsquo;ll never do to come upon them <i>this</i> size: why, I should
		      frighten them out of their wits!&rsquo; So she began nibbling at the righthand
		      bit again, and did not venture to go near the house till she had brought
		      herself down to nine inches high.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Pig and Pepper",
			'number' => "Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      For a minute or two she stood looking at the house, and wondering what to
		      do next, when suddenly a footman in livery came running out of the wood&mdash;(she
		      considered him to be a footman because he was in livery: otherwise,
		      judging by his face only, she would have called him a fish)&mdash;and
		      rapped loudly at the door with his knuckles. It was opened by another
		      footman in livery, with a round face, and large eyes like a frog; and both
		      footmen, Alice noticed, had powdered hair that curled all over their
		      heads. She felt very curious to know what it was all about, and crept a
		      little way out of the wood to listen.
		    </p>
		    <p>
		      The Fish-Footman began by producing from under his arm a great letter,
		      nearly as large as himself, and this he handed over to the other, saying,
		      in a solemn tone, &lsquo;For the Duchess. An invitation from the Queen to play
		      croquet.&rsquo; The Frog-Footman repeated, in the same solemn tone, only
		      changing the order of the words a little, &lsquo;From the Queen. An invitation
		      for the Duchess to play croquet.&rsquo;
		    </p>
		    <p>
		      Then they both bowed low, and their curls got entangled together.
		    </p>
		    <p>
		      Alice laughed so much at this, that she had to run back into the wood for
		      fear of their hearing her; and when she next peeped out the Fish-Footman
		      was gone, and the other was sitting on the ground near the door, staring
		      stupidly up into the sky.
		    </p>
		    <p>
		      Alice went timidly up to the door, and knocked.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s no sort of use in knocking,&rsquo; said the Footman, &lsquo;and that for two
		      reasons. First, because I&rsquo;m on the same side of the door as you are;
		      secondly, because they&rsquo;re making such a noise inside, no one could
		      possibly hear you.&rsquo; And certainly there <i>was</i> a most extraordinary noise
		      going on within&mdash;a constant howling and sneezing, and every now and
		      then a great crash, as if a dish or kettle had been broken to pieces.
		    </p>
		    <p>
		      &lsquo;Please, then,&rsquo; said Alice, &lsquo;how am I to get in?&rsquo;
		    </p>
		    <p>
		      &lsquo;There might be some sense in your knocking,&rsquo; the Footman went on without
		      attending to her, &lsquo;if we had the door between us. For instance, if you
		      were <i>inside</i>, you might knock, and I could let you out, you know.&rsquo; He was
		      looking up into the sky all the time he was speaking, and this Alice
		      thought decidedly uncivil. &lsquo;But perhaps he can&rsquo;t help it,&rsquo; she said to
		      herself; &lsquo;his eyes are so <i>very</i> nearly at the top of his head. But at any
		      rate he might answer questions.&mdash;How am I to get in?&rsquo; she repeated,
		      aloud.
		    </p>
		    <p>
		      &lsquo;I shall sit here,&rsquo; the Footman remarked, &lsquo;till tomorrow&mdash;&rsquo;
		    </p>
		    <p>
		      At this moment the door of the house opened, and a large plate came
		      skimming out, straight at the Footman&rsquo;s head: it just grazed his nose, and
		      broke to pieces against one of the trees behind him.
		    </p>
		    <p>
		      &lsquo;&mdash;or next day, maybe,&rsquo; the Footman continued in the same tone,
		      exactly as if nothing had happened.
		    </p>
		    <p>
		      &lsquo;How am I to get in?&rsquo; asked Alice again, in a louder tone.
		    </p>
		    <p>
		      &lsquo;<i>Are</i> you to get in at all?&rsquo; said the Footman. &lsquo;That&rsquo;s the first question,
		      you know.&rsquo;
		    </p>
		    <p>
		      It was, no doubt: only Alice did not like to be told so. &lsquo;It&rsquo;s really
		      dreadful,&rsquo; she muttered to herself, &lsquo;the way all the creatures argue. It&rsquo;s
		      enough to drive one crazy!&rsquo;
		    </p>
		    <p>
		      The Footman seemed to think this a good opportunity for repeating his
		      remark, with variations. &lsquo;I shall sit here,&rsquo; he said, &lsquo;on and off, for
		      days and days.&rsquo;
		    </p>
		    <p>
		      &lsquo;But what am <i>I</i> to do?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Anything you like,&rsquo; said the Footman, and began whistling.
		    </p>
		    <p>
		      &lsquo;Oh, there&rsquo;s no use in talking to him,&rsquo; said Alice desperately: &lsquo;he&rsquo;s
		      perfectly idiotic!&rsquo; And she opened the door and went in.
		    </p>
		    <p>
		      The door led right into a large kitchen, which was full of smoke from one
		      end to the other: the Duchess was sitting on a three-legged stool in the
		      middle, nursing a baby; the cook was leaning over the fire, stirring a
		      large cauldron which seemed to be full of soup.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s certainly too much pepper in that soup!&rsquo; Alice said to herself,
		      as well as she could for sneezing.
		    </p>
		    <p>
		      There was certainly too much of it in the air. Even the Duchess sneezed
		      occasionally; and as for the baby, it was sneezing and howling alternately
		      without a moment&rsquo;s pause. The only things in the kitchen that did not
		      sneeze, were the cook, and a large cat which was sitting on the hearth and
		      grinning from ear to ear.
		    </p>
		    <p>
		      &lsquo;Please would you tell me,&rsquo; said Alice, a little timidly, for she was not
		      quite sure whether it was good manners for her to speak first, &lsquo;why your
		      cat grins like that?&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a Cheshire cat,&rsquo; said the Duchess, &lsquo;and that&rsquo;s why. Pig!&rsquo;
		    </p>
		    <p>
		      She said the last word with such sudden violence that Alice quite jumped;
		      but she saw in another moment that it was addressed to the baby, and not
		      to her, so she took courage, and went on again:&mdash;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know that Cheshire cats always grinned; in fact, I didn&rsquo;t know
		      that cats <i>could</i> grin.&rsquo;
		    </p>
		    <p>
		      &lsquo;They all can,&rsquo; said the Duchess; &lsquo;and most of &lsquo;em do.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know of any that do,&rsquo; Alice said very politely, feeling quite
		      pleased to have got into a conversation.
		    </p>
		    <p>
		      &lsquo;You don&rsquo;t know much,&rsquo; said the Duchess; &lsquo;and that&rsquo;s a fact.&rsquo;
		    </p>
		    <p>
		      Alice did not at all like the tone of this remark, and thought it would be
		      as well to introduce some other subject of conversation. While she was
		      trying to fix on one, the cook took the cauldron of soup off the fire, and
		      at once set to work throwing everything within her reach at the Duchess
		      and the baby&mdash;the fire-irons came first; then followed a shower of
		      saucepans, plates, and dishes. The Duchess took no notice of them even
		      when they hit her; and the baby was howling so much already, that it was
		      quite impossible to say whether the blows hurt it or not.
		    </p>
		    <p>
		      &lsquo;Oh, <i>please</i> mind what you&rsquo;re doing!&rsquo; cried Alice, jumping up and down in
		      an agony of terror. &lsquo;Oh, there goes his <i>precious</i> nose&rsquo;; as an unusually
		      large saucepan flew close by it, and very nearly carried it off.
		    </p>
		    <p>
		      &lsquo;If everybody minded their own business,&rsquo; the Duchess said in a hoarse
		      growl, &lsquo;the world would go round a deal faster than it does.&rsquo;
		    </p>
		    <p>
		      &lsquo;Which would <i>not</i> be an advantage,&rsquo; said Alice, who felt very glad to get
		      an opportunity of showing off a little of her knowledge. &lsquo;Just think of
		      what work it would make with the day and night! You see the earth takes
		      twenty-four hours to turn round on its axis&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Talking of axes,&rsquo; said the Duchess, &lsquo;chop off her head!&rsquo;
		    </p>
		    <p>
		      Alice glanced rather anxiously at the cook, to see if she meant to take
		      the hint; but the cook was busily stirring the soup, and seemed not to be
		      listening, so she went on again: &lsquo;Twenty-four hours, I <i>think</i>; or is it
		      twelve? I&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, don&rsquo;t bother <i>me</i>,&rsquo; said the Duchess; &lsquo;I never could abide figures!&rsquo;
		      And with that she began nursing her child again, singing a sort of lullaby
		      to it as she did so, and giving it a violent shake at the end of every
		      line:
		    </p>
		    <p class='aiw-rough stanza'>
		   &lsquo;Speak roughly to your little boy,
		    <br>
		    And beat him when he sneezes:
		    <br>
		   He only does it to annoy,
		    <br>
		    Because he knows it teases.&rsquo;
		    </p>
		    <p class='aiw-chorus'>
		         CHORUS.
		    </p>
		    <p class='aiw-annotate'>
		 (In which the cook and the baby joined):&mdash;
		    </p>
		    <p class='aiw-wow'>
		       &lsquo;Wow! wow! wow!&rsquo;
		    </p>
		    <p>
		      While the Duchess sang the second verse of the song, she kept tossing the
		      baby violently up and down, and the poor little thing howled so, that
		      Alice could hardly hear the words:&mdash;
		    </p>
		    <p class='aiw-severe stanza'>
		   &lsquo;I speak severely to my boy,
		    <br>
		    I beat him when he sneezes;
		    <br>
		   For he can thoroughly enjoy
		    <br>
		    The pepper when he pleases!&rsquo;
		    </p>
		    <p class='aiw-chorus'>
		         CHORUS.
		    </p>
		    <p class='aiw-wow'>
		       &lsquo;Wow! wow! wow!&rsquo;
		    </p>
		    <p>
		      &lsquo;Here! you may nurse it a bit, if you like!&rsquo; the Duchess said to Alice,
		      flinging the baby at her as she spoke. &lsquo;I must go and get ready to play
		      croquet with the Queen,&rsquo; and she hurried out of the room. The cook threw a
		      frying-pan after her as she went out, but it just missed her.
		    </p>
		    <p>
		      Alice caught the baby with some difficulty, as it was a queer-shaped
		      little creature, and held out its arms and legs in all directions, &lsquo;just
		      like a star-fish,&rsquo; thought Alice. The poor little thing was snorting like
		      a steam-engine when she caught it, and kept doubling itself up and
		      straightening itself out again, so that altogether, for the first minute
		      or two, it was as much as she could do to hold it.
		    </p>
		    <p>
		      As soon as she had made out the proper way of nursing it, (which was to
		      twist it up into a sort of knot, and then keep tight hold of its right ear
		      and left foot, so as to prevent its undoing itself,) she carried it out
		      into the open air. &lsquo;If I don&rsquo;t take this child away with me,&rsquo; thought
		      Alice, &lsquo;they&rsquo;re sure to kill it in a day or two: wouldn&rsquo;t it be murder to
		      leave it behind?&rsquo; She said the last words out loud, and the little thing
		      grunted in reply (it had left off sneezing by this time). &lsquo;Don&rsquo;t grunt,&rsquo;
		      said Alice; &lsquo;that&rsquo;s not at all a proper way of expressing yourself.&rsquo;
		    </p>
		    <p>
		      The baby grunted again, and Alice looked very anxiously into its face to
		      see what was the matter with it. There could be no doubt that it had a
		      <i>very</i> turn-up nose, much more like a snout than a real nose; also its eyes
		      were getting extremely small for a baby: altogether Alice did not like the
		      look of the thing at all. &lsquo;But perhaps it was only sobbing,&rsquo; she thought,
		      and looked into its eyes again, to see if there were any tears.
		    </p>
		    <p>
		      No, there were no tears. &lsquo;If you&rsquo;re going to turn into a pig, my dear,&rsquo;
		      said Alice, seriously, &lsquo;I&rsquo;ll have nothing more to do with you. Mind now!&rsquo;
		      The poor little thing sobbed again (or grunted, it was impossible to say
		      which), and they went on for some while in silence.
		    </p>
		    <p>
		      Alice was just beginning to think to herself, &lsquo;Now, what am I to do with
		      this creature when I get it home?&rsquo; when it grunted again, so violently,
		      that she looked down into its face in some alarm. This time there could be
		      <i>no</i> mistake about it: it was neither more nor less than a pig, and she felt
		      that it would be quite absurd for her to carry it further.
		    </p>
		    <p>
		      So she set the little creature down, and felt quite relieved to see it
		      trot away quietly into the wood. &lsquo;If it had grown up,&rsquo; she said to
		      herself, &lsquo;it would have made a dreadfully ugly child: but it makes rather
		      a handsome pig, I think.&rsquo; And she began thinking over other children she
		      knew, who might do very well as pigs, and was just saying to herself, &lsquo;if
		      one only knew the right way to change them&mdash;&rsquo; when she was a little
		      startled by seeing the Cheshire Cat sitting on a bough of a tree a few
		      yards off.
		    </p>
		    <p>
		      The Cat only grinned when it saw Alice. It looked good-natured, she
		      thought: still it had <i>very</i> long claws and a great many teeth, so she felt
		      that it ought to be treated with respect.
		    </p>
		    <p>
		      &lsquo;Cheshire Puss,&rsquo; she began, rather timidly, as she did not at all know
		      whether it would like the name: however, it only grinned a little wider.
		      &lsquo;Come, it&rsquo;s pleased so far,&rsquo; thought Alice, and she went on. &lsquo;Would you
		      tell me, please, which way I ought to go from here?&rsquo;
		    </p>
		    <p>
		      &lsquo;That depends a good deal on where you want to get to,&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t much care where&mdash;&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Then it doesn&rsquo;t matter which way you go,&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;&mdash;so long as I get <i>somewhere</i>,&rsquo; Alice added as an explanation.
		    </p>
		    <p>
		      &lsquo;Oh, you&rsquo;re sure to do that,&rsquo; said the Cat, &lsquo;if you only walk long
		      enough.&rsquo;
		    </p>
		    <p>
		      Alice felt that this could not be denied, so she tried another question.
		      &lsquo;What sort of people live about here?&rsquo;
		    </p>
		    <p>
		      &lsquo;In <i>that</i> direction,&rsquo; the Cat said, waving its right paw round, &lsquo;lives a
		      Hatter: and in <i>that</i> direction,&rsquo; waving the other paw, &lsquo;lives a March Hare.
		      Visit either you like: they&rsquo;re both mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;But I don&rsquo;t want to go among mad people,&rsquo; Alice remarked.
		    </p>
		    <p>
		      &lsquo;Oh, you can&rsquo;t help that,&rsquo; said the Cat: &lsquo;we&rsquo;re all mad here. I&rsquo;m mad.
		      You&rsquo;re mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;How do you know I&rsquo;m mad?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;You must be,&rsquo; said the Cat, &lsquo;or you wouldn&rsquo;t have come here.&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t think that proved it at all; however, she went on &lsquo;And how do
		      you know that you&rsquo;re mad?&rsquo;
		    </p>
		    <p>
		      &lsquo;To begin with,&rsquo; said the Cat, &lsquo;a dog&rsquo;s not mad. You grant that?&rsquo;
		    </p>
		    <p>
		      &lsquo;I suppose so,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Well, then,&rsquo; the Cat went on, &lsquo;you see, a dog growls when it&rsquo;s angry, and
		      wags its tail when it&rsquo;s pleased. Now <i>I</i> growl when I&rsquo;m pleased, and wag my
		      tail when I&rsquo;m angry. Therefore I&rsquo;m mad.&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I</i> call it purring, not growling,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Call it what you like,&rsquo; said the Cat. &lsquo;Do you play croquet with the Queen
		      to-day?&rsquo;
		    </p>
		    <p>
		      &lsquo;I should like it very much,&rsquo; said Alice, &lsquo;but I haven&rsquo;t been invited
		      yet.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ll see me there,&rsquo; said the Cat, and vanished.
		    </p>
		    <p>
		      Alice was not much surprised at this, she was getting so used to queer
		      things happening. While she was looking at the place where it had been, it
		      suddenly appeared again.
		    </p>
		    <p>
		      &lsquo;By-the-bye, what became of the baby?&rsquo; said the Cat. &lsquo;I&rsquo;d nearly forgotten
		      to ask.&rsquo;
		    </p>
		    <p>
		      &lsquo;It turned into a pig,&rsquo; Alice quietly said, just as if it had come back in
		      a natural way.
		    </p>
		    <p>
		      &lsquo;I thought it would,&rsquo; said the Cat, and vanished again.
		    </p>
		    <p>
		      Alice waited a little, half expecting to see it again, but it did not
		      appear, and after a minute or two she walked on in the direction in which
		      the March Hare was said to live. &lsquo;I&rsquo;ve seen hatters before,&rsquo; she said to
		      herself; &lsquo;the March Hare will be much the most interesting, and perhaps as
		      this is May it won&rsquo;t be raving mad&mdash;at least not so mad as it was in
		      March.&rsquo; As she said this, she looked up, and there was the Cat again,
		      sitting on a branch of a tree.
		    </p>
		    <p>
		      &lsquo;Did you say pig, or fig?&rsquo; said the Cat.
		    </p>
		    <p>
		      &lsquo;I said pig,&rsquo; replied Alice; &lsquo;and I wish you wouldn&rsquo;t keep appearing and
		      vanishing so suddenly: you make one quite giddy.&rsquo;
		    </p>
		    <p>
		      &lsquo;All right,&rsquo; said the Cat; and this time it vanished quite slowly,
		      beginning with the end of the tail, and ending with the grin, which
		      remained some time after the rest of it had gone.
		    </p>
		    <p>
		      &lsquo;Well! I&rsquo;ve often seen a cat without a grin,&rsquo; thought Alice; &lsquo;but a grin
		      without a cat! It&rsquo;s the most curious thing I ever saw in my life!&rsquo;
		    </p>
		    <p>
		      She had not gone much farther before she came in sight of the house of the
		      March Hare: she thought it must be the right house, because the chimneys
		      were shaped like ears and the roof was thatched with fur. It was so large
		      a house, that she did not like to go nearer till she had nibbled some more
		      of the lefthand bit of mushroom, and raised herself to about two feet
		      high: even then she walked up towards it rather timidly, saying to herself
		      &lsquo;Suppose it should be raving mad after all! I almost wish I&rsquo;d gone to see
		      the Hatter instead!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "A Mad Tea-Party",
			'number' => "Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      There was a table set out under a tree in front of the house, and the
		      March Hare and the Hatter were having tea at it: a Dormouse was sitting
		      between them, fast asleep, and the other two were using it as a cushion,
		      resting their elbows on it, and talking over its head. &lsquo;Very uncomfortable
		      for the Dormouse,&rsquo; thought Alice; &lsquo;only, as it&rsquo;s asleep, I suppose it
		      doesn&rsquo;t mind.&rsquo;
		    </p>
		    <p>
		      The table was a large one, but the three were all crowded together at one
		      corner of it: &lsquo;No room! No room!&rsquo; they cried out when they saw Alice
		      coming. &lsquo;There&rsquo;s <i>plenty</i> of room!&rsquo; said Alice indignantly, and she sat down
		      in a large arm-chair at one end of the table.
		    </p>
		    <p>
		      &lsquo;Have some wine,&rsquo; the March Hare said in an encouraging tone.
		    </p>
		    <p>
		      Alice looked all round the table, but there was nothing on it but tea. &lsquo;I
		      don&rsquo;t see any wine,&rsquo; she remarked.
		    </p>
		    <p>
		      &lsquo;There isn&rsquo;t any,&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Then it wasn&rsquo;t very civil of you to offer it,&rsquo; said Alice angrily.
		    </p>
		    <p>
		      &lsquo;It wasn&rsquo;t very civil of you to sit down without being invited,&rsquo; said the
		      March Hare.
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know it was <i>your</i> table,&rsquo; said Alice; &lsquo;it&rsquo;s laid for a great many
		      more than three.&rsquo;
		    </p>
		    <p>
		      &lsquo;Your hair wants cutting,&rsquo; said the Hatter. He had been looking at Alice
		      for some time with great curiosity, and this was his first speech.
		    </p>
		    <p>
		      &lsquo;You should learn not to make personal remarks,&rsquo; Alice said with some
		      severity; &lsquo;it&rsquo;s very rude.&rsquo;
		    </p>
		    <p>
		      The Hatter opened his eyes very wide on hearing this; but all he <i>said</i> was,
		      &lsquo;Why is a raven like a writing-desk?&rsquo;
		    </p>
		    <p>
		      &lsquo;Come, we shall have some fun now!&rsquo; thought Alice. &lsquo;I&rsquo;m glad they&rsquo;ve begun
		      asking riddles.&mdash;I believe I can guess that,&rsquo; she added aloud.
		    </p>
		    <p>
		      &lsquo;Do you mean that you think you can find out the answer to it?&rsquo; said the
		      March Hare.
		    </p>
		    <p>
		      &lsquo;Exactly so,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Then you should say what you mean,&rsquo; the March Hare went on.
		    </p>
		    <p>
		      &lsquo;I do,&rsquo; Alice hastily replied; &lsquo;at least&mdash;at least I mean what I say&mdash;that&rsquo;s
		      the same thing, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Not the same thing a bit!&rsquo; said the Hatter. &lsquo;You might just as well say
		      that &ldquo;I see what I eat&rdquo; is the same thing as &ldquo;I eat what I see&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;You might just as well say,&rsquo; added the March Hare, &lsquo;that &ldquo;I like what I
		      get&rdquo; is the same thing as &ldquo;I get what I like&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;You might just as well say,&rsquo; added the Dormouse, who seemed to be talking
		      in his sleep, &lsquo;that &ldquo;I breathe when I sleep&rdquo; is the same thing as &ldquo;I sleep
		      when I breathe&rdquo;!&rsquo;
		    </p>
		    <p>
		      &lsquo;It <i>is</i> the same thing with you,&rsquo; said the Hatter, and here the
		      conversation dropped, and the party sat silent for a minute, while Alice
		      thought over all she could remember about ravens and writing-desks, which
		      wasn&rsquo;t much.
		    </p>
		    <p>
		      The Hatter was the first to break the silence. &lsquo;What day of the month is
		      it?&rsquo; he said, turning to Alice: he had taken his watch out of his pocket,
		      and was looking at it uneasily, shaking it every now and then, and holding
		      it to his ear.
		    </p>
		    <p>
		      Alice considered a little, and then said &lsquo;The fourth.&rsquo;
		    </p>
		    <p>
		      &lsquo;Two days wrong!&rsquo; sighed the Hatter. &lsquo;I told you butter wouldn&rsquo;t suit the
		      works!&rsquo; he added looking angrily at the March Hare.
		    </p>
		    <p>
		      &lsquo;It was the <i>best</i> butter,&rsquo; the March Hare meekly replied.
		    </p>
		    <p>
		      &lsquo;Yes, but some crumbs must have got in as well,&rsquo; the Hatter grumbled: &lsquo;you
		      shouldn&rsquo;t have put it in with the bread-knife.&rsquo;
		    </p>
		    <p>
		      The March Hare took the watch and looked at it gloomily: then he dipped it
		      into his cup of tea, and looked at it again: but he could think of nothing
		      better to say than his first remark, &lsquo;It was the <i>best</i> butter, you know.&rsquo;
		    </p>
		    <p>
		      Alice had been looking over his shoulder with some curiosity. &lsquo;What a
		      funny watch!&rsquo; she remarked. &lsquo;It tells the day of the month, and doesn&rsquo;t
		      tell what o&rsquo;clock it is!&rsquo;
		    </p>
		    <p>
		      &lsquo;Why should it?&rsquo; muttered the Hatter. &lsquo;Does <i>your</i> watch tell you what year
		      it is?&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course not,&rsquo; Alice replied very readily: &lsquo;but that&rsquo;s because it stays
		      the same year for such a long time together.&rsquo;
		    </p>
		    <p>
		      &lsquo;Which is just the case with <i>mine</i>,&rsquo; said the Hatter.
		    </p>
		    <p>
		      Alice felt dreadfully puzzled. The Hatter&rsquo;s remark seemed to have no sort
		      of meaning in it, and yet it was certainly English. &lsquo;I don&rsquo;t quite
		      understand you,&rsquo; she said, as politely as she could.
		    </p>
		    <p>
		      &lsquo;The Dormouse is asleep again,&rsquo; said the Hatter, and he poured a little
		      hot tea upon its nose.
		    </p>
		    <p>
		      The Dormouse shook its head impatiently, and said, without opening its
		      eyes, &lsquo;Of course, of course; just what I was going to remark myself.&rsquo;
		    </p>
		    <p>
		      &lsquo;Have you guessed the riddle yet?&rsquo; the Hatter said, turning to Alice
		      again.
		    </p>
		    <p>
		      &lsquo;No, I give it up,&rsquo; Alice replied: &lsquo;what&rsquo;s the answer?&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t the slightest idea,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;Nor I,&rsquo; said the March Hare.
		    </p>
		    <p>
		      Alice sighed wearily. &lsquo;I think you might do something better with the
		      time,&rsquo; she said, &lsquo;than waste it in asking riddles that have no answers.&rsquo;
		    </p>
		    <p>
		      &lsquo;If you knew Time as well as I do,&rsquo; said the Hatter, &lsquo;you wouldn&rsquo;t talk
		      about wasting <i>it</i>. It&rsquo;s <i>him</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what you mean,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Of course you don&rsquo;t!&rsquo; the Hatter said, tossing his head contemptuously.
		      &lsquo;I dare say you never even spoke to Time!&rsquo;
		    </p>
		    <p>
		      &lsquo;Perhaps not,&rsquo; Alice cautiously replied: &lsquo;but I know I have to beat time
		      when I learn music.&rsquo;
		    </p>
		    <p>
		      &lsquo;Ah! that accounts for it,&rsquo; said the Hatter. &lsquo;He won&rsquo;t stand beating. Now,
		      if you only kept on good terms with him, he&rsquo;d do almost anything you liked
		      with the clock. For instance, suppose it were nine o&rsquo;clock in the morning,
		      just time to begin lessons: you&rsquo;d only have to whisper a hint to Time, and
		      round goes the clock in a twinkling! Half-past one, time for dinner!&rsquo;
		    </p>
		    <p>
		      (&lsquo;I only wish it was,&rsquo; the March Hare said to itself in a whisper.)
		    </p>
		    <p>
		      &lsquo;That would be grand, certainly,&rsquo; said Alice thoughtfully: &lsquo;but then&mdash;I
		      shouldn&rsquo;t be hungry for it, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Not at first, perhaps,&rsquo; said the Hatter: &lsquo;but you could keep it to
		      half-past one as long as you liked.&rsquo;
		    </p>
		    <p>
		      &lsquo;Is that the way <i>you</i> manage?&rsquo; Alice asked.
		    </p>
		    <p>
		      The Hatter shook his head mournfully. &lsquo;Not I!&rsquo; he replied. &lsquo;We quarrelled
		      last March&mdash;just before <i>he</i> went mad, you know&mdash;&rsquo; (pointing with
		      his tea spoon at the March Hare,) &lsquo;&mdash;it was at the great concert
		      given by the Queen of Hearts, and I had to sing
		    </p>
		    <p class='aiw-twinkle stanza'>
		     &ldquo;Twinkle, twinkle, little bat!
		    <br>
		     How I wonder what you&rsquo;re at!&rdquo;
		    </p>
		    <p>
		      You know the song, perhaps?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve heard something like it,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;It goes on, you know,&rsquo; the Hatter continued, &lsquo;in this way:&mdash;
		    </p>
		    <p class='aiw-world stanza'>
		     &ldquo;Up above the world you fly,
		    <br>
		     Like a tea-tray in the sky.
		         Twinkle, twinkle&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      Here the Dormouse shook itself, and began singing in its sleep &lsquo;<i>Twinkle,
		      twinkle, twinkle, twinkle</i>&mdash;&rsquo; and went on so long that they had to
		      pinch it to make it stop.
		    </p>
		    <p>
		      &lsquo;Well, I&rsquo;d hardly finished the first verse,&rsquo; said the Hatter, &lsquo;when the
		      Queen jumped up and bawled out, &ldquo;He&rsquo;s murdering the time! Off with his
		      head!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;How dreadfully savage!&rsquo; exclaimed Alice.
		    </p>
		    <p>
		      &lsquo;And ever since that,&rsquo; the Hatter went on in a mournful tone, &lsquo;he won&rsquo;t do
		      a thing I ask! It&rsquo;s always six o&rsquo;clock now.&rsquo;
		    </p>
		    <p>
		      A bright idea came into Alice&rsquo;s head. &lsquo;Is that the reason so many
		      tea-things are put out here?&rsquo; she asked.
		    </p>
		    <p>
		      &lsquo;Yes, that&rsquo;s it,&rsquo; said the Hatter with a sigh: &lsquo;it&rsquo;s always tea-time, and
		      we&rsquo;ve no time to wash the things between whiles.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you keep moving round, I suppose?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Exactly so,&rsquo; said the Hatter: &lsquo;as the things get used up.&rsquo;
		    </p>
		    <p>
		      &lsquo;But what happens when you come to the beginning again?&rsquo; Alice ventured to
		      ask.
		    </p>
		    <p>
		      &lsquo;Suppose we change the subject,&rsquo; the March Hare interrupted, yawning. &lsquo;I&rsquo;m
		      getting tired of this. I vote the young lady tells us a story.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I don&rsquo;t know one,&rsquo; said Alice, rather alarmed at the proposal.
		    </p>
		    <p>
		      &lsquo;Then the Dormouse shall!&rsquo; they both cried. &lsquo;Wake up, Dormouse!&rsquo; And they
		      pinched it on both sides at once.
		    </p>
		    <p>
		      The Dormouse slowly opened his eyes. &lsquo;I wasn&rsquo;t asleep,&rsquo; he said in a
		      hoarse, feeble voice: &lsquo;I heard every word you fellows were saying.&rsquo;
		    </p>
		    <p>
		      &lsquo;Tell us a story!&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Yes, please do!&rsquo; pleaded Alice.
		    </p>
		    <p>
		      &lsquo;And be quick about it,&rsquo; added the Hatter, &lsquo;or you&rsquo;ll be asleep again
		      before it&rsquo;s done.&rsquo;
		    </p>
		    <p>
		      &lsquo;Once upon a time there were three little sisters,&rsquo; the Dormouse began in
		      a great hurry; &lsquo;and their names were Elsie, Lacie, and Tillie; and they
		      lived at the bottom of a well&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What did they live on?&rsquo; said Alice, who always took a great interest in
		      questions of eating and drinking.
		    </p>
		    <p>
		      &lsquo;They lived on treacle,&rsquo; said the Dormouse, after thinking a minute or
		      two.
		    </p>
		    <p>
		      &lsquo;They couldn&rsquo;t have done that, you know,&rsquo; Alice gently remarked; &lsquo;they&rsquo;d
		      have been ill.&rsquo;
		    </p>
		    <p>
		      &lsquo;So they were,&rsquo; said the Dormouse; &lsquo;<i>very</i> ill.&rsquo;
		    </p>
		    <p>
		      Alice tried to fancy to herself what such an extraordinary ways of living
		      would be like, but it puzzled her too much, so she went on: &lsquo;But why did
		      they live at the bottom of a well?&rsquo;
		    </p>
		    <p>
		      &lsquo;Take some more tea,&rsquo; the March Hare said to Alice, very earnestly.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve had nothing yet,&rsquo; Alice replied in an offended tone, &lsquo;so I can&rsquo;t
		      take more.&rsquo;
		    </p>
		    <p>
		      &lsquo;You mean you can&rsquo;t take <i>less</i>,&rsquo; said the Hatter: &lsquo;it&rsquo;s very easy to take
		      <i>more</i> than nothing.&rsquo;
		    </p>
		    <p>
		      &lsquo;Nobody asked <i>your</i> opinion,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Who&rsquo;s making personal remarks now?&rsquo; the Hatter asked triumphantly.
		    </p>
		    <p>
		      Alice did not quite know what to say to this: so she helped herself to
		      some tea and bread-and-butter, and then turned to the Dormouse, and
		      repeated her question. &lsquo;Why did they live at the bottom of a well?&rsquo;
		    </p>
		    <p>
		      The Dormouse again took a minute or two to think about it, and then said,
		      &lsquo;It was a treacle-well.&rsquo;
		    </p>
		    <p>
		      &lsquo;There&rsquo;s no such thing!&rsquo; Alice was beginning very angrily, but the Hatter
		      and the March Hare went &lsquo;Sh! sh!&rsquo; and the Dormouse sulkily remarked, &lsquo;If
		      you can&rsquo;t be civil, you&rsquo;d better finish the story for yourself.&rsquo;
		    </p>
		    <p>
		      &lsquo;No, please go on!&rsquo; Alice said very humbly; &lsquo;I won&rsquo;t interrupt again. I
		      dare say there may be <i>one</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;One, indeed!&rsquo; said the Dormouse indignantly. However, he consented to go
		      on. &lsquo;And so these three little sisters&mdash;they were learning to draw,
		      you know&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What did they draw?&rsquo; said Alice, quite forgetting her promise.
		    </p>
		    <p>
		      &lsquo;Treacle,&rsquo; said the Dormouse, without considering at all this time.
		    </p>
		    <p>
		      &lsquo;I want a clean cup,&rsquo; interrupted the Hatter: &lsquo;let&rsquo;s all move one place
		      on.&rsquo;
		    </p>
		    <p>
		      He moved on as he spoke, and the Dormouse followed him: the March Hare
		      moved into the Dormouse&rsquo;s place, and Alice rather unwillingly took the
		      place of the March Hare. The Hatter was the only one who got any advantage
		      from the change: and Alice was a good deal worse off than before, as the
		      March Hare had just upset the milk-jug into his plate.
		    </p>
		    <p>
		      Alice did not wish to offend the Dormouse again, so she began very
		      cautiously: &lsquo;But I don&rsquo;t understand. Where did they draw the treacle
		      from?&rsquo;
		    </p>
		    <p>
		      &lsquo;You can draw water out of a water-well,&rsquo; said the Hatter; &lsquo;so I should
		      think you could draw treacle out of a treacle-well&mdash;eh, stupid?&rsquo;
		    </p>
		    <p>
		      &lsquo;But they were <i>in</i> the well,&rsquo; Alice said to the Dormouse, not choosing to
		      notice this last remark.
		    </p>
		    <p>
		      &lsquo;Of course they were&rsquo;, said the Dormouse; &lsquo;&mdash;well in.&rsquo;
		    </p>
		    <p>
		      This answer so confused poor Alice, that she let the Dormouse go on for
		      some time without interrupting it.
		    </p>
		    <p>
		      &lsquo;They were learning to draw,&rsquo; the Dormouse went on, yawning and rubbing
		      its eyes, for it was getting very sleepy; &lsquo;and they drew all manner of
		      things&mdash;everything that begins with an M&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Why with an M?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why not?&rsquo; said the March Hare.
		    </p>
		    <p>
		      Alice was silent.
		    </p>
		    <p>
		      The Dormouse had closed its eyes by this time, and was going off into a
		      doze; but, on being pinched by the Hatter, it woke up again with a little
		      shriek, and went on: &lsquo;&mdash;that begins with an M, such as mouse-traps,
		      and the moon, and memory, and muchness&mdash;you know you say things are
		      &ldquo;much of a muchness&rdquo;&mdash;did you ever see such a thing as a drawing of a
		      muchness?&rsquo;
		    </p>
		    <p>
		      &lsquo;Really, now you ask me,&rsquo; said Alice, very much confused, &lsquo;I don&rsquo;t think&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you shouldn&rsquo;t talk,&rsquo; said the Hatter.
		    </p>
		    <p>
		      This piece of rudeness was more than Alice could bear: she got up in great
		      disgust, and walked off; the Dormouse fell asleep instantly, and neither
		      of the others took the least notice of her going, though she looked back
		      once or twice, half hoping that they would call after her: the last time
		      she saw them, they were trying to put the Dormouse into the teapot.
		    </p>
		    <p>
		      &lsquo;At any rate I&rsquo;ll never go <i>there</i> again!&rsquo; said Alice as she picked her way
		      through the wood. &lsquo;It&rsquo;s the stupidest tea-party I ever was at in all my
		      life!&rsquo;
		    </p>
		    <p>
		      Just as she said this, she noticed that one of the trees had a door
		      leading right into it. &lsquo;That&rsquo;s very curious!&rsquo; she thought. &lsquo;But
		      everything&rsquo;s curious today. I think I may as well go in at once.&rsquo; And in
		      she went.
		    </p>
		    <p>
		      Once more she found herself in the long hall, and close to the little
		      glass table. &lsquo;Now, I&rsquo;ll manage better this time,&rsquo; she said to herself, and
		      began by taking the little golden key, and unlocking the door that led
		      into the garden. Then she went to work nibbling at the mushroom (she had
		      kept a piece of it in her pocket) till she was about a foot high: then she
		      walked down the little passage: and <i>then</i>&mdash;she found herself at last
		      in the beautiful garden, among the bright flower-beds and the cool
		      fountains.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Queen’s Croquet-Ground",
			'number' => "Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      A large rose-tree stood near the entrance of the garden: the roses growing
		      on it were white, but there were three gardeners at it, busily painting
		      them red. Alice thought this a very curious thing, and she went nearer to
		      watch them, and just as she came up to them she heard one of them say,
		      &lsquo;Look out now, Five! Don&rsquo;t go splashing paint over me like that!&rsquo;
		    </p>
		    <p>
		      &lsquo;I couldn&rsquo;t help it,&rsquo; said Five, in a sulky tone; &lsquo;Seven jogged my elbow.&rsquo;
		    </p>
		    <p>
		      On which Seven looked up and said, &lsquo;That&rsquo;s right, Five! Always lay the
		      blame on others!&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>You&rsquo;d</i> better not talk!&rsquo; said Five. &lsquo;I heard the Queen say only yesterday
		      you deserved to be beheaded!&rsquo;
		    </p>
		    <p>
		      &lsquo;What for?&rsquo; said the one who had spoken first.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s none of <i>your</i> business, Two!&rsquo; said Seven.
		    </p>
		    <p>
		      &lsquo;Yes, it <i>is</i> his business!&rsquo; said Five, &lsquo;and I&rsquo;ll tell him&mdash;it was for
		      bringing the cook tulip-roots instead of onions.&rsquo;
		    </p>
		    <p>
		      Seven flung down his brush, and had just begun &lsquo;Well, of all the unjust
		      things&mdash;&rsquo; when his eye chanced to fall upon Alice, as she stood
		      watching them, and he checked himself suddenly: the others looked round
		      also, and all of them bowed low.
		    </p>
		    <p>
		      &lsquo;Would you tell me,&rsquo; said Alice, a little timidly, &lsquo;why you are painting
		      those roses?&rsquo;
		    </p>
		    <p>
		      Five and Seven said nothing, but looked at Two. Two began in a low voice,
		      &lsquo;Why the fact is, you see, Miss, this here ought to have been a <i>red</i>
		      rose-tree, and we put a white one in by mistake; and if the Queen was to
		      find it out, we should all have our heads cut off, you know. So you see,
		      Miss, we&rsquo;re doing our best, afore she comes, to&mdash;&rsquo; At this moment
		      Five, who had been anxiously looking across the garden, called out &lsquo;The
		      Queen! The Queen!&rsquo; and the three gardeners instantly threw themselves flat
		      upon their faces. There was a sound of many footsteps, and Alice looked
		      round, eager to see the Queen.
		    </p>
		    <p>
		      First came ten soldiers carrying clubs; these were all shaped like the
		      three gardeners, oblong and flat, with their hands and feet at the
		      corners: next the ten courtiers; these were ornamented all over with
		      diamonds, and walked two and two, as the soldiers did. After these came
		      the royal children; there were ten of them, and the little dears came
		      jumping merrily along hand in hand, in couples: they were all ornamented
		      with hearts. Next came the guests, mostly Kings and Queens, and among them
		      Alice recognised the White Rabbit: it was talking in a hurried nervous
		      manner, smiling at everything that was said, and went by without noticing
		      her. Then followed the Knave of Hearts, carrying the King&rsquo;s crown on a
		      crimson velvet cushion; and, last of all this grand procession, came <span class='aiw-hearts'>THE
		      KING AND QUEEN OF HEARTS</span>.
		    </p>
		    <p>
		      Alice was rather doubtful whether she ought not to lie down on her face
		      like the three gardeners, but she could not remember ever having heard of
		      such a rule at processions; &lsquo;and besides, what would be the use of a
		      procession,&rsquo; thought she, &lsquo;if people had all to lie down upon their faces,
		      so that they couldn&rsquo;t see it?&rsquo; So she stood still where she was, and
		      waited.
		    </p>
		    <p>
		      When the procession came opposite to Alice, they all stopped and looked at
		      her, and the Queen said severely &lsquo;Who is this?&rsquo; She said it to the Knave
		      of Hearts, who only bowed and smiled in reply.
		    </p>
		    <p>
		      &lsquo;Idiot!&rsquo; said the Queen, tossing her head impatiently; and, turning to
		      Alice, she went on, &lsquo;What&rsquo;s your name, child?&rsquo;
		    </p>
		    <p>
		      &lsquo;My name is Alice, so please your Majesty,&rsquo; said Alice very politely; but
		      she added, to herself, &lsquo;Why, they&rsquo;re only a pack of cards, after all. I
		      needn&rsquo;t be afraid of them!&rsquo;
		    </p>
		    <p>
		      &lsquo;And who are <i>these</i>?&rsquo; said the Queen, pointing to the three gardeners who
		      were lying round the rosetree; for, you see, as they were lying on their
		      faces, and the pattern on their backs was the same as the rest of the
		      pack, she could not tell whether they were gardeners, or soldiers, or
		      courtiers, or three of her own children.
		    </p>
		    <p>
		      &lsquo;How should <i>I</i> know?&rsquo; said Alice, surprised at her own courage. &lsquo;It&rsquo;s no
		      business of <i>mine</i>.&rsquo;
		    </p>
		    <p>
		      The Queen turned crimson with fury, and, after glaring at her for a moment
		      like a wild beast, screamed &lsquo;Off with her head! Off&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Nonsense!&rsquo; said Alice, very loudly and decidedly, and the Queen was
		      silent.
		    </p>
		    <p>
		      The King laid his hand upon her arm, and timidly said &lsquo;Consider, my dear:
		      she is only a child!&rsquo;
		    </p>
		    <p>
		      The Queen turned angrily away from him, and said to the Knave &lsquo;Turn them
		      over!&rsquo;
		    </p>
		    <p>
		      The Knave did so, very carefully, with one foot.
		    </p>
		    <p>
		      &lsquo;Get up!&rsquo; said the Queen, in a shrill, loud voice, and the three gardeners
		      instantly jumped up, and began bowing to the King, the Queen, the royal
		      children, and everybody else.
		    </p>
		    <p>
		      &lsquo;Leave off that!&rsquo; screamed the Queen. &lsquo;You make me giddy.&rsquo; And then,
		      turning to the rose-tree, she went on, &lsquo;What <i>have</i> you been doing here?&rsquo;
		    </p>
		    <p>
		      &lsquo;May it please your Majesty,&rsquo; said Two, in a very humble tone, going down
		      on one knee as he spoke, &lsquo;we were trying&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I</i> see!&rsquo; said the Queen, who had meanwhile been examining the roses. &lsquo;Off
		      with their heads!&rsquo; and the procession moved on, three of the soldiers
		      remaining behind to execute the unfortunate gardeners, who ran to Alice
		      for protection.
		    </p>
		    <p>
		      &lsquo;You shan&rsquo;t be beheaded!&rsquo; said Alice, and she put them into a large
		      flower-pot that stood near. The three soldiers wandered about for a minute
		      or two, looking for them, and then quietly marched off after the others.
		    </p>
		    <p>
		      &lsquo;Are their heads off?&rsquo; shouted the Queen.
		    </p>
		    <p>
		      &lsquo;Their heads are gone, if it please your Majesty!&rsquo; the soldiers shouted in
		      reply.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s right!&rsquo; shouted the Queen. &lsquo;Can you play croquet?&rsquo;
		    </p>
		    <p>
		      The soldiers were silent, and looked at Alice, as the question was
		      evidently meant for her.
		    </p>
		    <p>
		      &lsquo;Yes!&rsquo; shouted Alice.
		    </p>
		    <p>
		      &lsquo;Come on, then!&rsquo; roared the Queen, and Alice joined the procession,
		      wondering very much what would happen next.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s&mdash;it&rsquo;s a very fine day!&rsquo; said a timid voice at her side. She was
		      walking by the White Rabbit, who was peeping anxiously into her face.
		    </p>
		    <p>
		      &lsquo;Very,&rsquo; said Alice: &lsquo;&mdash;where&rsquo;s the Duchess?&rsquo;
		    </p>
		    <p>
		      &lsquo;Hush! Hush!&rsquo; said the Rabbit in a low, hurried tone. He looked anxiously
		      over his shoulder as he spoke, and then raised himself upon tiptoe, put
		      his mouth close to her ear, and whispered &lsquo;She&rsquo;s under sentence of
		      execution.&rsquo;
		    </p>
		    <p>
		      &lsquo;What for?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Did you say &ldquo;What a pity!&rdquo;?&rsquo; the Rabbit asked.
		    </p>
		    <p>
		      &lsquo;No, I didn&rsquo;t,&rsquo; said Alice: &lsquo;I don&rsquo;t think it&rsquo;s at all a pity. I said
		      &ldquo;What for?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;She boxed the Queen&rsquo;s ears&mdash;&rsquo; the Rabbit began. Alice gave a little
		      scream of laughter. &lsquo;Oh, hush!&rsquo; the Rabbit whispered in a frightened tone.
		      &lsquo;The Queen will hear you! You see, she came rather late, and the Queen
		      said&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Get to your places!&rsquo; shouted the Queen in a voice of thunder, and people
		      began running about in all directions, tumbling up against each other;
		      however, they got settled down in a minute or two, and the game began.
		      Alice thought she had never seen such a curious croquet-ground in her
		      life; it was all ridges and furrows; the balls were live hedgehogs, the
		      mallets live flamingoes, and the soldiers had to double themselves up and
		      to stand on their hands and feet, to make the arches.
		    </p>
		    <p>
		      The chief difficulty Alice found at first was in managing her flamingo:
		      she succeeded in getting its body tucked away, comfortably enough, under
		      her arm, with its legs hanging down, but generally, just as she had got
		      its neck nicely straightened out, and was going to give the hedgehog a
		      blow with its head, it <i>would</i> twist itself round and look up in her face,
		      with such a puzzled expression that she could not help bursting out
		      laughing: and when she had got its head down, and was going to begin
		      again, it was very provoking to find that the hedgehog had unrolled
		      itself, and was in the act of crawling away: besides all this, there was
		      generally a ridge or furrow in the way wherever she wanted to send the
		      hedgehog to, and, as the doubled-up soldiers were always getting up and
		      walking off to other parts of the ground, Alice soon came to the
		      conclusion that it was a very difficult game indeed.
		    </p>
		    <p>
		      The players all played at once without waiting for turns, quarrelling all
		      the while, and fighting for the hedgehogs; and in a very short time the
		      Queen was in a furious passion, and went stamping about, and shouting &lsquo;Off
		      with his head!&rsquo; or &lsquo;Off with her head!&rsquo; about once in a minute.
		    </p>
		    <p>
		      Alice began to feel very uneasy: to be sure, she had not as yet had any
		      dispute with the Queen, but she knew that it might happen any minute, &lsquo;and
		      then,&rsquo; thought she, &lsquo;what would become of me? They&rsquo;re dreadfully fond of
		      beheading people here; the great wonder is, that there&rsquo;s any one left
		      alive!&rsquo;
		    </p>
		    <p>
		      She was looking about for some way of escape, and wondering whether she
		      could get away without being seen, when she noticed a curious appearance
		      in the air: it puzzled her very much at first, but, after watching it a
		      minute or two, she made it out to be a grin, and she said to herself &lsquo;It&rsquo;s
		      the Cheshire Cat: now I shall have somebody to talk to.&rsquo;
		    </p>
		    <p>
		      &lsquo;How are you getting on?&rsquo; said the Cat, as soon as there was mouth enough
		      for it to speak with.
		    </p>
		    <p>
		      Alice waited till the eyes appeared, and then nodded. &lsquo;It&rsquo;s no use
		      speaking to it,&rsquo; she thought, &lsquo;till its ears have come, or at least one of
		      them.&rsquo; In another minute the whole head appeared, and then Alice put down
		      her flamingo, and began an account of the game, feeling very glad she had
		      someone to listen to her. The Cat seemed to think that there was enough of
		      it now in sight, and no more of it appeared.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t think they play at all fairly,&rsquo; Alice began, in rather a
		      complaining tone, &lsquo;and they all quarrel so dreadfully one can&rsquo;t hear
		      oneself speak&mdash;and they don&rsquo;t seem to have any rules in particular;
		      at least, if there are, nobody attends to them&mdash;and you&rsquo;ve no idea
		      how confusing it is all the things being alive; for instance, there&rsquo;s the
		      arch I&rsquo;ve got to go through next walking about at the other end of the
		      ground&mdash;and I should have croqueted the Queen&rsquo;s hedgehog just now,
		      only it ran away when it saw mine coming!&rsquo;
		    </p>
		    <p>
		      &lsquo;How do you like the Queen?&rsquo; said the Cat in a low voice.
		    </p>
		    <p>
		      &lsquo;Not at all,&rsquo; said Alice: &lsquo;she&rsquo;s so extremely&mdash;&rsquo; Just then she
		      noticed that the Queen was close behind her, listening: so she went on, &lsquo;&mdash;likely
		      to win, that it&rsquo;s hardly worth while finishing the game.&rsquo;
		    </p>
		    <p>
		      The Queen smiled and passed on.
		    </p>
		    <p>
		      &lsquo;Who <i>are</i> you talking to?&rsquo; said the King, going up to Alice, and looking at
		      the Cat&rsquo;s head with great curiosity.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a friend of mine&mdash;a Cheshire Cat,&rsquo; said Alice: &lsquo;allow me to
		      introduce it.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t like the look of it at all,&rsquo; said the King: &lsquo;however, it may kiss
		      my hand if it likes.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;d rather not,&rsquo; the Cat remarked.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t be impertinent,&rsquo; said the King, &lsquo;and don&rsquo;t look at me like that!&rsquo;
		      He got behind Alice as he spoke.
		    </p>
		    <p>
		      &lsquo;A cat may look at a king,&rsquo; said Alice. &lsquo;I&rsquo;ve read that in some book, but
		      I don&rsquo;t remember where.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it must be removed,&rsquo; said the King very decidedly, and he called
		      the Queen, who was passing at the moment, &lsquo;My dear! I wish you would have
		      this cat removed!&rsquo;
		    </p>
		    <p>
		      The Queen had only one way of settling all difficulties, great or small.
		      &lsquo;Off with his head!&rsquo; she said, without even looking round.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll fetch the executioner myself,&rsquo; said the King eagerly, and he hurried
		      off.
		    </p>
		    <p>
		      Alice thought she might as well go back, and see how the game was going
		      on, as she heard the Queen&rsquo;s voice in the distance, screaming with
		      passion. She had already heard her sentence three of the players to be
		      executed for having missed their turns, and she did not like the look of
		      things at all, as the game was in such confusion that she never knew
		      whether it was her turn or not. So she went in search of her hedgehog.
		    </p>
		    <p>
		      The hedgehog was engaged in a fight with another hedgehog, which seemed to
		      Alice an excellent opportunity for croqueting one of them with the other:
		      the only difficulty was, that her flamingo was gone across to the other
		      side of the garden, where Alice could see it trying in a helpless sort of
		      way to fly up into a tree.
		    </p>
		    <p>
		      By the time she had caught the flamingo and brought it back, the fight was
		      over, and both the hedgehogs were out of sight: &lsquo;but it doesn&rsquo;t matter
		      much,&rsquo; thought Alice, &lsquo;as all the arches are gone from this side of the
		      ground.&rsquo; So she tucked it away under her arm, that it might not escape
		      again, and went back for a little more conversation with her friend.
		    </p>
		    <p>
		      When she got back to the Cheshire Cat, she was surprised to find quite a
		      large crowd collected round it: there was a dispute going on between the
		      executioner, the King, and the Queen, who were all talking at once, while
		      all the rest were quite silent, and looked very uncomfortable.
		    </p>
		    <p>
		      The moment Alice appeared, she was appealed to by all three to settle the
		      question, and they repeated their arguments to her, though, as they all
		      spoke at once, she found it very hard indeed to make out exactly what they
		      said.
		    </p>
		    <p>
		      The executioner&rsquo;s argument was, that you couldn&rsquo;t cut off a head unless
		      there was a body to cut it off from: that he had never had to do such a
		      thing before, and he wasn&rsquo;t going to begin at <i>his</i> time of life.
		    </p>
		    <p>
		      The King&rsquo;s argument was, that anything that had a head could be beheaded,
		      and that you weren&rsquo;t to talk nonsense.
		    </p>
		    <p>
		      The Queen&rsquo;s argument was, that if something wasn&rsquo;t done about it in less
		      than no time she&rsquo;d have everybody executed, all round. (It was this last
		      remark that had made the whole party look so grave and anxious.)
		    </p>
		    <p>
		      Alice could think of nothing else to say but &lsquo;It belongs to the Duchess:
		      you&rsquo;d better ask <i>her</i> about it.&rsquo;
		    </p>
		    <p>
		      &lsquo;She&rsquo;s in prison,&rsquo; the Queen said to the executioner: &lsquo;fetch her here.&rsquo;
		      And the executioner went off like an arrow.
		    </p>
		    <p>
		      The Cat&rsquo;s head began fading away the moment he was gone, and,
		      by the time he had come back with the Duchess, it had entirely
		      disappeared; so the King and the executioner ran wildly up and down
		      looking for it, while the rest of the party went back to the game.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Mock Turtle’s Story",
			'number' => "Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      &lsquo;You can&rsquo;t think how glad I am to see you again, you dear old thing!&rsquo; said
		      the Duchess, as she tucked her arm affectionately into Alice&rsquo;s, and they
		      walked off together.
		    </p>
		    <p>
		      Alice was very glad to find her in such a pleasant temper, and thought to
		      herself that perhaps it was only the pepper that had made her so savage
		      when they met in the kitchen.
		    </p>
		    <p>
		      &lsquo;When <i>I&rsquo;m</i> a Duchess,&rsquo; she said to herself, (not in a very hopeful tone
		      though), &lsquo;I won&rsquo;t have any pepper in my kitchen <i>at all</i>. Soup does very
		      well without&mdash;Maybe it&rsquo;s always pepper that makes people
		      hot-tempered,&rsquo; she went on, very much pleased at having found out a new
		      kind of rule, &lsquo;and vinegar that makes them sour&mdash;and camomile that
		      makes them bitter&mdash;and&mdash;and barley-sugar and such things that
		      make children sweet-tempered. I only wish people knew <i>that</i>: then they
		      wouldn&rsquo;t be so stingy about it, you know&mdash;&rsquo;
		    </p>
		    <p>
		      She had quite forgotten the Duchess by this time, and was a little
		      startled when she heard her voice close to her ear. &lsquo;You&rsquo;re thinking about
		      something, my dear, and that makes you forget to talk. I can&rsquo;t tell you
		      just now what the moral of that is, but I shall remember it in a bit.&rsquo;
		    </p>
		    <p>
		      &lsquo;Perhaps it hasn&rsquo;t one,&rsquo; Alice ventured to remark.
		    </p>
		    <p>
		      &lsquo;Tut, tut, child!&rsquo; said the Duchess. &lsquo;Everything&rsquo;s got a moral, if only
		      you can find it.&rsquo; And she squeezed herself up closer to Alice&rsquo;s side as
		      she spoke.
		    </p>
		    <p>
		      Alice did not much like keeping so close to her: first, because the
		      Duchess was <i>very</i> ugly; and secondly, because she was exactly the right
		      height to rest her chin upon Alice&rsquo;s shoulder, and it was an uncomfortably
		      sharp chin. However, she did not like to be rude, so she bore it as well
		      as she could.
		    </p>
		    <p>
		      &lsquo;The game&rsquo;s going on rather better now,&rsquo; she said, by way of keeping up
		      the conversation a little.
		    </p>
		    <p>
		      &lsquo;&rsquo;Tis so,&rsquo; said the Duchess: &lsquo;and the moral of that is&mdash;&ldquo;Oh, &lsquo;tis
		      love, &lsquo;tis love, that makes the world go round!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Somebody said,&rsquo; Alice whispered, &lsquo;that it&rsquo;s done by everybody minding
		      their own business!&rsquo;
		    </p>
		    <p>
		      &lsquo;Ah, well! It means much the same thing,&rsquo; said the Duchess, digging her
		      sharp little chin into Alice&rsquo;s shoulder as she added, &lsquo;and the moral of
		      <i>that</i> is&mdash;&ldquo;Take care of the sense, and the sounds will take care of
		      themselves.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;How fond she is of finding morals in things!&rsquo; Alice thought to herself.
		    </p>
		    <p>
		      &lsquo;I dare say you&rsquo;re wondering why I don&rsquo;t put my arm round your waist,&rsquo; the
		      Duchess said after a pause: &lsquo;the reason is, that I&rsquo;m doubtful about the
		      temper of your flamingo. Shall I try the experiment?&rsquo;
		    </p>
		    <p>
		      &lsquo;He might bite,&rsquo; Alice cautiously replied, not feeling at all anxious to
		      have the experiment tried.
		    </p>
		    <p>
		      &lsquo;Very true,&rsquo; said the Duchess: &lsquo;flamingoes and mustard both bite. And the
		      moral of that is&mdash;&ldquo;Birds of a feather flock together.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Only mustard isn&rsquo;t a bird,&rsquo; Alice remarked.
		    </p>
		    <p>
		      &lsquo;Right, as usual,&rsquo; said the Duchess: &lsquo;what a clear way you have of putting
		      things!&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a mineral, I <i>think</i>,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Of course it is,&rsquo; said the Duchess, who seemed ready to agree to
		      everything that Alice said; &lsquo;there&rsquo;s a large mustard-mine near here. And
		      the moral of that is&mdash;&ldquo;The more there is of mine, the less there is
		      of yours.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, I know!&rsquo; exclaimed Alice, who had not attended to this last remark,
		      &lsquo;it&rsquo;s a vegetable. It doesn&rsquo;t look like one, but it is.&rsquo;
		    </p>
		    <p>
		      &lsquo;I quite agree with you,&rsquo; said the Duchess; &lsquo;and the moral of that is&mdash;&ldquo;Be
		      what you would seem to be&rdquo;&mdash;or if you&rsquo;d like it put more simply&mdash;&ldquo;Never
		      imagine yourself not to be otherwise than what it might appear to others
		      that what you were or might have been was not otherwise than what you had
		      been would have appeared to them to be otherwise.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;I think I should understand that better,&rsquo; Alice said very politely, &lsquo;if I
		      had it written down: but I can&rsquo;t quite follow it as you say it.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s nothing to what I could say if I chose,&rsquo; the Duchess replied, in a
		      pleased tone.
		    </p>
		    <p>
		      &lsquo;Pray don&rsquo;t trouble yourself to say it any longer than that,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Oh, don&rsquo;t talk about trouble!&rsquo; said the Duchess. &lsquo;I make you a present of
		      everything I&rsquo;ve said as yet.&rsquo;
		    </p>
		    <p>
		      &lsquo;A cheap sort of present!&rsquo; thought Alice. &lsquo;I&rsquo;m glad they don&rsquo;t give
		      birthday presents like that!&rsquo; But she did not venture to say it out loud.
		    </p>
		    <p>
		      &lsquo;Thinking again?&rsquo; the Duchess asked, with another dig of her sharp little
		      chin.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve a right to think,&rsquo; said Alice sharply, for she was beginning to feel
		      a little worried.
		    </p>
		    <p>
		      &lsquo;Just about as much right,&rsquo; said the Duchess, &lsquo;as pigs have to fly; and
		      the m&mdash;&rsquo;
		    </p>
		    <p>
		      But here, to Alice&rsquo;s great surprise, the Duchess&rsquo;s voice died away, even
		      in the middle of her favourite word &lsquo;moral,&rsquo; and the arm that was linked
		      into hers began to tremble. Alice looked up, and there stood the Queen in
		      front of them, with her arms folded, frowning like a thunderstorm.
		    </p>
		    <p>
		      &lsquo;A fine day, your Majesty!&rsquo; the Duchess began in a low, weak voice.
		    </p>
		    <p>
		      &lsquo;Now, I give you fair warning,&rsquo; shouted the Queen, stamping on the ground
		      as she spoke; &lsquo;either you or your head must be off, and that in about half
		      no time! Take your choice!&rsquo;
		    </p>
		    <p>
		      The Duchess took her choice, and was gone in a moment.
		    </p>
		    <p>
		      &lsquo;Let&rsquo;s go on with the game,&rsquo; the Queen said to Alice; and Alice was too
		      much frightened to say a word, but slowly followed her back to the
		      croquet-ground.
		    </p>
		    <p>
		      The other guests had taken advantage of the Queen&rsquo;s absence, and were
		      resting in the shade: however, the moment they saw her, they hurried back
		      to the game, the Queen merely remarking that a moment&rsquo;s delay would cost
		      them their lives.
		    </p>
		    <p>
		      All the time they were playing the Queen never left off quarrelling with
		      the other players, and shouting &lsquo;Off with his head!&rsquo; or &lsquo;Off with her
		      head!&rsquo; Those whom she sentenced were taken into custody by the soldiers,
		      who of course had to leave off being arches to do this, so that by the end
		      of half an hour or so there were no arches left, and all the players,
		      except the King, the Queen, and Alice, were in custody and under sentence
		      of execution.
		    </p>
		    <p>
		      Then the Queen left off, quite out of breath, and said to Alice, &lsquo;Have you
		      seen the Mock Turtle yet?&rsquo;
		    </p>
		    <p>
		      &lsquo;No,&rsquo; said Alice. &lsquo;I don&rsquo;t even know what a Mock Turtle is.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the thing Mock Turtle Soup is made from,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;I never saw one, or heard of one,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Come on, then,&rsquo; said the Queen, &lsquo;and he shall tell you his history,&rsquo;
		    </p>
		    <p>
		      As they walked off together, Alice heard the King say in a low voice, to
		      the company generally, &lsquo;You are all pardoned.&rsquo; &lsquo;Come, <i>that&rsquo;s</i> a good
		      thing!&rsquo; she said to herself, for she had felt quite unhappy at the number
		      of executions the Queen had ordered.
		    </p>
		    <p>
		      They very soon came upon a Gryphon, lying fast asleep in the sun. (If you
		      don&rsquo;t know what a Gryphon is, look at the picture.) &lsquo;Up, lazy thing!&rsquo; said
		      the Queen, &lsquo;and take this young lady to see the Mock Turtle, and to hear
		      his history. I must go back and see after some executions I have ordered&rsquo;;
		      and she walked off, leaving Alice alone with the Gryphon. Alice did not
		      quite like the look of the creature, but on the whole she thought it would
		      be quite as safe to stay with it as to go after that savage Queen: so she
		      waited.
		    </p>
		    <p>
		      The Gryphon sat up and rubbed its eyes: then it watched the Queen till she
		      was out of sight: then it chuckled. &lsquo;What fun!&rsquo; said the Gryphon, half to
		      itself, half to Alice.
		    </p>
		    <p>
		      &lsquo;What <i>is</i> the fun?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why, <i>she</i>,&rsquo; said the Gryphon. &lsquo;It&rsquo;s all her fancy, that: they never
		      executes nobody, you know. Come on!&rsquo;
		    </p>
		    <p>
		      &lsquo;Everybody says &ldquo;come on!&rdquo; here,&rsquo; thought Alice, as she went slowly after
		      it: &lsquo;I never was so ordered about in all my life, never!&rsquo;
		    </p>
		    <p>
		      They had not gone far before they saw the Mock Turtle in the distance,
		      sitting sad and lonely on a little ledge of rock, and, as they came
		      nearer, Alice could hear him sighing as if his heart would break. She
		      pitied him deeply. &lsquo;What is his sorrow?&rsquo; she asked the Gryphon, and the
		      Gryphon answered, very nearly in the same words as before, &lsquo;It&rsquo;s all his
		      fancy, that: he hasn&rsquo;t got no sorrow, you know. Come on!&rsquo;
		    </p>
		    <p>
		      So they went up to the Mock Turtle, who looked at them with large eyes
		      full of tears, but said nothing.
		    </p>
		    <p>
		      &lsquo;This here young lady,&rsquo; said the Gryphon, &lsquo;she wants for to know your
		      history, she do.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll tell it her,&rsquo; said the Mock Turtle in a deep, hollow tone: &lsquo;sit
		      down, both of you, and don&rsquo;t speak a word till I&rsquo;ve finished.&rsquo;
		    </p>
		    <p>
		      So they sat down, and nobody spoke for some minutes. Alice thought to
		      herself, &lsquo;I don&rsquo;t see how he can <i>ever</i> finish, if he doesn&rsquo;t begin.&rsquo; But
		      she waited patiently.
		    </p>
		    <p>
		      &lsquo;Once,&rsquo; said the Mock Turtle at last, with a deep sigh, &lsquo;I was a real
		      Turtle.&rsquo;
		    </p>
		    <p>
		      These words were followed by a very long silence, broken only by an
		      occasional exclamation of &lsquo;Hjckrrh!&rsquo; from the Gryphon, and the constant
		      heavy sobbing of the Mock Turtle. Alice was very nearly getting up and
		      saying, &lsquo;Thank you, sir, for your interesting story,&rsquo; but she could not
		      help thinking there <i>must</i> be more to come, so she sat still and said
		      nothing.
		    </p>
		    <p>
		      &lsquo;When we were little,&rsquo; the Mock Turtle went on at last, more calmly,
		      though still sobbing a little now and then, &lsquo;we went to school in the sea.
		      The master was an old Turtle&mdash;we used to call him Tortoise&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Why did you call him Tortoise, if he wasn&rsquo;t one?&rsquo; Alice asked.
		    </p>
		    <p>
		      &lsquo;We called him Tortoise because he taught us,&rsquo; said the Mock Turtle
		      angrily: &lsquo;really you are very dull!&rsquo;
		    </p>
		    <p>
		      &lsquo;You ought to be ashamed of yourself for asking such a simple question,&rsquo;
		      added the Gryphon; and then they both sat silent and looked at poor Alice,
		      who felt ready to sink into the earth. At last the Gryphon said to the
		      Mock Turtle, &lsquo;Drive on, old fellow! Don&rsquo;t be all day about it!&rsquo; and he
		      went on in these words:
		    </p>
		    <p>
		      &lsquo;Yes, we went to school in the sea, though you mayn&rsquo;t believe it&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;I never said I didn&rsquo;t!&rsquo; interrupted Alice.
		    </p>
		    <p>
		      &lsquo;You did,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Hold your tongue!&rsquo; added the Gryphon, before Alice could speak again. The
		      Mock Turtle went on.
		    </p>
		    <p>
		      &lsquo;We had the best of educations&mdash;in fact, we went to school every day&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>I&rsquo;ve</i> been to a day-school, too,&rsquo; said Alice; &lsquo;you needn&rsquo;t be so proud as
		      all that.&rsquo;
		    </p>
		    <p>
		      &lsquo;With extras?&rsquo; asked the Mock Turtle a little anxiously.
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice, &lsquo;we learned French and music.&rsquo;
		    </p>
		    <p>
		      &lsquo;And washing?&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Certainly not!&rsquo; said Alice indignantly.
		    </p>
		    <p>
		      &lsquo;Ah! then yours wasn&rsquo;t a really good school,&rsquo; said the Mock Turtle in a
		      tone of great relief. &lsquo;Now at <i>ours</i> they had at the end of the bill,
		      &ldquo;French, music, <i>and washing</i>&mdash;extra.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;You couldn&rsquo;t have wanted it much,&rsquo; said Alice; &lsquo;living at the bottom of
		      the sea.&rsquo;
		    </p>
		    <p>
		      &lsquo;I couldn&rsquo;t afford to learn it.&rsquo; said the Mock Turtle with a sigh. &lsquo;I only
		      took the regular course.&rsquo;
		    </p>
		    <p>
		      &lsquo;What was that?&rsquo; inquired Alice.
		    </p>
		    <p>
		      &lsquo;Reeling and Writhing, of course, to begin with,&rsquo; the Mock Turtle replied;
		      &lsquo;and then the different branches of Arithmetic&mdash;Ambition,
		      Distraction, Uglification, and Derision.&rsquo;
		    </p>
		    <p>
		      &lsquo;I never heard of &ldquo;Uglification,&rdquo;&rsquo; Alice ventured to say. &lsquo;What is it?&rsquo;
		    </p>
		    <p>
		      The Gryphon lifted up both its paws in surprise. &lsquo;What! Never heard of
		      uglifying!&rsquo; it exclaimed. &lsquo;You know what to beautify is, I suppose?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice doubtfully: &lsquo;it means&mdash;to&mdash;make&mdash;anything&mdash;prettier.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, then,&rsquo; the Gryphon went on, &lsquo;if you don&rsquo;t know what to uglify is,
		      you <i>are</i> a simpleton.&rsquo;
		    </p>
		    <p>
		      Alice did not feel encouraged to ask any more questions about it, so she
		      turned to the Mock Turtle, and said &lsquo;What else had you to learn?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, there was Mystery,&rsquo; the Mock Turtle replied, counting off the
		      subjects on his flappers, &lsquo;&mdash;Mystery, ancient and modern, with
		      Seaography: then Drawling&mdash;the Drawling-master was an old conger-eel,
		      that used to come once a week: <i>he</i> taught us Drawling, Stretching, and
		      Fainting in Coils.&rsquo;
		    </p>
		    <p>
		      &lsquo;What was <i>that</i> like?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Well, I can&rsquo;t show it you myself,&rsquo; the Mock Turtle said: &lsquo;I&rsquo;m too stiff.
		      And the Gryphon never learnt it.&rsquo;
		    </p>
		    <p>
		      &lsquo;Hadn&rsquo;t time,&rsquo; said the Gryphon: &lsquo;I went to the Classics master, though.
		      He was an old crab, <i>he</i> was.&rsquo;
		    </p>
		    <p>
		      &lsquo;I never went to him,&rsquo; the Mock Turtle said with a sigh: &lsquo;he taught
		      Laughing and Grief, they used to say.&rsquo;
		    </p>
		    <p>
		      &lsquo;So he did, so he did,&rsquo; said the Gryphon, sighing in his turn; and both
		      creatures hid their faces in their paws.
		    </p>
		    <p>
		      &lsquo;And how many hours a day did you do lessons?&rsquo; said Alice, in a hurry to
		      change the subject.
		    </p>
		    <p>
		      &lsquo;Ten hours the first day,&rsquo; said the Mock Turtle: &lsquo;nine the next, and so
		      on.&rsquo;
		    </p>
		    <p>
		      &lsquo;What a curious plan!&rsquo; exclaimed Alice.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the reason they&rsquo;re called lessons,&rsquo; the Gryphon remarked: &lsquo;because
		      they lessen from day to day.&rsquo;
		    </p>
		    <p>
		      This was quite a new idea to Alice, and she thought it over a little
		      before she made her next remark. &lsquo;Then the eleventh day must have been a
		      holiday?&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course it was,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;And how did you manage on the twelfth?&rsquo; Alice went on eagerly.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s enough about lessons,&rsquo; the Gryphon interrupted in a very decided
		      tone: &lsquo;tell her something about the games now.&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Lobster Quadrille",
			'number' => "Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The Mock Turtle sighed deeply, and drew the back of one flapper across his
		      eyes. He looked at Alice, and tried to speak, but for a minute or two sobs
		      choked his voice. &lsquo;Same as if he had a bone in his throat,&rsquo; said the
		      Gryphon: and it set to work shaking him and punching him in the back. At
		      last the Mock Turtle recovered his voice, and, with tears running down his
		      cheeks, he went on again:&mdash;
		    </p>
		    <p>
		      &lsquo;You may not have lived much under the sea&mdash;&rsquo; (&lsquo;I haven&rsquo;t,&rsquo; said
		      Alice)&mdash;&lsquo;and perhaps you were never even introduced to a lobster&mdash;&rsquo;
		      (Alice began to say &lsquo;I once tasted&mdash;&rsquo; but checked herself hastily,
		      and said &lsquo;No, never&rsquo;) &lsquo;&mdash;so you can have no idea what a delightful
		      thing a Lobster Quadrille is!&rsquo;
		    </p>
		    <p>
		      &lsquo;No, indeed,&rsquo; said Alice. &lsquo;What sort of a dance is it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Why,&rsquo; said the Gryphon, &lsquo;you first form into a line along the sea-shore&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Two lines!&rsquo; cried the Mock Turtle. &lsquo;Seals, turtles, salmon, and so on;
		      then, when you&rsquo;ve cleared all the jelly-fish out of the way&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>That</i> generally takes some time,&rsquo; interrupted the Gryphon.
		    </p>
		    <p>
		      &lsquo;&mdash;you advance twice&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Each with a lobster as a partner!&rsquo; cried the Gryphon.
		    </p>
		    <p>
		      &lsquo;Of course,&rsquo; the Mock Turtle said: &lsquo;advance twice, set to partners&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;&mdash;change lobsters, and retire in same order,&rsquo; continued the Gryphon.
		    </p>
		    <p>
		      &lsquo;Then, you know,&rsquo; the Mock Turtle went on, &lsquo;you throw the&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;The lobsters!&rsquo; shouted the Gryphon, with a bound into the air.
		    </p>
		    <p>
		      &lsquo;&mdash;as far out to sea as you can&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Swim after them!&rsquo; screamed the Gryphon.
		    </p>
		    <p>
		      &lsquo;Turn a somersault in the sea!&rsquo; cried the Mock Turtle, capering wildly
		      about.
		    </p>
		    <p>
		      &lsquo;Change lobsters again!&rsquo; yelled the Gryphon at the top of its voice.
		    </p>
		    <p>
		      &lsquo;Back to land again, and that&rsquo;s all the first figure,&rsquo; said the Mock
		      Turtle, suddenly dropping his voice; and the two creatures, who had been
		      jumping about like mad things all this time, sat down again very sadly and
		      quietly, and looked at Alice.
		    </p>
		    <p>
		      &lsquo;It must be a very pretty dance,&rsquo; said Alice timidly.
		    </p>
		    <p>
		      &lsquo;Would you like to see a little of it?&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;Very much indeed,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Come, let&rsquo;s try the first figure!&rsquo; said the Mock Turtle to the Gryphon.
		      &lsquo;We can do without lobsters, you know. Which shall sing?&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, <i>you</i> sing,&rsquo; said the Gryphon. &lsquo;I&rsquo;ve forgotten the words.&rsquo;
		    </p>
		    <p>
		      So they began solemnly dancing round and round Alice, every now and then
		      treading on her toes when they passed too close, and waving their forepaws
		      to mark the time, while the Mock Turtle sang this, very slowly and sadly:&mdash;
		    </p>
		    <p class='aiw-snail stanza'>
		 &lsquo;&ldquo;Will you walk a little faster?&rdquo; said a whiting to a snail.
		    <br>
		 &ldquo;There&rsquo;s a porpoise close behind us, and he&rsquo;s treading on my tail.
		    </p>
		    <p class='aiw-snail stanza'>
		 See how eagerly the lobsters and the turtles all advance!
		    <br>
		 They are waiting on the shingle&mdash;will you come and join the dance?
		    </p>
		    <p class='aiw-snail stanza'>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, will you join the dance?
		    <br>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, won&rsquo;t you join the dance?
		    </p>
		    <p class='aiw-snail stanza'>
		 &ldquo;You can really have no notion how delightful it will be
		    <br>
		 When they take us up and throw us, with the lobsters, out to sea!&rdquo;
		    <br>
		  But the snail replied &ldquo;Too far, too far!&rdquo; and gave a look askance&mdash;
		    <br>
		 Said he thanked the whiting kindly, but he would not join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 Would not, could not, would not, could not, would not join the dance.
		    <br>
		 Would not, could not, would not, could not, could not join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 &lsquo;&ldquo;What matters it how far we go?&rdquo; his scaly friend replied.
		    <br>
		 &ldquo;There is another shore, you know, upon the other side.
		    <br>
		 The further off from England the nearer is to France&mdash;
		    <br>
		 Then turn not pale, beloved snail, but come and join the dance.
		    </p>
		    <p class='aiw-snail stanza'>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, will you join the dance?
		    <br>
		 Will you, won&rsquo;t you, will you, won&rsquo;t you, won&rsquo;t you join the dance?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you, it&rsquo;s a very interesting dance to watch,&rsquo; said Alice, feeling
		      very glad that it was over at last: &lsquo;and I do so like that curious song
		      about the whiting!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, as to the whiting,&rsquo; said the Mock Turtle, &lsquo;they&mdash;you&rsquo;ve seen
		      them, of course?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes,&rsquo; said Alice, &lsquo;I&rsquo;ve often seen them at dinn&mdash;&rsquo; she checked
		      herself hastily.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know where Dinn may be,&rsquo; said the Mock Turtle, &lsquo;but if you&rsquo;ve
		      seen them so often, of course you know what they&rsquo;re like.&rsquo;
		    </p>
		    <p>
		      &lsquo;I believe so,&rsquo; Alice replied thoughtfully. &lsquo;They have their tails in
		      their mouths&mdash;and they&rsquo;re all over crumbs.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;re wrong about the crumbs,&rsquo; said the Mock Turtle: &lsquo;crumbs would all
		      wash off in the sea. But they <i>have</i> their tails in their mouths; and the
		      reason is&mdash;&rsquo; here the Mock Turtle yawned and shut his eyes.&mdash;&lsquo;Tell
		      her about the reason and all that,&rsquo; he said to the Gryphon.
		    </p>
		    <p>
		      &lsquo;The reason is,&rsquo; said the Gryphon, &lsquo;that they <i>would</i> go with the lobsters
		      to the dance. So they got thrown out to sea. So they had to fall a long
		      way. So they got their tails fast in their mouths. So they couldn&rsquo;t get
		      them out again. That&rsquo;s all.&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you,&rsquo; said Alice, &lsquo;it&rsquo;s very interesting. I never knew so much
		      about a whiting before.&rsquo;
		    </p>
		    <p>
		      &lsquo;I can tell you more than that, if you like,&rsquo; said the Gryphon. &lsquo;Do you
		      know why it&rsquo;s called a whiting?&rsquo;
		    </p>
		    <p>
		      &lsquo;I never thought about it,&rsquo; said Alice. &lsquo;Why?&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>It does the boots and shoes</i>,&rsquo; the Gryphon replied very solemnly.
		    </p>
		    <p>
		      Alice was thoroughly puzzled. &lsquo;Does the boots and shoes!&rsquo; she repeated in
		      a wondering tone.
		    </p>
		    <p>
		      &lsquo;Why, what are <i>your</i> shoes done with?&rsquo; said the Gryphon. &lsquo;I mean, what
		      makes them so shiny?&rsquo;
		    </p>
		    <p>
		      Alice looked down at them, and considered a little before she gave her
		      answer. &lsquo;They&rsquo;re done with blacking, I believe.&rsquo;
		    </p>
		    <p>
		      &lsquo;Boots and shoes under the sea,&rsquo; the Gryphon went on in a deep voice, &lsquo;are
		      done with a whiting. Now you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what are they made of?&rsquo; Alice asked in a tone of great curiosity.
		    </p>
		    <p>
		      &lsquo;Soles and eels, of course,&rsquo; the Gryphon replied rather impatiently: &lsquo;any
		      shrimp could have told you that.&rsquo;
		    </p>
		    <p>
		      &lsquo;If I&rsquo;d been the whiting,&rsquo; said Alice, whose thoughts were still running
		      on the song, &lsquo;I&rsquo;d have said to the porpoise, &ldquo;Keep back, please: we don&rsquo;t
		      want <i>you</i> with us!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;They were obliged to have him with them,&rsquo; the Mock Turtle said: &lsquo;no wise
		      fish would go anywhere without a porpoise.&rsquo;
		    </p>
		    <p>
		      &lsquo;Wouldn&rsquo;t it really?&rsquo; said Alice in a tone of great surprise.
		    </p>
		    <p>
		      &lsquo;Of course not,&rsquo; said the Mock Turtle: &lsquo;why, if a fish came to <i>me</i>, and
		      told me he was going a journey, I should say &ldquo;With what porpoise?&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t you mean &ldquo;purpose&rdquo;?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;I mean what I say,&rsquo; the Mock Turtle replied in an offended tone. And the
		      Gryphon added &lsquo;Come, let&rsquo;s hear some of <i>your</i> adventures.&rsquo;
		    </p>
		    <p>
		      &lsquo;I could tell you my adventures&mdash;beginning from this morning,&rsquo; said
		      Alice a little timidly: &lsquo;but it&rsquo;s no use going back to yesterday, because
		      I was a different person then.&rsquo;
		    </p>
		    <p>
		      &lsquo;Explain all that,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;No, no! The adventures first,&rsquo; said the Gryphon in an impatient tone:
		      &lsquo;explanations take such a dreadful time.&rsquo;
		    </p>
		    <p>
		      So Alice began telling them her adventures from the time when she first
		      saw the White Rabbit. She was a little nervous about it just at first, the
		      two creatures got so close to her, one on each side, and opened their eyes
		      and mouths so <i>very</i> wide, but she gained courage as she went on. Her
		      listeners were perfectly quiet till she got to the part about her
		      repeating &lsquo;<i>You are old, Father William</i>,&rsquo; to the Caterpillar, and the words
		      all coming different, and then the Mock Turtle drew a long breath, and
		      said &lsquo;That&rsquo;s very curious.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s all about as curious as it can be,&rsquo; said the Gryphon.
		    </p>
		    <p>
		      &lsquo;It all came different!&rsquo; the Mock Turtle repeated thoughtfully. &lsquo;I should
		      like to hear her try and repeat something now. Tell her to begin.&rsquo; He
		      looked at the Gryphon as if he thought it had some kind of authority over
		      Alice.
		    </p>
		    <p>
		      &lsquo;Stand up and repeat &ldquo;&lsquo;<i>Tis the voice of the sluggard</i>,&rdquo;&rsquo; said the Gryphon.
		    </p>
		    <p>
		      &lsquo;How the creatures order one about, and make one repeat lessons!&rsquo; thought
		      Alice; &lsquo;I might as well be at school at once.&rsquo; However, she got up, and
		      began to repeat it, but her head was so full of the Lobster Quadrille,
		      that she hardly knew what she was saying, and the words came very queer
		      indeed:&mdash;
		    </p>
		    <p class='aiw-lobster stanza'>
		  &lsquo;&rsquo;Tis the voice of the Lobster; I heard him declare,
		    <br>
		  &ldquo;You have baked me too brown, I must sugar my hair.&rdquo;
		    <br>
		   As a duck with its eyelids, so he with his nose
		    <br>
		  Trims his belt and his buttons, and turns out his toes.&rsquo;
		    </p>
		    <p class='aiw-lobster stanza'>
		       [later editions continued as follows
		    <br>
		  When the sands are all dry, he is gay as a lark,
		    <br>
		  And will talk in contemptuous tones of the Shark,
		    <br>
		  But, when the tide rises and sharks are around,
		    <br>
		  His voice has a timid and tremulous sound.]
		    </p>
		    <p>
		      &lsquo;That&rsquo;s different from what <i>I</i> used to say when I was a child,&rsquo; said the
		      Gryphon.
		    </p>
		    <p>
		      &lsquo;Well, I never heard it before,&rsquo; said the Mock Turtle; &lsquo;but it sounds
		      uncommon nonsense.&rsquo;
		    </p>
		    <p>
		      Alice said nothing; she had sat down with her face in her hands, wondering
		      if anything would <i>ever</i> happen in a natural way again.
		    </p>
		    <p>
		      &lsquo;I should like to have it explained,&rsquo; said the Mock Turtle.
		    </p>
		    <p>
		      &lsquo;She can&rsquo;t explain it,&rsquo; said the Gryphon hastily. &lsquo;Go on with the next
		      verse.&rsquo;
		    </p>
		    <p>
		      &lsquo;But about his toes?&rsquo; the Mock Turtle persisted. &lsquo;How <i>could</i> he turn them
		      out with his nose, you know?&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the first position in dancing.&rsquo; Alice said; but was dreadfully
		      puzzled by the whole thing, and longed to change the subject.
		    </p>
		    <p>
		      &lsquo;Go on with the next verse,&rsquo; the Gryphon repeated impatiently: &lsquo;it begins
		      &ldquo;<i>I passed by his garden</i>.&rdquo;&rsquo;
		    </p>
		    <p>
		      Alice did not dare to disobey, though she felt sure it would all come
		      wrong, and she went on in a trembling voice:&mdash;
		    </p>
		    <p class='aiw-panther stanza'>
		  &lsquo;I passed by his garden, and marked, with one eye,
		    <br>
		  How the Owl and the Panther were sharing a pie&mdash;&rsquo;
		    </p>
		    <p class='aiw-panther stanza'>
		    [later editions continued as follows
		    <br>
		  The Panther took pie-crust, and gravy, and meat,
		    <br>
		  While the Owl had the dish as its share of the treat.
		    <br>
		  When the pie was all finished, the Owl, as a boon,
		    <br>
		  Was kindly permitted to pocket the spoon:
		    <br>
		  While the Panther received knife and fork with a growl,
		    <br>
		  And concluded the banquet&mdash;]
		    </p>
		    <p>
		      &lsquo;What <i>is</i> the use of repeating all that stuff,&rsquo; the Mock Turtle
		      interrupted, &lsquo;if you don&rsquo;t explain it as you go on? It&rsquo;s by far the most
		      confusing thing <i>I</i> ever heard!&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, I think you&rsquo;d better leave off,&rsquo; said the Gryphon: and Alice was
		      only too glad to do so.
		    </p>
		    <p>
		      &lsquo;Shall we try another figure of the Lobster Quadrille?&rsquo; the Gryphon went
		      on. &lsquo;Or would you like the Mock Turtle to sing you a song?&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, a song, please, if the Mock Turtle would be so kind,&rsquo; Alice replied,
		      so eagerly that the Gryphon said, in a rather offended tone, &lsquo;Hm! No
		      accounting for tastes! Sing her &ldquo;<i>Turtle Soup</i>,&rdquo; will you, old fellow?&rsquo;
		    </p>
		    <p>
		      The Mock Turtle sighed deeply, and began, in a voice sometimes choked with
		      sobs, to sing this:&mdash;
		    </p>
		    <p class='aiw-soup stanza'>
		   &lsquo;Beautiful Soup, so rich and green,
		    <br>
		   Waiting in a hot tureen!
		    <br>
		   Who for such dainties would not stoop?
		    <br>
		   Soup of the evening, beautiful Soup!
		    <br>
		   Soup of the evening, beautiful Soup!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		   Soo&mdash;oop of the e&mdash;e&mdash;evening,
		    <br>
		     Beautiful, beautiful Soup!
		    </p>
		    <p class='aiw-soup stanza'>
		   &lsquo;Beautiful Soup! Who cares for fish,
		    <br>
		   Game, or any other dish?
		    <br>
		   Who would not give all else for two
		    <br>
		   Pennyworth only of beautiful Soup?
		    <br>
		   Pennyworth only of beautiful Soup?
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		     Beau&mdash;ootiful Soo&mdash;oop!
		    <br>
		   Soo&mdash;oop of the e&mdash;e&mdash;evening,
		    <br>
		     Beautiful, beauti&mdash;FUL SOUP!&rsquo;
		    </p>
		    <p>
		      &lsquo;Chorus again!&rsquo; cried the Gryphon, and the Mock Turtle had just begun to
		      repeat it, when a cry of &lsquo;The trial&rsquo;s beginning!&rsquo; was heard in the
		      distance.
		    </p>
		    <p>
		      &lsquo;Come on!&rsquo; cried the Gryphon, and, taking Alice by the hand, it hurried
		      off, without waiting for the end of the song.
		    </p>
		    <p>
		      &lsquo;What trial is it?&rsquo; Alice panted as she ran; but the Gryphon only answered
		      &lsquo;Come on!&rsquo; and ran the faster, while more and more faintly came, carried
		      on the breeze that followed them, the melancholy words:&mdash;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Who Stole the Tarts?",
			'number' => "Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      The King and Queen of Hearts were seated on their throne when they
		      arrived, with a great crowd assembled about them&mdash;all sorts of little
		      birds and beasts, as well as the whole pack of cards: the Knave was
		      standing before them, in chains, with a soldier on each side to guard him;
		      and near the King was the White Rabbit, with a trumpet in one hand, and a
		      scroll of parchment in the other. In the very middle of the court was a
		      table, with a large dish of tarts upon it: they looked so good, that it
		      made Alice quite hungry to look at them&mdash;&lsquo;I wish they&rsquo;d get the trial
		      done,&rsquo; she thought, &lsquo;and hand round the refreshments!&rsquo; But there seemed to
		      be no chance of this, so she began looking at everything about her, to
		      pass away the time.
		    </p>
		    <p>
		      Alice had never been in a court of justice before, but she had read about
		      them in books, and she was quite pleased to find that she knew the name of
		      nearly everything there. &lsquo;That&rsquo;s the judge,&rsquo; she said to herself, &lsquo;because
		      of his great wig.&rsquo;
		    </p>
		    <p>
		      The judge, by the way, was the King; and as he wore his crown over the
		      wig, (look at the frontispiece if you want to see how he did it,) he did
		      not look at all comfortable, and it was certainly not becoming.
		    </p>
		    <p>
		      &lsquo;And that&rsquo;s the jury-box,&rsquo; thought Alice, &lsquo;and those twelve creatures,&rsquo;
		      (she was obliged to say &lsquo;creatures,&rsquo; you see, because some of them were
		      animals, and some were birds,) &lsquo;I suppose they are the jurors.&rsquo; She said
		      this last word two or three times over to herself, being rather proud of
		      it: for she thought, and rightly too, that very few little girls of her
		      age knew the meaning of it at all. However, &lsquo;jury-men&rsquo; would have done
		      just as well.
		    </p>
		    <p>
		      The twelve jurors were all writing very busily on slates. &lsquo;What are they
		      doing?&rsquo; Alice whispered to the Gryphon. &lsquo;They can&rsquo;t have anything to put
		      down yet, before the trial&rsquo;s begun.&rsquo;
		    </p>
		    <p>
		      &lsquo;They&rsquo;re putting down their names,&rsquo; the Gryphon whispered in reply, &lsquo;for
		      fear they should forget them before the end of the trial.&rsquo;
		    </p>
		    <p>
		      &lsquo;Stupid things!&rsquo; Alice began in a loud, indignant voice, but she stopped
		      hastily, for the White Rabbit cried out, &lsquo;Silence in the court!&rsquo; and the
		      King put on his spectacles and looked anxiously round, to make out who was
		      talking.
		    </p>
		    <p>
		      Alice could see, as well as if she were looking over their shoulders, that
		      all the jurors were writing down &lsquo;stupid things!&rsquo; on their slates, and she
		      could even make out that one of them didn&rsquo;t know how to spell &lsquo;stupid,&rsquo;
		      and that he had to ask his neighbour to tell him. &lsquo;A nice muddle their
		      slates&rsquo;ll be in before the trial&rsquo;s over!&rsquo; thought Alice.
		    </p>
		    <p>
		      One of the jurors had a pencil that squeaked. This of course, Alice could
		      <i>not</i> stand, and she went round the court and got behind him, and very soon
		      found an opportunity of taking it away. She did it so quickly that the
		      poor little juror (it was Bill, the Lizard) could not make out at all what
		      had become of it; so, after hunting all about for it, he was obliged to
		      write with one finger for the rest of the day; and this was of very little
		      use, as it left no mark on the slate.
		    </p>
		    <p>
		      &lsquo;Herald, read the accusation!&rsquo; said the King.
		    </p>
		    <p>
		      On this the White Rabbit blew three blasts on the trumpet, and then
		      unrolled the parchment scroll, and read as follows:&mdash;
		    </p>
		    <p class='aiw-tarts stanza'>
		   &lsquo;The Queen of Hearts, she made some tarts,
		    <br>
		      All on a summer day:
		    <br>
		    The Knave of Hearts, he stole those tarts,
		    <br>
		      And took them quite away!&rsquo;
		    </p>
		    <p>
		      &lsquo;Consider your verdict,&rsquo; the King said to the jury.
		    </p>
		    <p>
		      &lsquo;Not yet, not yet!&rsquo; the Rabbit hastily interrupted. &lsquo;There&rsquo;s a great deal
		      to come before that!&rsquo;
		    </p>
		    <p>
		      &lsquo;Call the first witness,&rsquo; said the King; and the White Rabbit blew three
		      blasts on the trumpet, and called out, &lsquo;First witness!&rsquo;
		    </p>
		    <p>
		      The first witness was the Hatter. He came in with a teacup in one hand and
		      a piece of bread-and-butter in the other. &lsquo;I beg pardon, your Majesty,&rsquo; he
		      began, &lsquo;for bringing these in: but I hadn&rsquo;t quite finished my tea when I
		      was sent for.&rsquo;
		    </p>
		    <p>
		      &lsquo;You ought to have finished,&rsquo; said the King. &lsquo;When did you begin?&rsquo;
		    </p>
		    <p>
		      The Hatter looked at the March Hare, who had followed him into the court,
		      arm-in-arm with the Dormouse. &lsquo;Fourteenth of March, I <i>think</i> it was,&rsquo; he
		      said.
		    </p>
		    <p>
		      &lsquo;Fifteenth,&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;Sixteenth,&rsquo; added the Dormouse.
		    </p>
		    <p>
		      &lsquo;Write that down,&rsquo; the King said to the jury, and the jury eagerly wrote
		      down all three dates on their slates, and then added them up, and reduced
		      the answer to shillings and pence.
		    </p>
		    <p>
		      &lsquo;Take off your hat,&rsquo; the King said to the Hatter.
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t mine,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;<i>Stolen</i>!&rsquo; the King exclaimed, turning to the jury, who instantly made a
		      memorandum of the fact.
		    </p>
		    <p>
		      &lsquo;I keep them to sell,&rsquo; the Hatter added as an explanation; &lsquo;I&rsquo;ve none of
		      my own. I&rsquo;m a hatter.&rsquo;
		    </p>
		    <p>
		      Here the Queen put on her spectacles, and began staring at the Hatter, who
		      turned pale and fidgeted.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; said the King; &lsquo;and don&rsquo;t be nervous, or I&rsquo;ll have
		      you executed on the spot.&rsquo;
		    </p>
		    <p>
		      This did not seem to encourage the witness at all: he kept shifting from
		      one foot to the other, looking uneasily at the Queen, and in his confusion
		      he bit a large piece out of his teacup instead of the bread-and-butter.
		    </p>
		    <p>
		      Just at this moment Alice felt a very curious sensation, which puzzled her
		      a good deal until she made out what it was: she was beginning to grow
		      larger again, and she thought at first she would get up and leave the
		      court; but on second thoughts she decided to remain where she was as long
		      as there was room for her.
		    </p>
		    <p>
		      &lsquo;I wish you wouldn&rsquo;t squeeze so.&rsquo; said the Dormouse, who was sitting next
		      to her. &lsquo;I can hardly breathe.&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t help it,&rsquo; said Alice very meekly: &lsquo;I&rsquo;m growing.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;ve no right to grow <i>here</i>,&rsquo; said the Dormouse.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t talk nonsense,&rsquo; said Alice more boldly: &lsquo;you know you&rsquo;re growing
		      too.&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, but <i>I</i> grow at a reasonable pace,&rsquo; said the Dormouse: &lsquo;not in that
		      ridiculous fashion.&rsquo; And he got up very sulkily and crossed over to the
		      other side of the court.
		    </p>
		    <p>
		      All this time the Queen had never left off staring at the Hatter, and,
		      just as the Dormouse crossed the court, she said to one of the officers of
		      the court, &lsquo;Bring me the list of the singers in the last concert!&rsquo; on
		      which the wretched Hatter trembled so, that he shook both his shoes off.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; the King repeated angrily, &lsquo;or I&rsquo;ll have you
		      executed, whether you&rsquo;re nervous or not.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m a poor man, your Majesty,&rsquo; the Hatter began, in a trembling voice, &lsquo;&mdash;and
		      I hadn&rsquo;t begun my tea&mdash;not above a week or so&mdash;and what with the
		      bread-and-butter getting so thin&mdash;and the twinkling of the tea&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;The twinkling of the <i>what</i>?&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;It <i>began</i> with the tea,&rsquo; the Hatter replied.
		    </p>
		    <p>
		      &lsquo;Of course twinkling begins with a T!&rsquo; said the King sharply. &lsquo;Do you take
		      me for a dunce? Go on!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m a poor man,&rsquo; the Hatter went on, &lsquo;and most things twinkled after that&mdash;only
		      the March Hare said&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t!&rsquo; the March Hare interrupted in a great hurry.
		    </p>
		    <p>
		      &lsquo;You did!&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;I deny it!&rsquo; said the March Hare.
		    </p>
		    <p>
		      &lsquo;He denies it,&rsquo; said the King: &lsquo;leave out that part.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, at any rate, the Dormouse said&mdash;&rsquo; the Hatter went on, looking
		      anxiously round to see if he would deny it too: but the Dormouse denied
		      nothing, being fast asleep.
		    </p>
		    <p>
		      &lsquo;After that,&rsquo; continued the Hatter, &lsquo;I cut some more bread-and-butter&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But what did the Dormouse say?&rsquo; one of the jury asked.
		    </p>
		    <p>
		      &lsquo;That I can&rsquo;t remember,&rsquo; said the Hatter.
		    </p>
		    <p>
		      &lsquo;You <i>must</i> remember,&rsquo; remarked the King, &lsquo;or I&rsquo;ll have you executed.&rsquo;
		    </p>
		    <p>
		      The miserable Hatter dropped his teacup and bread-and-butter, and went
		      down on one knee. &lsquo;I&rsquo;m a poor man, your Majesty,&rsquo; he began.
		    </p>
		    <p>
		      &lsquo;You&rsquo;re a <i>very</i> poor <i>speaker</i>,&rsquo; said the King.
		    </p>
		    <p>
		      Here one of the guinea-pigs cheered, and was immediately suppressed by the
		      officers of the court. (As that is rather a hard word, I will just explain
		      to you how it was done. They had a large canvas bag, which tied up at the
		      mouth with strings: into this they slipped the guinea-pig, head first, and
		      then sat upon it.)
		    </p>
		    <p>
		      &lsquo;I&rsquo;m glad I&rsquo;ve seen that done,&rsquo; thought Alice. &lsquo;I&rsquo;ve so often read in the
		      newspapers, at the end of trials, &ldquo;There was some attempts at applause,
		      which was immediately suppressed by the officers of the court,&rdquo; and I
		      never understood what it meant till now.&rsquo;
		    </p>
		    <p>
		      &lsquo;If that&rsquo;s all you know about it, you may stand down,&rsquo; continued the King.
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t go no lower,&rsquo; said the Hatter: &lsquo;I&rsquo;m on the floor, as it is.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you may <i>sit</i> down,&rsquo; the King replied.
		    </p>
		    <p>
		      Here the other guinea-pig cheered, and was suppressed.
		    </p>
		    <p>
		      &lsquo;Come, that finished the guinea-pigs!&rsquo; thought Alice. &lsquo;Now we shall get on
		      better.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;d rather finish my tea,&rsquo; said the Hatter, with an anxious look at the
		      Queen, who was reading the list of singers.
		    </p>
		    <p>
		      &lsquo;You may go,&rsquo; said the King, and the Hatter hurriedly left the court,
		      without even waiting to put his shoes on.
		    </p>
		    <p>
		      &lsquo;&mdash;and just take his head off outside,&rsquo; the Queen added to one of the
		      officers: but the Hatter was out of sight before the officer could get to
		      the door.
		    </p>
		    <p>
		      &lsquo;Call the next witness!&rsquo; said the King.
		    </p>
		    <p>
		      The next witness was the Duchess&rsquo;s cook. She carried the pepper-box in her
		      hand, and Alice guessed who it was, even before she got into the court, by
		      the way the people near the door began sneezing all at once.
		    </p>
		    <p>
		      &lsquo;Give your evidence,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Shan&rsquo;t,&rsquo; said the cook.
		    </p>
		    <p>
		      The King looked anxiously at the White Rabbit, who said in a low voice,
		      &lsquo;Your Majesty must cross-examine <i>this</i> witness.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, if I must, I must,&rsquo; the King said, with a melancholy air, and,
		      after folding his arms and frowning at the cook till his eyes were nearly
		      out of sight, he said in a deep voice, &lsquo;What are tarts made of?&rsquo;
		    </p>
		    <p>
		      &lsquo;Pepper, mostly,&rsquo; said the cook.
		    </p>
		    <p>
		      &lsquo;Treacle,&rsquo; said a sleepy voice behind her.
		    </p>
		    <p>
		      &lsquo;Collar that Dormouse,&rsquo; the Queen shrieked out. &lsquo;Behead that Dormouse!
		      Turn that Dormouse out of court! Suppress him! Pinch him! Off with his
		      whiskers!&rsquo;
		    </p>
		    <p>
		      For some minutes the whole court was in confusion, getting the Dormouse
		      turned out, and, by the time they had settled down again, the cook had
		      disappeared.
		    </p>
		    <p>
		      &lsquo;Never mind!&rsquo; said the King, with an air of great relief. &lsquo;Call the next
		      witness.&rsquo; And he added in an undertone to the Queen, &lsquo;Really, my dear, <i>you</i>
		      must cross-examine the next witness. It quite makes my forehead ache!&rsquo;
		    </p>
		    <p>
		      Alice watched the White Rabbit as he fumbled over the list, feeling very
		      curious to see what the next witness would be like, &lsquo;&mdash;for they
		      haven&rsquo;t got much evidence <i>yet</i>,&rsquo; she said to herself. Imagine her surprise,
		      when the White Rabbit read out, at the top of his shrill little voice, the
		      name &lsquo;Alice!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Alice’s Evidence",
			'number' => "Twelve",
			'order' => 12,
			'book_id' => DB::table('books')->where('title', "Alice's Adventures in Wonderland")->value('id'),
			'content' => "
			<p>
		      &lsquo;Here!&rsquo; cried Alice, quite forgetting in the flurry of the moment how
		      large she had grown in the last few minutes, and she jumped up in such a
		      hurry that she tipped over the jury-box with the edge of her skirt,
		      upsetting all the jurymen on to the heads of the crowd below, and there
		      they lay sprawling about, reminding her very much of a globe of goldfish
		      she had accidentally upset the week before.
		    </p>
		    <p>
		      &lsquo;Oh, I <i>beg</i> your pardon!&rsquo; she exclaimed in a tone of great dismay, and
		      began picking them up again as quickly as she could, for the accident of
		      the goldfish kept running in her head, and she had a vague sort of idea
		      that they must be collected at once and put back into the jury-box, or
		      they would die.
		    </p>
		    <p>
		      &lsquo;The trial cannot proceed,&rsquo; said the King in a very grave voice, &lsquo;until
		      all the jurymen are back in their proper places&mdash;<i>all</i>,&rsquo; he repeated
		      with great emphasis, looking hard at Alice as he said do.
		    </p>
		    <p>
		      Alice looked at the jury-box, and saw that, in her haste, she had put the
		      Lizard in head downwards, and the poor little thing was waving its tail
		      about in a melancholy way, being quite unable to move. She soon got it out
		      again, and put it right; &lsquo;not that it signifies much,&rsquo; she said to
		      herself; &lsquo;I should think it would be <i>quite</i> as much use in the trial one
		      way up as the other.&rsquo;
		    </p>
		    <p>
		      As soon as the jury had a little recovered from the shock of being upset,
		      and their slates and pencils had been found and handed back to them, they
		      set to work very diligently to write out a history of the accident, all
		      except the Lizard, who seemed too much overcome to do anything but sit
		      with its mouth open, gazing up into the roof of the court.
		    </p>
		    <p>
		      &lsquo;What do you know about this business?&rsquo; the King said to Alice.
		    </p>
		    <p>
		      &lsquo;Nothing,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Nothing <i>whatever</i>?&rsquo; persisted the King.
		    </p>
		    <p>
		      &lsquo;Nothing whatever,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s very important,&rsquo; the King said, turning to the jury. They were
		      just beginning to write this down on their slates, when the White Rabbit
		      interrupted: &lsquo;<i>Un</i>important, your Majesty means, of course,&rsquo; he said in a
		      very respectful tone, but frowning and making faces at him as he spoke.
		    </p>
		    <p>
		      &lsquo;<i>Un</i>important, of course, I meant,&rsquo; the King hastily said, and went on to
		      himself in an undertone,
		    </p>
		    <p>
		      &lsquo;important&mdash;unimportant&mdash;unimportant&mdash;important&mdash;&rsquo; as
		      if he were trying which word sounded best.
		    </p>
		    <p>
		      Some of the jury wrote it down &lsquo;important,&rsquo; and some &lsquo;unimportant.&rsquo; Alice
		      could see this, as she was near enough to look over their slates; &lsquo;but it
		      doesn&rsquo;t matter a bit,&rsquo; she thought to herself.
		    </p>
		    <p>
		      At this moment the King, who had been for some time busily writing in his
		      note-book, cackled out &lsquo;Silence!&rsquo; and read out from his book, &lsquo;Rule
		      Forty-two. <i>All persons more than a mile high to leave the court</i>.&rsquo;
		    </p>
		    <p>
		      Everybody looked at Alice.
		    </p>
		    <p>
		      &lsquo;<i>I&rsquo;m</i> not a mile high,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;You are,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Nearly two miles high,&rsquo; added the Queen.
		    </p>
		    <p>
		      &lsquo;Well, I shan&rsquo;t go, at any rate,&rsquo; said Alice: &lsquo;besides, that&rsquo;s not a
		      regular rule: you invented it just now.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the oldest rule in the book,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Then it ought to be Number One,&rsquo; said Alice.
		    </p>
		    <p>
		      The King turned pale, and shut his note-book hastily. &lsquo;Consider your
		      verdict,&rsquo; he said to the jury, in a low, trembling voice.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s more evidence to come yet, please your Majesty,&rsquo; said the White
		      Rabbit, jumping up in a great hurry; &lsquo;this paper has just been picked up.&rsquo;
		    </p>
		    <p>
		      &lsquo;What&rsquo;s in it?&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t opened it yet,&rsquo; said the White Rabbit, &lsquo;but it seems to be a
		      letter, written by the prisoner to&mdash;to somebody.&rsquo;
		    </p>
		    <p>
		      &lsquo;It must have been that,&rsquo; said the King, &lsquo;unless it was written to nobody,
		      which isn&rsquo;t usual, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Who is it directed to?&rsquo; said one of the jurymen.
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t directed at all,&rsquo; said the White Rabbit; &lsquo;in fact, there&rsquo;s
		      nothing written on the <i>outside</i>.&rsquo; He unfolded the paper as he spoke, and
		      added &lsquo;It isn&rsquo;t a letter, after all: it&rsquo;s a set of verses.&rsquo;
		    </p>
		    <p>
		      &lsquo;Are they in the prisoner&rsquo;s handwriting?&rsquo; asked another of the jurymen.
		    </p>
		    <p>
		      &lsquo;No, they&rsquo;re not,&rsquo; said the White Rabbit, &lsquo;and that&rsquo;s the queerest thing
		      about it.&rsquo; (The jury all looked puzzled.)
		    </p>
		    <p>
		      &lsquo;He must have imitated somebody else&rsquo;s hand,&rsquo; said the King. (The jury all
		      brightened up again.)
		    </p>
		    <p>
		      &lsquo;Please your Majesty,&rsquo; said the Knave, &lsquo;I didn&rsquo;t write it, and they can&rsquo;t
		      prove I did: there&rsquo;s no name signed at the end.&rsquo;
		    </p>
		    <p>
		      &lsquo;If you didn&rsquo;t sign it,&rsquo; said the King, &lsquo;that only makes the matter worse.
		      You <i>must</i> have meant some mischief, or else you&rsquo;d have signed your name
		      like an honest man.&rsquo;
		    </p>
		    <p>
		      There was a general clapping of hands at this: it was the first really
		      clever thing the King had said that day.
		    </p>
		    <p>
		      &lsquo;That <i>proves</i> his guilt,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;It proves nothing of the sort!&rsquo; said Alice. &lsquo;Why, you don&rsquo;t even know
		      what they&rsquo;re about!&rsquo;
		    </p>
		    <p>
		      &lsquo;Read them,&rsquo; said the King.
		    </p>
		    <p>
		      The White Rabbit put on his spectacles. &lsquo;Where shall I begin, please your
		      Majesty?&rsquo; he asked.
		    </p>
		    <p>
		      &lsquo;Begin at the beginning,&rsquo; the King said gravely, &lsquo;and go on till you come
		      to the end: then stop.&rsquo;
		    </p>
		    <p>
		      These were the verses the White Rabbit read:&mdash;
		    </p>
		    <p class='aiw-swim stanza'>
		   &lsquo;They told me you had been to her,
		    <br>
		    And mentioned me to him:
		    <br>
		   She gave me a good character,
		    <br>
		    But said I could not swim.
		    </p>
		    <p class='aiw-swim stanza'>
		   He sent them word I had not gone
		    <br>
		    (We know it to be true):
		    <br>
		   If she should push the matter on,
		    <br>
		    What would become of you?
		    </p>
		    <p class='aiw-swim stanza'>
		   I gave her one, they gave him two,
		    <br>
		    You gave us three or more;
		    <br>
		   They all returned from him to you,
		    <br>
		    Though they were mine before.
		    </p>
		    <p class='aiw-swim stanza'>
		   If I or she should chance to be
		    <br>
		    Involved in this affair,
		    <br>
		   He trusts to you to set them free,
		    <br>
		    Exactly as we were.
		    </p>
		    <p class='aiw-swim stanza'>
		   My notion was that you had been
		    <br>
		    (Before she had this fit)
		    <br>
		   An obstacle that came between
		    <br>
		    Him, and ourselves, and it.
		    </p>
		    <p class='aiw-swim stanza'>
		   Don&rsquo;t let him know she liked them best,
		    <br>
		    For this must ever be
		    <br>
		   A secret, kept from all the rest,
		    <br>
		    Between yourself and me.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the most important piece of evidence we&rsquo;ve heard yet,&rsquo; said the
		      King, rubbing his hands; &lsquo;so now let the jury&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;If any one of them can explain it,&rsquo; said Alice, (she had grown so large
		      in the last few minutes that she wasn&rsquo;t a bit afraid of interrupting him,)
		      &lsquo;I&rsquo;ll give him sixpence. <i>I</i> don&rsquo;t believe there&rsquo;s an atom of meaning
		      in it.&rsquo;
		    </p>
		    <p>
		      The jury all wrote down on their slates, &lsquo;<i>She</i> doesn&rsquo;t believe there&rsquo;s an
		      atom of meaning in it,&rsquo; but none of them attempted to explain the paper.
		    </p>
		    <p>
		      &lsquo;If there&rsquo;s no meaning in it,&rsquo; said the King, &lsquo;that saves a world of
		      trouble, you know, as we needn&rsquo;t try to find any. And yet I don&rsquo;t know,&rsquo;
		      he went on, spreading out the verses on his knee, and looking at them with
		      one eye; &lsquo;I seem to see some meaning in them, after all. &ldquo;&mdash;<i>said I
		      could not swim</i>&mdash;&rdquo; you can&rsquo;t swim, can you?&rsquo; he added, turning to the
		      Knave.
		    </p>
		    <p>
		      The Knave shook his head sadly. &lsquo;Do I look like it?&rsquo; he said. (Which he
		      certainly did <i>not</i>, being made entirely of cardboard.)
		    </p>
		    <p>
		      &lsquo;All right, so far,&rsquo; said the King, and he went on muttering over the
		      verses to himself: &lsquo;&ldquo;<i>We know it to be true</i>&mdash;&rdquo; that&rsquo;s the jury, of
		      course&mdash;&ldquo;<i>I gave her one, they gave him two</i>&mdash;&rdquo; why, that must be
		      what he did with the tarts, you know&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But, it goes on &ldquo;<i>they all returned from him to you</i>,&rdquo;&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Why, there they are!&rsquo; said the King triumphantly, pointing to the tarts
		      on the table. &lsquo;Nothing can be clearer than <i>that</i>. Then again&mdash;&ldquo;<i>before
		      she had this fit</i>&mdash;&rdquo; you never had fits, my dear, I think?&rsquo; he said to
		      the Queen.
		    </p>
		    <p>
		      &lsquo;Never!&rsquo; said the Queen furiously, throwing an inkstand at the Lizard as
		      she spoke. (The unfortunate little Bill had left off writing on his slate
		      with one finger, as he found it made no mark; but he now hastily began
		      again, using the ink, that was trickling down his face, as long as it
		      lasted.)
		    </p>
		    <p>
		      &lsquo;Then the words don&rsquo;t <i>fit</i> you,&rsquo; said the King, looking round the court
		      with a smile. There was a dead silence.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a pun!&rsquo; the King added in an offended tone, and everybody laughed,
		      &lsquo;Let the jury consider their verdict,&rsquo; the King said, for about the
		      twentieth time that day.
		    </p>
		    <p>
		      &lsquo;No, no!&rsquo; said the Queen. &lsquo;Sentence first&mdash;verdict afterwards.&rsquo;
		    </p>
		    <p>
		      &lsquo;Stuff and nonsense!&rsquo; said Alice loudly. &lsquo;The idea of having the sentence
		      first!&rsquo;
		    </p>
		    <p>
		      &lsquo;Hold your tongue!&rsquo; said the Queen, turning purple.
		    </p>
		    <p>
		      &lsquo;I won&rsquo;t!&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Off with her head!&rsquo; the Queen shouted at the top of her voice. Nobody
		      moved.
		    </p>
		    <p>
		      &lsquo;Who cares for you?&rsquo; said Alice, (she had grown to her full size by this
		      time.) &lsquo;You&rsquo;re nothing but a pack of cards!&rsquo;
		    </p>
		    <p>
		      At this the whole pack rose up into the air, and came flying down upon
		      her: she gave a little scream, half of fright and half of anger, and tried
		      to beat them off, and found herself lying on the bank, with her head in
		      the lap of her sister, who was gently brushing away some dead leaves that
		      had fluttered down from the trees upon her face.
		    </p>
		    <p>
		      &lsquo;Wake up, Alice dear!&rsquo; said her sister; &lsquo;Why, what a long sleep you&rsquo;ve
		      had!&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, I&rsquo;ve had such a curious dream!&rsquo; said Alice, and she told her sister,
		      as well as she could remember them, all these strange Adventures of hers
		      that you have just been reading about; and when she had finished, her
		      sister kissed her, and said, &lsquo;It <i>was</i> a curious dream, dear, certainly: but
		      now run in to your tea; it&rsquo;s getting late.&rsquo; So Alice got up and ran off,
		      thinking while she ran, as well she might, what a wonderful dream it had
		      been.
		    </p>
		    <p>
		      But her sister sat still just as she left her, leaning her head on her
		      hand, watching the setting sun, and thinking of little Alice and all her
		      wonderful Adventures, till she too began dreaming after a fashion, and
		      this was her dream:&mdash;
		    </p>
		    <p>
		      First, she dreamed of little Alice herself, and once again the tiny hands
		      were clasped upon her knee, and the bright eager eyes were looking up into
		      hers&mdash;she could hear the very tones of her voice, and see that queer
		      little toss of her head to keep back the wandering hair that <i>would</i> always
		      get into her eyes&mdash;and still as she listened, or seemed to listen,
		      the whole place around her became alive with the strange creatures of her
		      little sister&rsquo;s dream.
		    </p>
		    <p>
		      The long grass rustled at her feet as the White Rabbit hurried by&mdash;the
		      frightened Mouse splashed his way through the neighbouring pool&mdash;she
		      could hear the rattle of the teacups as the March Hare and his friends
		      shared their never-ending meal, and the shrill voice of the Queen ordering
		      off her unfortunate guests to execution&mdash;once more the pig-baby was
		      sneezing on the Duchess&rsquo;s knee, while plates and dishes crashed around it&mdash;once
		      more the shriek of the Gryphon, the squeaking of the Lizard&rsquo;s
		      slate-pencil, and the choking of the suppressed guinea-pigs, filled the
		      air, mixed up with the distant sobs of the miserable Mock Turtle.
		    </p>
		    <p>
		      So she sat on, with closed eyes, and half believed herself in Wonderland,
		      though she knew she had but to open them again, and all would change to
		      dull reality&mdash;the grass would be only rustling in the wind, and the
		      pool rippling to the waving of the reeds&mdash;the rattling teacups would
		      change to tinkling sheep-bells, and the Queen&rsquo;s shrill cries to the voice
		      of the shepherd boy&mdash;and the sneeze of the baby, the shriek of the
		      Gryphon, and all the other queer noises, would change (she knew) to the
		      confused clamour of the busy farm-yard&mdash;while the lowing of the
		      cattle in the distance would take the place of the Mock Turtle&rsquo;s heavy
		      sobs.
		    </p>
		    <p>
		      Lastly, she pictured to herself how this same little sister of hers would,
		      in the after-time, be herself a grown woman; and how she would keep,
		      through all her riper years, the simple and loving heart of her childhood:
		      and how she would gather about her other little children, and make <i>their</i>
		      eyes bright and eager with many a strange tale, perhaps even with the
		      dream of Wonderland of long ago: and how she would feel with all their
		      simple sorrows, and find a pleasure in all their simple joys, remembering
		      her own child-life, and the happy summer days.
		    </p>
		    <p class='aiw-end'>
		              THE END
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Looking-Glass House",
			'number' => "One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      One thing was certain, that the <i>white</i> kitten had had nothing to do with
		      it:&mdash;it was the black kitten&rsquo;s fault entirely. For the white kitten
		      had been having its face washed by the old cat for the last quarter of an
		      hour (and bearing it pretty well, considering); so you see that it
		      <i>couldn&rsquo;t</i> have had any hand in the mischief.
		    </p>
		    <p>
		      The way Dinah washed her children&rsquo;s faces was this: first she held the
		      poor thing down by its ear with one paw, and then with the other paw she
		      rubbed its face all over, the wrong way, beginning at the nose: and just
		      now, as I said, she was hard at work on the white kitten, which was lying
		      quite still and trying to purr&mdash;no doubt feeling that it was all
		      meant for its good.
		    </p>
		    <p>
		      But the black kitten had been finished with earlier in the afternoon, and
		      so, while Alice was sitting curled up in a corner of the great arm-chair,
		      half talking to herself and half asleep, the kitten had been having a
		      grand game of romps with the ball of worsted Alice had been trying to wind
		      up, and had been rolling it up and down till it had all come undone again;
		      and there it was, spread over the hearth-rug, all knots and tangles, with
		      the kitten running after its own tail in the middle.
		    </p>
		    <p>
		      &lsquo;Oh, you wicked little thing!&rsquo; cried Alice, catching up the kitten, and
		      giving it a little kiss to make it understand that it was in disgrace.
		      &lsquo;Really, Dinah ought to have taught you better manners! You <i>ought</i>, Dinah,
		      you know you ought!&rsquo; she added, looking reproachfully at the old cat, and
		      speaking in as cross a voice as she could manage&mdash;and then she
		      scrambled back into the arm-chair, taking the kitten and the worsted with
		      her, and began winding up the ball again. But she didn&rsquo;t get on very fast,
		      as she was talking all the time, sometimes to the kitten, and sometimes to
		      herself. Kitty sat very demurely on her knee, pretending to watch the
		      progress of the winding, and now and then putting out one paw and gently
		      touching the ball, as if it would be glad to help, if it might.
		    </p>
		    <p>
		      &lsquo;Do you know what to-morrow is, Kitty?&rsquo; Alice began. &lsquo;You&rsquo;d have guessed
		      if you&rsquo;d been up in the window with me&mdash;only Dinah was making you
		      tidy, so you couldn&rsquo;t. I was watching the boys getting in sticks for the
		      bonfire&mdash;and it wants plenty of sticks, Kitty! Only it got so cold,
		      and it snowed so, they had to leave off. Never mind, Kitty, we&rsquo;ll go and
		      see the bonfire to-morrow.&rsquo; Here Alice wound two or three turns of the
		      worsted round the kitten&rsquo;s neck, just to see how it would look: this led
		      to a scramble, in which the ball rolled down upon the floor, and yards and
		      yards of it got unwound again.
		    </p>
		    <p>
		      &lsquo;Do you know, I was so angry, Kitty,&rsquo; Alice went on as soon as they were
		      comfortably settled again, &lsquo;when I saw all the mischief you had been
		      doing, I was very nearly opening the window, and putting you out into the
		      snow! And you&rsquo;d have deserved it, you little mischievous darling! What
		      have you got to say for yourself? Now don&rsquo;t interrupt me!&rsquo; she went on,
		      holding up one finger. &lsquo;I&rsquo;m going to tell you all your faults. Number one:
		      you squeaked twice while Dinah was washing your face this morning. Now you
		      can&rsquo;t deny it, Kitty: I heard you! What&rsquo;s that you say?&rsquo; (pretending that
		      the kitten was speaking.) &lsquo;Her paw went into your eye? Well, that&rsquo;s <i>your</i>
		      fault, for keeping your eyes open&mdash;if you&rsquo;d shut them tight up, it
		      wouldn&rsquo;t have happened. Now don&rsquo;t make any more excuses, but listen!
		      Number two: you pulled Snowdrop away by the tail just as I had put down
		      the saucer of milk before her! What, you were thirsty, were you? How do
		      you know she wasn&rsquo;t thirsty too? Now for number three: you unwound every
		      bit of the worsted while I wasn&rsquo;t looking!
		    </p>
		    <p>
		      &lsquo;That&rsquo;s three faults, Kitty, and you&rsquo;ve not been punished for any of them
		      yet. You know I&rsquo;m saving up all your punishments for Wednesday week&mdash;Suppose
		      they had saved up all <i>my</i> punishments!&rsquo; she went on, talking more to
		      herself than the kitten. &lsquo;What <i>would</i> they do at the end of a year? I
		      should be sent to prison, I suppose, when the day came. Or&mdash;let me
		      see&mdash;suppose each punishment was to be going without a dinner: then,
		      when the miserable day came, I should have to go without fifty dinners at
		      once! Well, I shouldn&rsquo;t mind <i>that</i> much! I&rsquo;d far rather go without them
		      than eat them!
		    </p>
		    <p>
		      &lsquo;Do you hear the snow against the window-panes, Kitty? How nice and soft
		      it sounds! Just as if some one was kissing the window all over outside. I
		      wonder if the snow <i>loves</i> the trees and fields, that it kisses them so
		      gently? And then it covers them up snug, you know, with a white quilt; and
		      perhaps it says, &ldquo;Go to sleep, darlings, till the summer comes again.&rdquo; And
		      when they wake up in the summer, Kitty, they dress themselves all in
		      green, and dance about&mdash;whenever the wind blows&mdash;oh, that&rsquo;s very
		      pretty!&rsquo; cried Alice, dropping the ball of worsted to clap her hands. &lsquo;And
		      I do so <i>wish</i> it was true! I&rsquo;m sure the woods look sleepy in the autumn,
		      when the leaves are getting brown.
		    </p>
		    <p>
		      &lsquo;Kitty, can you play chess? Now, don&rsquo;t smile, my dear, I&rsquo;m asking it
		      seriously. Because, when we were playing just now, you watched just as if
		      you understood it: and when I said &ldquo;Check!&rdquo; you purred! Well, it <i>was</i> a
		      nice check, Kitty, and really I might have won, if it hadn&rsquo;t been for that
		      nasty Knight, that came wiggling down among my pieces. Kitty, dear, let&rsquo;s
		      pretend&mdash;&rsquo; And here I wish I could tell you half the things Alice
		      used to say, beginning with her favourite phrase &lsquo;Let&rsquo;s pretend.&rsquo; She had
		      had quite a long argument with her sister only the day before&mdash;all
		      because Alice had begun with &lsquo;Let&rsquo;s pretend we&rsquo;re kings and queens;&rsquo; and
		      her sister, who liked being very exact, had argued that they couldn&rsquo;t,
		      because there were only two of them, and Alice had been reduced at last to
		      say, &lsquo;Well, <i>you</i> can be one of them then, and <i>I&rsquo;ll</i> be all the rest.&rsquo; And
		      once she had really frightened her old nurse by shouting suddenly in her
		      ear, &lsquo;Nurse! Do let&rsquo;s pretend that I&rsquo;m a hungry hyaena, and you&rsquo;re a
		      bone.&rsquo;
		    </p>
		    <p>
		      But this is taking us away from Alice&rsquo;s speech to the kitten. &lsquo;Let&rsquo;s
		      pretend that you&rsquo;re the Red Queen, Kitty! Do you know, I think if you sat
		      up and folded your arms, you&rsquo;d look exactly like her. Now do try, there&rsquo;s
		      a dear!&rsquo; And Alice got the Red Queen off the table, and set it up before
		      the kitten as a model for it to imitate: however, the thing didn&rsquo;t
		      succeed, principally, Alice said, because the kitten wouldn&rsquo;t fold its
		      arms properly. So, to punish it, she held it up to the Looking-glass, that
		      it might see how sulky it was&mdash;&lsquo;and if you&rsquo;re not good directly,&rsquo; she
		      added, &lsquo;I&rsquo;ll put you through into Looking-glass House. How would you like
		      <i>that</i>?&rsquo;
		    </p>
		    <p>
		      &lsquo;Now, if you&rsquo;ll only attend, Kitty, and not talk so much, I&rsquo;ll tell you
		      all my ideas about Looking-glass House. First, there&rsquo;s the room you can
		      see through the glass&mdash;that&rsquo;s just the same as our drawing room, only
		      the things go the other way. I can see all of it when I get upon a chair&mdash;all
		      but the bit behind the fireplace. Oh! I do so wish I could see <i>that</i> bit! I
		      want so much to know whether they&rsquo;ve a fire in the winter: you never <i>can</i>
		      tell, you know, unless our fire smokes, and then smoke comes up in that
		      room too&mdash;but that may be only pretence, just to make it look as if
		      they had a fire. Well then, the books are something like our books, only
		      the words go the wrong way; I know that, because I&rsquo;ve held up one of our
		      books to the glass, and then they hold up one in the other room.
		    </p>
		    <p>
		      &lsquo;How would you like to live in Looking-glass House, Kitty? I wonder if
		      they&rsquo;d give you milk in there? Perhaps Looking-glass milk isn&rsquo;t good to
		      drink&mdash;But oh, Kitty! now we come to the passage. You can just see a
		      little <i>peep</i> of the passage in Looking-glass House, if you leave the door
		      of our drawing-room wide open: and it&rsquo;s very like our passage as far as
		      you can see, only you know it may be quite different on beyond. Oh, Kitty!
		      how nice it would be if we could only get through into Looking-glass
		      House! I&rsquo;m sure it&rsquo;s got, oh! such beautiful things in it! Let&rsquo;s pretend
		      there&rsquo;s a way of getting through into it, somehow, Kitty. Let&rsquo;s pretend
		      the glass has got all soft like gauze, so that we can get through. Why,
		      it&rsquo;s turning into a sort of mist now, I declare! It&rsquo;ll be easy enough to
		      get through&mdash;&rsquo; She was up on the chimney-piece while she said this,
		      though she hardly knew how she had got there. And certainly the glass <i>was</i>
		      beginning to melt away, just like a bright silvery mist.
		    </p>
		    <p>
		      In another moment Alice was through the glass, and had jumped lightly down
		      into the Looking-glass room. The very first thing she did was to look
		      whether there was a fire in the fireplace, and she was quite pleased to
		      find that there was a real one, blazing away as brightly as the one she
		      had left behind. &lsquo;So I shall be as warm here as I was in the old room,&rsquo;
		      thought Alice: &lsquo;warmer, in fact, because there&rsquo;ll be no one here to scold
		      me away from the fire. Oh, what fun it&rsquo;ll be, when they see me through the
		      glass in here, and can&rsquo;t get at me!&rsquo;
		    </p>
		    <p>
		      Then she began looking about, and noticed that what could be seen from the
		      old room was quite common and uninteresting, but that all the rest was as
		      different as possible. For instance, the pictures on the wall next the
		      fire seemed to be all alive, and the very clock on the chimney-piece (you
		      know you can only see the back of it in the Looking-glass) had got the
		      face of a little old man, and grinned at her.
		    </p>
		    <p>
		      &lsquo;They don&rsquo;t keep this room so tidy as the other,&rsquo; Alice thought to
		      herself, as she noticed several of the chessmen down in the hearth among
		      the cinders: but in another moment, with a little &lsquo;Oh!&rsquo; of surprise, she
		      was down on her hands and knees watching them. The chessmen were walking
		      about, two and two!
		    </p>
		    <p>
		      &lsquo;Here are the Red King and the Red Queen,&rsquo; Alice said (in a whisper, for
		      fear of frightening them), &lsquo;and there are the White King and the White
		      Queen sitting on the edge of the shovel&mdash;and here are two castles
		      walking arm in arm&mdash;I don&rsquo;t think they can hear me,&rsquo; she went on, as
		      she put her head closer down, &lsquo;and I&rsquo;m nearly sure they can&rsquo;t see me. I
		      feel somehow as if I were invisible&mdash;&rsquo;
		    </p>
		    <p>
		      Here something began squeaking on the table behind Alice, and made her
		      turn her head just in time to see one of the White Pawns roll over and
		      begin kicking: she watched it with great curiosity to see what would
		      happen next.
		    </p>
		    <p>
		      &lsquo;It is the voice of my child!&rsquo; the White Queen cried out as she rushed
		      past the King, so violently that she knocked him over among the cinders.
		      &lsquo;My precious Lily! My imperial kitten!&rsquo; and she began scrambling wildly up
		      the side of the fender.
		    </p>
		    <p>
		      &lsquo;Imperial fiddlestick!&rsquo; said the King, rubbing his nose, which had been
		      hurt by the fall. He had a right to be a <i>little</i> annoyed with the Queen,
		      for he was covered with ashes from head to foot.
		    </p>
		    <p>
		      Alice was very anxious to be of use, and, as the poor little Lily was
		      nearly screaming herself into a fit, she hastily picked up the Queen and
		      set her on the table by the side of her noisy little daughter.
		    </p>
		    <p>
		      The Queen gasped, and sat down: the rapid journey through the air had
		      quite taken away her breath and for a minute or two she could do nothing
		      but hug the little Lily in silence. As soon as she had recovered her
		      breath a little, she called out to the White King, who was sitting sulkily
		      among the ashes, &lsquo;Mind the volcano!&rsquo;
		    </p>
		    <p>
		      &lsquo;What volcano?&rsquo; said the King, looking up anxiously into the fire, as if
		      he thought that was the most likely place to find one.
		    </p>
		    <p>
		      &lsquo;Blew&mdash;me&mdash;up,&rsquo; panted the Queen, who was still a little out of
		      breath. &lsquo;Mind you come up&mdash;the regular way&mdash;don&rsquo;t get blown up!&rsquo;
		    </p>
		    <p>
		      Alice watched the White King as he slowly struggled up from bar to bar,
		      till at last she said, &lsquo;Why, you&rsquo;ll be hours and hours getting to the
		      table, at that rate. I&rsquo;d far better help you, hadn&rsquo;t I?&rsquo; But the King took
		      no notice of the question: it was quite clear that he could neither hear
		      her nor see her.
		    </p>
		    <p>
		      So Alice picked him up very gently, and lifted him across more slowly than
		      she had lifted the Queen, that she mightn&rsquo;t take his breath away: but,
		      before she put him on the table, she thought she might as well dust him a
		      little, he was so covered with ashes.
		    </p>
		    <p>
		      She said afterwards that she had never seen in all her life such a face as
		      the King made, when he found himself held in the air by an invisible hand,
		      and being dusted: he was far too much astonished to cry out, but his eyes
		      and his mouth went on getting larger and larger, and rounder and rounder,
		      till her hand shook so with laughing that she nearly let him drop upon the
		      floor.
		    </p>
		    <p>
		      &lsquo;Oh! <i>please</i> don&rsquo;t make such faces, my dear!&rsquo; she cried out, quite
		      forgetting that the King couldn&rsquo;t hear her. &lsquo;You make me laugh so that I
		      can hardly hold you! And don&rsquo;t keep your mouth so wide open! All the ashes
		      will get into it&mdash;there, now I think you&rsquo;re tidy enough!&rsquo; she added,
		      as she smoothed his hair, and set him upon the table near the Queen.
		    </p>
		    <p>
		      The King immediately fell flat on his back, and lay perfectly still: and
		      Alice was a little alarmed at what she had done, and went round the room
		      to see if she could find any water to throw over him. However, she could
		      find nothing but a bottle of ink, and when she got back with it she found
		      he had recovered, and he and the Queen were talking together in a
		      frightened whisper&mdash;so low, that Alice could hardly hear what they
		      said.
		    </p>
		    <p>
		      The King was saying, &lsquo;I assure, you my dear, I turned cold to the very
		      ends of my whiskers!&rsquo;
		    </p>
		    <p>
		      To which the Queen replied, &lsquo;You haven&rsquo;t got any whiskers.&rsquo;
		    </p>
		    <p>
		      &lsquo;The horror of that moment,&rsquo; the King went on, &lsquo;I shall never, <i>never</i>
		      forget!&rsquo;
		    </p>
		    <p>
		      &lsquo;You will, though,&rsquo; the Queen said, &lsquo;if you don&rsquo;t make a memorandum of
		      it.&rsquo;
		    </p>
		    <p>
		      Alice looked on with great interest as the King took an enormous
		      memorandum-book out of his pocket, and began writing. A sudden thought
		      struck her, and she took hold of the end of the pencil, which came some
		      way over his shoulder, and began writing for him.
		    </p>
		    <p>
		      The poor King looked puzzled and unhappy, and struggled with the pencil
		      for some time without saying anything; but Alice was too strong for him,
		      and at last he panted out, &lsquo;My dear! I really <i>must</i> get a thinner pencil. I
		      can&rsquo;t manage this one a bit; it writes all manner of things that I don&rsquo;t
		      intend&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What manner of things?&rsquo; said the Queen, looking over the book (in which
		      Alice had put &lsquo;<i>The White Knight is sliding down the poker. He balances
		      very badly</i>&rsquo;) &lsquo;That&rsquo;s not a memorandum of <i>your</i> feelings!&rsquo;
		    </p>
		    <p>
		      There was a book lying near Alice on the table, and while she sat watching
		      the White King (for she was still a little anxious about him, and had the
		      ink all ready to throw over him, in case he fainted again), she turned
		      over the leaves, to find some part that she could read, &lsquo;&mdash;for it&rsquo;s
		      all in some language I don&rsquo;t know,&rsquo; she said to herself.
		    </p>
		    <p>
		      It was like this.
		    </p>
		    <p class='tlg-ykcowrebbaj stanza'>
		             YKCOWREBBAJ
		    </p>
		    <p class='tlg-ykcowrebbaj stanza'>
		     sevot yhtils eht dna,gillirb sawT&rsquo;
		    <br>
		      ebaw eht ni elbmig dna eryg diD
		    <br>
		        ,sevogorob eht erew ysmim llA
		    <br>
		       .ebargtuo shtar emom eht dnA
		    <br>
		    </p>
		    <p>
		      She puzzled over this for some time, but at last a bright thought struck
		      her. &lsquo;Why, it&rsquo;s a Looking-glass book, of course! And if I hold it up to a
		      glass, the words will all go the right way again.&rsquo;
		    </p>
		    <p>
		      This was the poem that Alice read.
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		             JABBERWOCKY
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     &lsquo;Twas brillig, and the slithy toves
		    <br>
		      Did gyre and gimble in the wabe;
		    <br>
		     All mimsy were the borogoves,
		    <br>
		      And the mome raths outgrabe.
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     &lsquo;Beware the Jabberwock, my son!
		    <br>
		      The jaws that bite, the claws that catch!
		    <br>
		     Beware the Jubjub bird, and shun
		    <br>
		      The frumious Bandersnatch!&rsquo;
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     He took his vorpal sword in hand:
		    <br>
		      Long time the manxome foe he sought&mdash;
		    <br>
		     So rested he by the Tumtum tree,
		    <br>
		      And stood awhile in thought.
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     And as in uffish thought he stood,
		    <br>
		      The Jabberwock, with eyes of flame,
		    <br>
		     Came whiffling through the tulgey wood,
		    <br>
		      And burbled as it came!
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     One, two! One, two! And through and through
		    <br>
		      The vorpal blade went snicker-snack!
		    <br>
		     He left it dead, and with its head
		    <br>
		      He went galumphing back.
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     &lsquo;And hast thou slain the Jabberwock?
		    <br>
		      Come to my arms, my beamish boy!
		    <br>
		     O frabjous day! Callooh! Callay!&rsquo;
		    <br>
		      He chortled in his joy.
		    </p>
		    <p class='tlg-jabberwocky stanza'>
		     &lsquo;Twas brillig, and the slithy toves
		    <br>
		      Did gyre and gimble in the wabe;
		    <br>
		     All mimsy were the borogoves,
		    <br>
		      And the mome raths outgrabe.
		    </p>
		    <p>
		      &lsquo;It seems very pretty,&rsquo; she said when she had finished it, &lsquo;but it&rsquo;s
		      <i>rather</i> hard to understand!&rsquo; (You see she didn&rsquo;t like to confess, ever to
		      herself, that she couldn&rsquo;t make it out at all.) &lsquo;Somehow it seems to fill
		      my head with ideas&mdash;only I don&rsquo;t exactly know what they are! However,
		      <i>somebody</i> killed <i>something</i>: that&rsquo;s clear, at any rate&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But oh!&rsquo; thought Alice, suddenly jumping up, &lsquo;if I don&rsquo;t make haste I
		      shall have to go back through the Looking-glass, before I&rsquo;ve seen what the
		      rest of the house is like! Let&rsquo;s have a look at the garden first!&rsquo; She was
		      out of the room in a moment, and ran down stairs&mdash;or, at least, it
		      wasn&rsquo;t exactly running, but a new invention of hers for getting down
		      stairs quickly and easily, as Alice said to herself. She just kept the
		      tips of her fingers on the hand-rail, and floated gently down without even
		      touching the stairs with her feet; then she floated on through the hall,
		      and would have gone straight out at the door in the same way, if she
		      hadn&rsquo;t caught hold of the door-post. She was getting a little giddy with
		      so much floating in the air, and was rather glad to find herself walking
		      again in the natural way.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Garden of Live Flowers",
			'number' => "Two",
			'order' => 2,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      &lsquo;I should see the garden far better,&rsquo; said Alice to herself, &lsquo;if I could
		      get to the top of that hill: and here&rsquo;s a path that leads straight to it&mdash;at
		      least, no, it doesn&rsquo;t do that&mdash;&rsquo; (after going a few yards along the
		      path, and turning several sharp corners), &lsquo;but I suppose it will at last.
		      But how curiously it twists! It&rsquo;s more like a corkscrew than a path! Well,
		      <i>this</i> turn goes to the hill, I suppose&mdash;no, it doesn&rsquo;t! This goes
		      straight back to the house! Well then, I&rsquo;ll try it the other way.&rsquo;
		    </p>
		    <p>
		      And so she did: wandering up and down, and trying turn after turn, but
		      always coming back to the house, do what she would. Indeed, once, when she
		      turned a corner rather more quickly than usual, she ran against it before
		      she could stop herself.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s no use talking about it,&rsquo; Alice said, looking up at the house and
		      pretending it was arguing with her. &lsquo;I&rsquo;m <i>not</i> going in again yet. I know I
		      should have to get through the Looking-glass again&mdash;back into the old
		      room&mdash;and there&rsquo;d be an end of all my adventures!&rsquo;
		    </p>
		    <p>
		      So, resolutely turning her back upon the house, she set out once more down
		      the path, determined to keep straight on till she got to the hill. For a
		      few minutes all went on well, and she was just saying, &lsquo;I really <i>shall</i> do
		      it this time&mdash;&rsquo; when the path gave a sudden twist and shook itself
		      (as she described it afterwards), and the next moment she found herself
		      actually walking in at the door.
		    </p>
		    <p>
		      &lsquo;Oh, it&rsquo;s too bad!&rsquo; she cried. &lsquo;I never saw such a house for getting in
		      the way! Never!&rsquo;
		    </p>
		    <p>
		      However, there was the hill full in sight, so there was nothing to be done
		      but start again. This time she came upon a large flower-bed, with a border
		      of daisies, and a willow-tree growing in the middle.
		    </p>
		    <p>
		      &lsquo;O Tiger-lily,&rsquo; said Alice, addressing herself to one that was waving
		      gracefully about in the wind, &lsquo;I <i>wish</i> you could talk!&rsquo;
		    </p>
		    <p>
		      &lsquo;We <i>can</i> talk,&rsquo; said the Tiger-lily: &lsquo;when there&rsquo;s anybody worth talking
		      to.&rsquo;
		    </p>
		    <p>
		      Alice was so astonished that she could not speak for a minute: it quite
		      seemed to take her breath away. At length, as the Tiger-lily only went on
		      waving about, she spoke again, in a timid voice&mdash;almost in a whisper.
		      &lsquo;And can <i>all</i> the flowers talk?&rsquo;
		    </p>
		    <p>
		      &lsquo;As well as <i>you</i> can,&rsquo; said the Tiger-lily. &lsquo;And a great deal louder.&rsquo;
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t manners for us to begin, you know,&rsquo; said the Rose, &lsquo;and I really
		      was wondering when you&rsquo;d speak! Said I to myself, &ldquo;Her face has got <i>some</i>
		      sense in it, though it&rsquo;s not a clever one!&rdquo; Still, you&rsquo;re the right
		      colour, and that goes a long way.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t care about the colour,&rsquo; the Tiger-lily remarked. &lsquo;If only her
		      petals curled up a little more, she&rsquo;d be all right.&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t like being criticised, so she began asking questions. &lsquo;Aren&rsquo;t
		      you sometimes frightened at being planted out here, with nobody to take
		      care of you?&rsquo;
		    </p>
		    <p>
		      &lsquo;There&rsquo;s the tree in the middle,&rsquo; said the Rose: &lsquo;what else is it good
		      for?&rsquo;
		    </p>
		    <p>
		      &lsquo;But what could it do, if any danger came?&rsquo; Alice asked.
		    </p>
		    <p>
		      &lsquo;It says &ldquo;Bough-wough!&rdquo;&rsquo; cried a Daisy: &lsquo;that&rsquo;s why its branches are
		      called boughs!&rsquo;
		    </p>
		    <p>
		      &lsquo;Didn&rsquo;t you know <i>that</i>?&rsquo; cried another Daisy, and here they all began
		      shouting together, till the air seemed quite full of little shrill voices.
		      &lsquo;Silence, every one of you!&rsquo; cried the Tiger-lily, waving itself
		      passionately from side to side, and trembling with excitement. &lsquo;They know
		      I can&rsquo;t get at them!&rsquo; it panted, bending its quivering head towards Alice,
		      &lsquo;or they wouldn&rsquo;t dare to do it!&rsquo;
		    </p>
		    <p>
		      &lsquo;Never mind!&rsquo; Alice said in a soothing tone, and stooping down to the
		      daisies, who were just beginning again, she whispered, &lsquo;If you don&rsquo;t hold
		      your tongues, I&rsquo;ll pick you!&rsquo;
		    </p>
		    <p>
		      There was silence in a moment, and several of the pink daisies turned
		      white.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s right!&rsquo; said the Tiger-lily. &lsquo;The daisies are worst of all. When
		      one speaks, they all begin together, and it&rsquo;s enough to make one wither to
		      hear the way they go on!&rsquo;
		    </p>
		    <p>
		      &lsquo;How is it you can all talk so nicely?&rsquo; Alice said, hoping to get it into
		      a better temper by a compliment. &lsquo;I&rsquo;ve been in many gardens before, but
		      none of the flowers could talk.&rsquo;
		    </p>
		    <p>
		      &lsquo;Put your hand down, and feel the ground,&rsquo; said the Tiger-lily. &lsquo;Then
		      you&rsquo;ll know why.&rsquo;
		    </p>
		    <p>
		      Alice did so. &lsquo;It&rsquo;s very hard,&rsquo; she said, &lsquo;but I don&rsquo;t see what that has
		      to do with it.&rsquo;
		    </p>
		    <p>
		      &lsquo;In most gardens,&rsquo; the Tiger-lily said, &lsquo;lsquo;they make the beds too soft&mdash;so
		      that the flowers are always asleep.&rsquo;
		    </p>
		    <p>
		      This sounded a very good reason, and Alice was quite pleased to know it.
		      &lsquo;I never thought of that before!&rsquo; she said.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s <i>my</i> opinion that you never think <i>at all</i>,&rsquo; the Rose said in a rather
		      severe tone.
		    </p>
		    <p>
		      &lsquo;I never saw anybody that looked stupider,&rsquo; a Violet said, so suddenly,
		      that Alice quite jumped; for it hadn&rsquo;t spoken before.
		    </p>
		    <p>
		      &lsquo;Hold <i>your</i> tongue!&rsquo; cried the Tiger-lily. &lsquo;As if <i>you</i> ever saw anybody! You
		      keep your head under the leaves, and snore away there, till you know no
		      more what&rsquo;s going on in the world, than if you were a bud!&rsquo;
		    </p>
		    <p>
		      &lsquo;Are there any more people in the garden besides me?&rsquo; Alice said, not
		      choosing to notice the Rose&rsquo;s last remark.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s one other flower in the garden that can move about like you,&rsquo;
		      said the Rose. &lsquo;I wonder how you do it&mdash;&rsquo; (&lsquo;You&rsquo;re always wondering,&rsquo;
		      said the Tiger-lily), &lsquo;but she&rsquo;s more bushy than you are.&rsquo;
		    </p>
		    <p>
		      &lsquo;Is she like me?&rsquo; Alice asked eagerly, for the thought crossed her mind,
		      &lsquo;There&rsquo;s another little girl in the garden, somewhere!&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, she has the same awkward shape as you,&rsquo; the Rose said, &lsquo;but she&rsquo;s
		      redder&mdash;and her petals are shorter, I think.&rsquo;
		    </p>
		    <p>
		      &lsquo;Her petals are done up close, almost like a dahlia,&rsquo; the Tiger-lily
		      interrupted: &lsquo;not tumbled about anyhow, like yours.&rsquo;
		    </p>
		    <p>
		      &lsquo;But that&rsquo;s not <i>your</i> fault,&rsquo; the Rose added kindly: &lsquo;you&rsquo;re beginning to
		      fade, you know&mdash;and then one can&rsquo;t help one&rsquo;s petals getting a little
		      untidy.&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t like this idea at all: so, to change the subject, she asked
		      &lsquo;Does she ever come out here?&rsquo;
		    </p>
		    <p>
		      &lsquo;I daresay you&rsquo;ll see her soon,&rsquo; said the Rose. &lsquo;She&rsquo;s one of the thorny
		      kind.&rsquo;
		    </p>
		    <p>
		      &lsquo;Where does she wear the thorns?&rsquo; Alice asked with some curiosity.
		    </p>
		    <p>
		      &lsquo;Why all round her head, of course,&rsquo; the Rose replied. &lsquo;I was wondering
		      <i>you</i> hadn&rsquo;t got some too. I thought it was the regular rule.&rsquo;
		    </p>
		    <p>
		      &lsquo;She&rsquo;s coming!&rsquo; cried the Larkspur. &lsquo;I hear her footstep, thump, thump,
		      thump, along the gravel-walk!&rsquo;
		    </p>
		    <p>
		      Alice looked round eagerly, and found that it was the Red Queen. &lsquo;She&rsquo;s
		      grown a good deal!&rsquo; was her first remark. She had indeed: when Alice first
		      found her in the ashes, she had been only three inches high&mdash;and here
		      she was, half a head taller than Alice herself!
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the fresh air that does it,&rsquo; said the Rose: &lsquo;wonderfully fine air it
		      is, out here.&rsquo;
		    </p>
		    <p>
		      &lsquo;I think I&rsquo;ll go and meet her,&rsquo; said Alice, for, though the flowers were
		      interesting enough, she felt that it would be far grander to have a talk
		      with a real Queen.
		    </p>
		    <p>
		      &lsquo;You can&rsquo;t possibly do that,&rsquo; said the Rose: &lsquo;<i>I</i> should advise you
		      to walk the other way.&rsquo;
		    </p>
		    <p>
		      This sounded nonsense to Alice, so she said nothing, but set off at once
		      towards the Red Queen. To her surprise, she lost sight of her in a moment,
		      and found herself walking in at the front-door again.
		    </p>
		    <p>
		      A little provoked, she drew back, and after looking everywhere for the
		      queen (whom she spied out at last, a long way off), she thought she would
		      try the plan, this time, of walking in the opposite direction.
		    </p>
		    <p>
		      It succeeded beautifully. She had not been walking a minute before she
		      found herself face to face with the Red Queen, and full in sight of the
		      hill she had been so long aiming at.
		    </p>
		    <p>
		      &lsquo;Where do you come from?&rsquo; said the Red Queen. &lsquo;And where are you going?
		      Look up, speak nicely, and don&rsquo;t twiddle your fingers all the time.&rsquo;
		    </p>
		    <p>
		      Alice attended to all these directions, and explained, as well as she
		      could, that she had lost her way.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what you mean by <i>your</i> way,&rsquo; said the Queen: &lsquo;all the ways
		      about here belong to <i>me</i>&mdash;but why did you come out here at all?&rsquo; she
		      added in a kinder tone. &lsquo;Curtsey while you&rsquo;re thinking what to say, it
		      saves time.&rsquo;
		    </p>
		    <p>
		      Alice wondered a little at this, but she was too much in awe of the Queen
		      to disbelieve it. &lsquo;I&rsquo;ll try it when I go home,&rsquo; she thought to herself,
		      &lsquo;the next time I&rsquo;m a little late for dinner.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s time for you to answer now,&rsquo; the Queen said, looking at her watch:
		      &lsquo;open your mouth a <i>little</i> wider when you speak, and always say &ldquo;your
		      Majesty.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;I only wanted to see what the garden was like, your Majesty&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s right,&rsquo; said the Queen, patting her on the head, which Alice
		      didn&rsquo;t like at all, &lsquo;though, when you say &ldquo;garden,&rdquo;&mdash;<i>I&rsquo;ve</i> seen
		      gardens, compared with which this would be a wilderness.&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t dare to argue the point, but went on: &lsquo;&mdash;and I thought
		      I&rsquo;d try and find my way to the top of that hill&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;When you say &ldquo;hill,&rdquo;&rsquo; the Queen interrupted, &lsquo;<i>I</i> could show you
		      hills, in comparison with which you&rsquo;d call that a valley.&rsquo;
		    </p>
		    <p>
		      &lsquo;No, I shouldn&rsquo;t,&rsquo; said Alice, surprised into contradicting her at last:
		      &lsquo;a hill <i>can&rsquo;t</i> be a valley, you know. That would be nonsense&mdash;&rsquo;
		    </p>
		    <p>
		      The Red Queen shook her head, &lsquo;You may call it &ldquo;nonsense&rdquo; if you like,&rsquo;
		      she said, &lsquo;but <i>I&rsquo;ve</i> heard nonsense, compared with which that would be as
		      sensible as a dictionary!&rsquo;
		    </p>
		    <p>
		      Alice curtseyed again, as she was afraid from the Queen&rsquo;s tone that she
		      was a <i>little</i> offended: and they walked on in silence till they got to the
		      top of the little hill.
		    </p>
		    <p>
		      For some minutes Alice stood without speaking, looking out in all
		      directions over the country&mdash;and a most curious country it was. There
		      were a number of tiny little brooks running straight across it from side
		      to side, and the ground between was divided up into squares by a number of
		      little green hedges, that reached from brook to brook.
		    </p>
		    <p>
		      &lsquo;I declare it&rsquo;s marked out just like a large chessboard!&rsquo; Alice said at
		      last. &lsquo;There ought to be some men moving about somewhere&mdash;and so
		      there are!&rsquo; She added in a tone of delight, and her heart began to beat
		      quick with excitement as she went on. &lsquo;It&rsquo;s a great huge game of chess
		      that&rsquo;s being played&mdash;all over the world&mdash;if this <i>is</i> the world at
		      all, you know. Oh, what fun it is! How I <i>wish</i> I was one of them! I
		      wouldn&rsquo;t mind being a Pawn, if only I might join&mdash;though of course I
		      should <i>like</i> to be a Queen, best.&rsquo;
		    </p>
		    <p>
		      She glanced rather shyly at the real Queen as she said this, but her
		      companion only smiled pleasantly, and said, &lsquo;That&rsquo;s easily managed. You
		      can be the White Queen&rsquo;s Pawn, if you like, as Lily&rsquo;s too young to play;
		      and you&rsquo;re in the Second Square to begin with: when you get to the Eighth
		      Square you&rsquo;ll be a Queen&mdash;&rsquo; Just at this moment, somehow or other,
		      they began to run.
		    </p>
		    <p>
		      Alice never could quite make out, in thinking it over afterwards, how it
		      was that they began: all she remembers is, that they were running hand in
		      hand, and the Queen went so fast that it was all she could do to keep up
		      with her: and still the Queen kept crying &lsquo;Faster! Faster!&rsquo; but Alice felt
		      she <i>could not</i> go faster, though she had not breath left to say so.
		    </p>
		    <p>
		      The most curious part of the thing was, that the trees and the other
		      things round them never changed their places at all: however fast they
		      went, they never seemed to pass anything. &lsquo;I wonder if all the things move
		      along with us?&rsquo; thought poor puzzled Alice. And the Queen seemed to guess
		      her thoughts, for she cried, &lsquo;Faster! Don&rsquo;t try to talk!&rsquo;
		    </p>
		    <p>
		      Not that Alice had any idea of doing <i>that</i>. She felt as if she would never
		      be able to talk again, she was getting so much out of breath: and still
		      the Queen cried &lsquo;Faster! Faster!&rsquo; and dragged her along. &lsquo;Are we nearly
		      there?&rsquo; Alice managed to pant out at last.
		    </p>
		    <p>
		      &lsquo;Nearly there!&rsquo; the Queen repeated. &lsquo;Why, we passed it ten minutes ago!
		      Faster!&rsquo; And they ran on for a time in silence, with the wind whistling in
		      Alice&rsquo;s ears, and almost blowing her hair off her head, she fancied.
		    </p>
		    <p>
		      &lsquo;Now! Now!&rsquo; cried the Queen. &lsquo;Faster! Faster!&rsquo; And they went so fast that
		      at last they seemed to skim through the air, hardly touching the ground
		      with their feet, till suddenly, just as Alice was getting quite exhausted,
		      they stopped, and she found herself sitting on the ground, breathless and
		      giddy.
		    </p>
		    <p>
		      The Queen propped her up against a tree, and said kindly, &lsquo;You may rest a
		      little now.&rsquo;
		    </p>
		    <p>
		      Alice looked round her in great surprise. &lsquo;Why, I do believe we&rsquo;ve been
		      under this tree the whole time! Everything&rsquo;s just as it was!&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course it is,&rsquo; said the Queen, &lsquo;what would you have it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, in <i>our</i> country,&rsquo; said Alice, still panting a little, &lsquo;you&rsquo;d
		      generally get to somewhere else&mdash;if you ran very fast for a long
		      time, as we&rsquo;ve been doing.&rsquo;
		    </p>
		    <p>
		      &lsquo;A slow sort of country!&rsquo; said the Queen. &lsquo;Now, <i>here</i>, you see, it takes
		      all the running <i>you</i> can do, to keep in the same place. If you want to get
		      somewhere else, you must run at least twice as fast as that!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;d rather not try, please!&rsquo; said Alice. &lsquo;I&rsquo;m quite content to stay here&mdash;only
		      I <i>am</i> so hot and thirsty!&rsquo;
		    </p>
		    <p>
		      &lsquo;I know what <i>you&rsquo;d</i> like!&rsquo; the Queen said good-naturedly, taking a little
		      box out of her pocket. &lsquo;Have a biscuit?&rsquo;
		    </p>
		    <p>
		      Alice thought it would not be civil to say &lsquo;No,&rsquo; though it wasn&rsquo;t at all
		      what she wanted. So she took it, and ate it as well as she could: and it
		      was <i>very</i> dry; and she thought she had never been so nearly choked in all
		      her life.
		    </p>
		    <p>
		      &lsquo;While you&rsquo;re refreshing yourself,&rsquo; said the Queen, &lsquo;I&rsquo;ll just take the
		      measurements.&rsquo; And she took a ribbon out of her pocket, marked in inches,
		      and began measuring the ground, and sticking little pegs in here and
		      there.
		    </p>
		    <p>
		      &lsquo;At the end of two yards,&rsquo; she said, putting in a peg to mark the
		      distance, &lsquo;I shall give you your directions&mdash;have another biscuit?&rsquo;
		    </p>
		    <p>
		      &lsquo;No, thank you,&rsquo; said Alice: &lsquo;one&rsquo;s <i>quite</i> enough!&rsquo;
		    </p>
		    <p>
		      &lsquo;Thirst quenched, I hope?&rsquo; said the Queen.
		    </p>
		    <p>
		      Alice did not know what to say to this, but luckily the Queen did not wait
		      for an answer, but went on. &lsquo;At the end of <i>three</i> yards I shall repeat them&mdash;for
		      fear of your forgetting them. At the end of <i>four</i>, I shall say good-bye.
		      And at the end of <i>five</i>, I shall go!&rsquo;
		    </p>
		    <p>
		      She had got all the pegs put in by this time, and Alice looked on with
		      great interest as she returned to the tree, and then began slowly walking
		      down the row.
		    </p>
		    <p>
		      At the two-yard peg she faced round, and said, &lsquo;A pawn goes two squares in
		      its first move, you know. So you&rsquo;ll go <i>very</i> quickly through the Third
		      Square&mdash;by railway, I should think&mdash;and you&rsquo;ll find yourself in
		      the Fourth Square in no time. Well, <i>that</i> square belongs to Tweedledum and
		      Tweedledee&mdash;the Fifth is mostly water&mdash;the Sixth belongs to
		      Humpty Dumpty&mdash;But you make no remark?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&mdash;I didn&rsquo;t know I had to make one&mdash;just then,&rsquo; Alice faltered
		      out.
		    </p>
		    <p>
		      &lsquo;You <i>should</i> have said, &ldquo;It&rsquo;s extremely kind of you to tell me all this&rdquo;&mdash;however,
		      we&rsquo;ll suppose it said&mdash;the Seventh Square is all forest&mdash;however,
		      one of the Knights will show you the way&mdash;and in the Eighth Square we
		      shall be Queens together, and it&rsquo;s all feasting and fun!&rsquo; Alice got up and
		      curtseyed, and sat down again.
		    </p>
		    <p>
		      At the next peg the Queen turned again, and this time she said, &lsquo;Speak in
		      French when you can&rsquo;t think of the English for a thing&mdash;turn out your
		      toes as you walk&mdash;and remember who you are!&rsquo; She did not wait for
		      Alice to curtsey this time, but walked on quickly to the next peg, where
		      she turned for a moment to say &lsquo;good-bye,&rsquo; and then hurried on to the
		      last.
		    </p>
		    <p>
		      How it happened, Alice never knew, but exactly as she came to the last
		      peg, she was gone. Whether she vanished into the air, or whether she ran
		      quickly into the wood (&lsquo;and she <i>can</i> run very fast!&rsquo; thought Alice), there
		      was no way of guessing, but she was gone, and Alice began to remember that
		      she was a Pawn, and that it would soon be time for her to move.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Looking-Glass Insects",
			'number' => "Three",
			'order' => 3,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      Of course the first thing to do was to make a grand survey of the country
		      she was going to travel through. &lsquo;It&rsquo;s something very like learning
		      geography,&rsquo; thought Alice, as she stood on tiptoe in hopes of being able
		      to see a little further. &lsquo;Principal rivers&mdash;there <i>are</i> none. Principal
		      mountains&mdash;I&rsquo;m on the only one, but I don&rsquo;t think it&rsquo;s got any name.
		      Principal towns&mdash;why, what <i>are</i> those creatures, making honey down
		      there? They can&rsquo;t be bees&mdash;nobody ever saw bees a mile off, you know&mdash;&rsquo;
		      and for some time she stood silent, watching one of them that was bustling
		      about among the flowers, poking its proboscis into them, &lsquo;just as if it
		      was a regular bee,&rsquo; thought Alice.
		    </p>
		    <p>
		      However, this was anything but a regular bee: in fact it was an elephant&mdash;as
		      Alice soon found out, though the idea quite took her breath away at first.
		      &lsquo;And what enormous flowers they must be!&rsquo; was her next idea. &lsquo;Something
		      like cottages with the roofs taken off, and stalks put to them&mdash;and
		      what quantities of honey they must make! I think I&rsquo;ll go down and&mdash;no,
		      I won&rsquo;t <i>just</i> yet,&rsquo; she went on, checking herself just as she was beginning
		      to run down the hill, and trying to find some excuse for turning shy so
		      suddenly. &lsquo;It&rsquo;ll never do to go down among them without a good long branch
		      to brush them away&mdash;and what fun it&rsquo;ll be when they ask me how I like
		      my walk. I shall say&mdash;&ldquo;Oh, I like it well enough&mdash;&ldquo;&rsquo; (here came
		      the favourite little toss of the head), &lsquo;&ldquo;only it was so dusty and hot,
		      and the elephants did tease so!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;I think I&rsquo;ll go down the other way,&rsquo; she said after a pause: &lsquo;and perhaps
		      I may visit the elephants later on. Besides, I do so want to get into the
		      Third Square!&rsquo;
		    </p>
		    <p>
		      So with this excuse she ran down the hill and jumped over the first of the
		      six little brooks.
		    </p>
			<p class='tlg-separator'>
			  *****
			</p>
		    <p>
		      &lsquo;Tickets, please!&rsquo; said the Guard, putting his head in at the window. In a
		      moment everybody was holding out a ticket: they were about the same size
		      as the people, and quite seemed to fill the carriage.
		    </p>
		    <p>
		      &lsquo;Now then! Show your ticket, child!&rsquo; the Guard went on, looking angrily at
		      Alice. And a great many voices all said together (&lsquo;like the chorus of a
		      song,&rsquo; thought Alice), &lsquo;Don&rsquo;t keep him waiting, child! Why, his time is
		      worth a thousand pounds a minute!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I haven&rsquo;t got one,&rsquo; Alice said in a frightened tone: &lsquo;there
		      wasn&rsquo;t a ticket-office where I came from.&rsquo; And again the chorus of voices
		      went on. &lsquo;There wasn&rsquo;t room for one where she came from. The land there is
		      worth a thousand pounds an inch!&rsquo;
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t make excuses,&rsquo; said the Guard: &lsquo;you should have bought one from the
		      engine-driver.&rsquo; And once more the chorus of voices went on with &lsquo;The man
		      that drives the engine. Why, the smoke alone is worth a thousand pounds a
		      puff!&rsquo;
		    </p>
		    <p>
		      Alice thought to herself, &lsquo;Then there&rsquo;s no use in speaking.&rsquo; The voices
		      didn&rsquo;t join in this time, as she hadn&rsquo;t spoken, but to her great surprise,
		      they all <i>thought</i> in chorus (I hope you understand what <i>thinking in chorus</i>
		      means&mdash;for I must confess that <i>I</i> don&rsquo;t), &lsquo;Better say nothing
		      at all. Language is worth a thousand pounds a word!&rsquo;
		    </p>
		    <p>
		      &lsquo;I shall dream about a thousand pounds tonight, I know I shall!&rsquo; thought
		      Alice.
		    </p>
		    <p>
		      All this time the Guard was looking at her, first through a telescope,
		      then through a microscope, and then through an opera-glass. At last he
		      said, &lsquo;You&rsquo;re travelling the wrong way,&rsquo; and shut up the window and went
		      away.
		    </p>
		    <p>
		      &lsquo;So young a child,&rsquo; said the gentleman sitting opposite to her (he was
		      dressed in white paper), &lsquo;ought to know which way she&rsquo;s going, even if she
		      doesn&rsquo;t know her own name!&rsquo;
		    </p>
		    <p>
		      A Goat, that was sitting next to the gentleman in white, shut his eyes and
		      said in a loud voice, &lsquo;She ought to know her way to the ticket-office,
		      even if she doesn&rsquo;t know her alphabet!&rsquo;
		    </p>
		    <p>
		      There was a Beetle sitting next to the Goat (it was a very queer
		      carriage-full of passengers altogether), and, as the rule seemed to be
		      that they should all speak in turn, <i>he</i> went on with &lsquo;She&rsquo;ll have to go
		      back from here as luggage!&rsquo;
		    </p>
		    <p>
		      Alice couldn&rsquo;t see who was sitting beyond the Beetle, but a hoarse voice
		      spoke next. &lsquo;Change engines&mdash;&rsquo; it said, and was obliged to leave off.
		    </p>
		    <p>
		      &lsquo;It sounds like a horse,&rsquo; Alice thought to herself. And an extremely small
		      voice, close to her ear, said, &lsquo;You might make a joke on that&mdash;something
		      about &ldquo;horse&rdquo; and &ldquo;hoarse,&rdquo; you know.&rsquo;
		    </p>
		    <p>
		      Then a very gentle voice in the distance said, &lsquo;She must be labelled
		      &ldquo;Lass, with care,&rdquo; you know&mdash;&rsquo;
		    </p>
		    <p>
		      And after that other voices went on (&lsquo;What a number of people there are in
		      the carriage!&rsquo; thought Alice), saying, &lsquo;She must go by post, as she&rsquo;s got
		      a head on her&mdash;&rsquo; &lsquo;She must be sent as a message by the telegraph&mdash;&rsquo;
		      &lsquo;She must draw the train herself the rest of the way&mdash;&rsquo; and so on.
		    </p>
		    <p>
		      But the gentleman dressed in white paper leaned forwards and whispered in
		      her ear, &lsquo;Never mind what they all say, my dear, but take a return-ticket
		      every time the train stops.&rsquo;
		    </p>
		    <p>
		      &lsquo;Indeed I shan&rsquo;t!&rsquo; Alice said rather impatiently. &lsquo;I don&rsquo;t belong to this
		      railway journey at all&mdash;I was in a wood just now&mdash;and I wish I
		      could get back there.&rsquo;
		    </p>
		    <p>
		      &lsquo;You might make a joke on <i>that</i>,&rsquo; said the little voice close to her ear:
		      &lsquo;something about &ldquo;you <i>would</i> if you could,&rdquo; you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t tease so,&rsquo; said Alice, looking about in vain to see where the voice
		      came from; &lsquo;if you&rsquo;re so anxious to have a joke made, why don&rsquo;t you make
		      one yourself?&rsquo;
		    </p>
		    <p>
		      The little voice sighed deeply: it was <i>very</i> unhappy, evidently, and Alice
		      would have said something pitying to comfort it, &lsquo;If it would only sigh
		      like other people!&rsquo; she thought. But this was such a wonderfully small
		      sigh, that she wouldn&rsquo;t have heard it at all, if it hadn&rsquo;t come <i>quite</i>
		      close to her ear. The consequence of this was that it tickled her ear very
		      much, and quite took off her thoughts from the unhappiness of the poor
		      little creature.
		    </p>
		    <p>
		      &lsquo;I know you are a friend,&rsquo; the little voice went on; &lsquo;a dear friend, and
		      an old friend. And you won&rsquo;t hurt me, though I <i>am</i> an insect.&rsquo;
		    </p>
		    <p>
		      &lsquo;What kind of insect?&rsquo; Alice inquired a little anxiously. What she really
		      wanted to know was, whether it could sting or not, but she thought this
		      wouldn&rsquo;t be quite a civil question to ask.
		    </p>
		    <p>
		      &lsquo;What, then you don&rsquo;t&mdash;&rsquo; the little voice began, when it was drowned
		      by a shrill scream from the engine, and everybody jumped up in alarm,
		      Alice among the rest.
		    </p>
		    <p>
		      The Horse, who had put his head out of the window, quietly drew it in and
		      said, &lsquo;It&rsquo;s only a brook we have to jump over.&rsquo; Everybody seemed satisfied
		      with this, though Alice felt a little nervous at the idea of trains
		      jumping at all. &lsquo;However, it&rsquo;ll take us into the Fourth Square, that&rsquo;s
		      some comfort!&rsquo; she said to herself. In another moment she felt the
		      carriage rise straight up into the air, and in her fright she caught at
		      the thing nearest to her hand, which happened to be the Goat&rsquo;s beard.
		    </p>
			<p class='tlg-separator'>
			  *****
			</p>
		    <p>
		      But the beard seemed to melt away as she touched it, and she found herself
		      sitting quietly under a tree&mdash;while the Gnat (for that was the insect
		      she had been talking to) was balancing itself on a twig just over her
		      head, and fanning her with its wings.
		    </p>
		    <p>
		      It certainly was a <i>very</i> large Gnat: &lsquo;about the size of a chicken,&rsquo; Alice
		      thought. Still, she couldn&rsquo;t feel nervous with it, after they had been
		      talking together so long.
		    </p>
		    <p>
		      &lsquo;&mdash;then you don&rsquo;t like all insects?&rsquo; the Gnat went on, as quietly as
		      if nothing had happened.
		    </p>
		    <p>
		      &lsquo;I like them when they can talk,&rsquo; Alice said. &lsquo;None of them ever talk,
		      where <i>I</i> come from.&rsquo;
		    </p>
		    <p>
		      &lsquo;What sort of insects do you rejoice in, where <i>you</i> come from?&rsquo; the Gnat
		      inquired.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t <i>rejoice</i> in insects at all,&rsquo; Alice explained, &lsquo;because I&rsquo;m rather
		      afraid of them&mdash;at least the large kinds. But I can tell you the
		      names of some of them.&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course they answer to their names?&rsquo; the Gnat remarked carelessly.
		    </p>
		    <p>
		      &lsquo;I never knew them to do it.&rsquo;
		    </p>
		    <p>
		      &lsquo;What&rsquo;s the use of their having names,&rsquo; the Gnat said, &lsquo;if they won&rsquo;t
		      answer to them?&rsquo;
		    </p>
		    <p>
		      &lsquo;No use to <i>them</i>,&rsquo; said Alice; &lsquo;but it&rsquo;s useful to the people who name
		      them, I suppose. If not, why do things have names at all?&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t say,&rsquo; the Gnat replied. &lsquo;Further on, in the wood down there,
		      they&rsquo;ve got no names&mdash;however, go on with your list of insects:
		      you&rsquo;re wasting time.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, there&rsquo;s the Horse-fly,&rsquo; Alice began, counting off the names on her
		      fingers.
		    </p>
		    <p>
		      &lsquo;All right,&rsquo; said the Gnat: &lsquo;half way up that bush, you&rsquo;ll see a
		      Rocking-horse-fly, if you look. It&rsquo;s made entirely of wood, and gets about
		      by swinging itself from branch to branch.&rsquo;
		    </p>
		    <p>
		      &lsquo;What does it live on?&rsquo; Alice asked, with great curiosity.
		    </p>
		    <p>
		      &lsquo;Sap and sawdust,&rsquo; said the Gnat. &lsquo;Go on with the list.&rsquo;
		    </p>
		    <p>
		      Alice looked up at the Rocking-horse-fly with great interest, and made up
		      her mind that it must have been just repainted, it looked so bright and
		      sticky; and then she went on.
		    </p>
		    <p>
		      &lsquo;And there&rsquo;s the Dragon-fly.&rsquo;
		    </p>
		    <p>
		      &lsquo;Look on the branch above your head,&rsquo; said the Gnat, &lsquo;and there you&rsquo;ll
		      find a snap-dragon-fly. Its body is made of plum-pudding, its wings of
		      holly-leaves, and its head is a raisin burning in brandy.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what does it live on?&rsquo;
		    </p>
		    <p>
		      &lsquo;Frumenty and mince pie,&rsquo; the Gnat replied; &lsquo;and it makes its nest in a
		      Christmas box.&rsquo;
		    </p>
		    <p>
		      &lsquo;And then there&rsquo;s the Butterfly,&rsquo; Alice went on, after she had taken a
		      good look at the insect with its head on fire, and had thought to herself,
		      &lsquo;I wonder if that&rsquo;s the reason insects are so fond of flying into candles&mdash;because
		      they want to turn into Snap-dragon-flies!&rsquo;
		    </p>
		    <p>
		      &lsquo;Crawling at your feet,&rsquo; said the Gnat (Alice drew her feet back in some
		      alarm), &lsquo;you may observe a Bread-and-Butterfly. Its wings are thin slices
		      of Bread-and-butter, its body is a crust, and its head is a lump of
		      sugar.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what does <i>it</i> live on?&rsquo;
		    </p>
		    <p>
		      &lsquo;Weak tea with cream in it.&rsquo;
		    </p>
		    <p>
		      A new difficulty came into Alice&rsquo;s head. &lsquo;Supposing it couldn&rsquo;t find any?&rsquo;
		      she suggested.
		    </p>
		    <p>
		      &lsquo;Then it would die, of course.&rsquo;
		    </p>
		    <p>
		      &lsquo;But that must happen very often,&rsquo; Alice remarked thoughtfully.
		    </p>
		    <p>
		      &lsquo;It always happens,&rsquo; said the Gnat.
		    </p>
		    <p>
		      After this, Alice was silent for a minute or two, pondering. The Gnat
		      amused itself meanwhile by humming round and round her head: at last it
		      settled again and remarked, &lsquo;I suppose you don&rsquo;t want to lose your name?&rsquo;
		    </p>
		    <p>
		      &lsquo;No, indeed,&rsquo; Alice said, a little anxiously.
		    </p>
		    <p>
		      &lsquo;And yet I don&rsquo;t know,&rsquo; the Gnat went on in a careless tone: &lsquo;only think
		      how convenient it would be if you could manage to go home without it! For
		      instance, if the governess wanted to call you to your lessons, she would
		      call out &ldquo;come here&mdash;,&rdquo; and there she would have to leave off,
		      because there wouldn&rsquo;t be any name for her to call, and of course you
		      wouldn&rsquo;t have to go, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;That would never do, I&rsquo;m sure,&rsquo; said Alice: &lsquo;the governess would never
		      think of excusing me lessons for that. If she couldn&rsquo;t remember my name,
		      she&rsquo;d call me &ldquo;Miss!&rdquo; as the servants do.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, if she said &ldquo;Miss,&rdquo; and didn&rsquo;t say anything more,&rsquo; the Gnat
		      remarked, &lsquo;of course you&rsquo;d miss your lessons. That&rsquo;s a joke. I wish <i>you</i>
		      had made it.&rsquo;
		    </p>
		    <p>
		      &lsquo;Why do you wish <i>I</i> had made it?&rsquo; Alice asked. &lsquo;It&rsquo;s a very bad
		      one.&rsquo;
		    </p>
		    <p>
		      But the Gnat only sighed deeply, while two large tears came rolling down
		      its cheeks.
		    </p>
		    <p>
		      &lsquo;You shouldn&rsquo;t make jokes,&rsquo; Alice said, &lsquo;if it makes you so unhappy.&rsquo;
		    </p>
		    <p>
		      Then came another of those melancholy little sighs, and this time the poor
		      Gnat really seemed to have sighed itself away, for, when Alice looked up,
		      there was nothing whatever to be seen on the twig, and, as she was getting
		      quite chilly with sitting still so long, she got up and walked on.
		    </p>
		    <p>
		      She very soon came to an open field, with a wood on the other side of it:
		      it looked much darker than the last wood, and Alice felt a <i>little</i> timid
		      about going into it. However, on second thoughts, she made up her mind to
		      go on: &lsquo;for I certainly won&rsquo;t go <i>back</i>,&rsquo; she thought to herself, and this
		      was the only way to the Eighth Square.
		    </p>
		    <p>
		      &lsquo;This must be the wood,&rsquo; she said thoughtfully to herself, &lsquo;where things
		      have no names. I wonder what&rsquo;ll become of <i>my</i> name when I go in? I
		      shouldn&rsquo;t like to lose it at all&mdash;because they&rsquo;d have to give me
		      another, and it would be almost certain to be an ugly one. But then the
		      fun would be trying to find the creature that had got my old name! That&rsquo;s
		      just like the advertisements, you know, when people lose dogs&mdash;&ldquo;<i>answers
		      to the name of &lsquo;Dash:&rsquo; had on a brass collar</i>&rdquo;&mdash;just fancy calling
		      everything you met &ldquo;Alice,&rdquo; till one of them answered! Only they wouldn&rsquo;t
		      answer at all, if they were wise.&rsquo;
		    </p>
		    <p>
		      She was rambling on in this way when she reached the wood: it looked very
		      cool and shady. &lsquo;Well, at any rate it&rsquo;s a great comfort,&rsquo; she said as she
		      stepped under the trees, &lsquo;after being so hot, to get into the&mdash;into
		      <i>what</i>?&rsquo; she went on, rather surprised at not being able to think of the
		      word. &lsquo;I mean to get under the&mdash;under the&mdash;under <i>this</i>, you
		      know!&rsquo; putting her hand on the trunk of the tree. &lsquo;What <i>does</i> it call
		      itself, I wonder? I do believe it&rsquo;s got no name&mdash;why, to be sure it
		      hasn&rsquo;t!&rsquo;
		    </p>
		    <p>
		      She stood silent for a minute, thinking: then she suddenly began again.
		      &lsquo;Then it really <i>has</i> happened, after all! And now, who am I? I <i>will</i>
		      remember, if I can! I&rsquo;m determined to do it!&rsquo; But being determined didn&rsquo;t
		      help much, and all she could say, after a great deal of puzzling, was, &lsquo;L,
		      I <i>know</i> it begins with L!&rsquo;
		    </p>
		    <p>
		      Just then a Fawn came wandering by: it looked at Alice with its large
		      gentle eyes, but didn&rsquo;t seem at all frightened. &lsquo;Here then! Here then!&rsquo;
		      Alice said, as she held out her hand and tried to stroke it; but it only
		      started back a little, and then stood looking at her again.
		    </p>
		    <p>
		      &lsquo;What do you call yourself?&rsquo; the Fawn said at last. Such a soft sweet
		      voice it had!
		    </p>
		    <p>
		      &lsquo;I wish I knew!&rsquo; thought poor Alice. She answered, rather sadly, &lsquo;Nothing,
		      just now.&rsquo;
		    </p>
		    <p>
		      &lsquo;Think again,&rsquo; it said: &lsquo;that won&rsquo;t do.&rsquo;
		    </p>
		    <p>
		      Alice thought, but nothing came of it. &lsquo;Please, would you tell me what <i>you</i>
		      call yourself?&rsquo; she said timidly. &lsquo;I think that might help a little.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll tell you, if you&rsquo;ll move a little further on,&rsquo; the Fawn said. &lsquo;I
		      can&rsquo;t remember here.&rsquo;
		    </p>
		    <p>
		      So they walked on together though the wood, Alice with her arms clasped
		      lovingly round the soft neck of the Fawn, till they came out into another
		      open field, and here the Fawn gave a sudden bound into the air, and shook
		      itself free from Alice&rsquo;s arms. &lsquo;I&rsquo;m a Fawn!&rsquo; it cried out in a voice of
		      delight, &lsquo;and, dear me! you&rsquo;re a human child!&rsquo; A sudden look of alarm came
		      into its beautiful brown eyes, and in another moment it had darted away at
		      full speed.
		    </p>
		    <p>
		      Alice stood looking after it, almost ready to cry with vexation at having
		      lost her dear little fellow-traveller so suddenly. &lsquo;However, I know my
		      name now.&rsquo; she said, &lsquo;that&rsquo;s <i>some</i> comfort. Alice&mdash;Alice&mdash;I won&rsquo;t
		      forget it again. And now, which of these finger-posts ought I to follow, I
		      wonder?&rsquo;
		    </p>
		    <p>
		      It was not a very difficult question to answer, as there was only one road
		      through the wood, and the two finger-posts both pointed along it. &lsquo;I&rsquo;ll
		      settle it,&rsquo; Alice said to herself, &lsquo;when the road divides and they point
		      different ways.&rsquo;
		    </p>
		    <p>
		      But this did not seem likely to happen. She went on and on, a long way,
		      but wherever the road divided there were sure to be two finger-posts
		      pointing the same way, one marked <span class='tlg-sign'>TO TWEEDLEDUM&rsquo;S HOUSE</span> and the other
		      <span class='tlg-sign'>TO THE HOUSE OF TWEEDLEDEE</span>.
		    </p>
		    <p>
		      &lsquo;I do believe,&rsquo; said Alice at last, &lsquo;that they live in the same house! I
		      wonder I never thought of that before&mdash;But I can&rsquo;t stay there long.
		      I&rsquo;ll just call and say &ldquo;how d&rsquo;you do?&rdquo; and ask them the way out of the
		      wood. If I could only get to the Eighth Square before it gets dark!&rsquo; So
		      she wandered on, talking to herself as she went, till, on turning a sharp
		      corner, she came upon two fat little men, so suddenly that she could not
		      help starting back, but in another moment she recovered herself, feeling
		      sure that they must be.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Tweedledum And Tweedledee",
			'number' => "Four",
			'order' => 4,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      They were standing under a tree, each with an arm round the other&rsquo;s neck,
		      and Alice knew which was which in a moment, because one of them had <span class='tlg-collar'>DUM</span>
		      embroidered on his collar, and the other <span class='tlg-collar'>DEE</span>. &lsquo;I suppose they&rsquo;ve each
		      got <span class='tlg-collar'>TWEEDLE</span> round at the back of the collar,&rsquo; she said to herself.
		    </p>
		    <p>
		      They stood so still that she quite forgot they were alive, and she was
		      just looking round to see if the word <span class='tlg-collar'>TWEEDLE</span> was written at the back of
		      each collar, when she was startled by a voice coming from the one marked
		      <span class='tlg-collar'>DUM</span>.
		    </p>
		    <p>
		      &lsquo;If you think we&rsquo;re wax-works,&rsquo; he said, &lsquo;you ought to pay, you know.
		      Wax-works weren&rsquo;t made to be looked at for nothing, nohow!&rsquo;
		    </p>
		    <p>
		      &lsquo;Contrariwise,&rsquo; added the one marked <span class='tlg-collar'>DEE</span>, &lsquo;if you think we&rsquo;re alive, you
		      ought to speak.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m sure I&rsquo;m very sorry,&rsquo; was all Alice could say; for the words of the
		      old song kept ringing through her head like the ticking of a clock, and
		      she could hardly help saying them out loud:&mdash;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &lsquo;Tweedledum and Tweedledee
		    <br>
		      Agreed to have a battle;
		    <br>
		     For Tweedledum said Tweedledee
		    <br>
		      Had spoiled his nice new rattle.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     Just then flew down a monstrous crow,
		    <br>
		      As black as a tar-barrel;
		    <br>
		     Which frightened both the heroes so,
		    <br>
		      They quite forgot their quarrel.&rsquo;
		    </p>
		    <p>
		      &lsquo;I know what you&rsquo;re thinking about,&rsquo; said Tweedledum: &lsquo;but it isn&rsquo;t so,
		      nohow.&rsquo;
		    </p>
		    <p>
		      &lsquo;Contrariwise,&rsquo; continued Tweedledee, &lsquo;if it was so, it might be; and if
		      it were so, it would be; but as it isn&rsquo;t, it ain&rsquo;t. That&rsquo;s logic.&rsquo;
		    </p>
		    <p>
		      &lsquo;I was thinking,&rsquo; Alice said very politely, &lsquo;which is the best way out of
		      this wood: it&rsquo;s getting so dark. Would you tell me, please?&rsquo;
		    </p>
		    <p>
		      But the little men only looked at each other and grinned.
		    </p>
		    <p>
		      They looked so exactly like a couple of great schoolboys, that Alice
		      couldn&rsquo;t help pointing her finger at Tweedledum, and saying &lsquo;First Boy!&rsquo;
		    </p>
		    <p>
		      &lsquo;Nohow!&rsquo; Tweedledum cried out briskly, and shut his mouth up again with a
		      snap.
		    </p>
		    <p>
		      &lsquo;Next Boy!&rsquo; said Alice, passing on to Tweedledee, though she felt quite
		      certain he would only shout out &lsquo;Contrariwise!&rsquo; and so he did.
		    </p>
		    <p>
		      &lsquo;You&rsquo;ve been wrong!&rsquo; cried Tweedledum. &lsquo;The first thing in a visit is to
		      say &ldquo;How d&rsquo;ye do?&rdquo; and shake hands!&rsquo; And here the two brothers gave each
		      other a hug, and then they held out the two hands that were free, to shake
		      hands with her.
		    </p>
		    <p>
		      Alice did not like shaking hands with either of them first, for fear of
		      hurting the other one&rsquo;s feelings; so, as the best way out of the
		      difficulty, she took hold of both hands at once: the next moment they were
		      dancing round in a ring. This seemed quite natural (she remembered
		      afterwards), and she was not even surprised to hear music playing: it
		      seemed to come from the tree under which they were dancing, and it was
		      done (as well as she could make it out) by the branches rubbing one across
		      the other, like fiddles and fiddle-sticks.
		    </p>
		    <p>
		      &lsquo;But it certainly <i>was</i> funny,&rsquo; (Alice said afterwards, when she was telling
		      her sister the history of all this,) &lsquo;to find myself singing &ldquo;<i>Here we go
		      round the mulberry bush</i>.&rdquo; I don&rsquo;t know when I began it, but somehow I felt
		      as if I&rsquo;d been singing it a long long time!&rsquo;
		    </p>
		    <p>
		      The other two dancers were fat, and very soon out of breath. &lsquo;Four times
		      round is enough for one dance,&rsquo; Tweedledum panted out, and they left off
		      dancing as suddenly as they had begun: the music stopped at the same
		      moment.
		    </p>
		    <p>
		      Then they let go of Alice&rsquo;s hands, and stood looking at her for a minute:
		      there was a rather awkward pause, as Alice didn&rsquo;t know how to begin a
		      conversation with people she had just been dancing with. &lsquo;It would never
		      do to say &ldquo;How d&rsquo;ye do?&rdquo; <i>now</i>,&rsquo; she said to herself: &lsquo;we seem to have got
		      beyond that, somehow!&rsquo;
		    </p>
		    <p>
		      &lsquo;I hope you&rsquo;re not much tired?&rsquo; she said at last.
		    </p>
		    <p>
		      &lsquo;Nohow. And thank you <i>very</i> much for asking,&rsquo; said Tweedledum.
		    </p>
		    <p>
		      &lsquo;So <i>much</i> obliged!&rsquo; added Tweedledee. &lsquo;You like poetry?&rsquo;
		    </p>
		    <p>
		      &lsquo;Ye-es, pretty well&mdash;<i>some</i> poetry,&rsquo; Alice said doubtfully. &lsquo;Would you
		      tell me which road leads out of the wood?&rsquo;
		    </p>
		    <p>
		      &lsquo;What shall I repeat to her?&rsquo; said Tweedledee, looking round at Tweedledum
		      with great solemn eyes, and not noticing Alice&rsquo;s question.
		    </p>
		    <p>
		      &lsquo;&ldquo;<i>The Walrus and the Carpenter</i>&rdquo; is the longest,&rsquo; Tweedledum replied,
		      giving his brother an affectionate hug.
		    </p>
		    <p>
		      Tweedledee began instantly:
		    </p>
		    <p class='tlg-tweedle stanza'>
		       &lsquo;The sun was shining&mdash;&rsquo;
		    </p>
		    <p>
		      Here Alice ventured to interrupt him. &lsquo;If it&rsquo;s <i>very</i> long,&rsquo; she said, as
		      politely as she could, &lsquo;would you please tell me first which road&mdash;&rsquo;
		    </p>
		    <p>
		      Tweedledee smiled gently, and began again:
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &lsquo;The sun was shining on the sea,
		    <br>
		      Shining with all his might:
		    <br>
		     He did his very best to make
		    <br>
		      The billows smooth and bright&mdash;
		    <br>
		     And this was odd, because it was
		    <br>
		      The middle of the night.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     The moon was shining sulkily,
		    <br>
		      Because she thought the sun
		    <br>
		     Had got no business to be there
		    <br>
		      After the day was done&mdash;
		    <br>
		     &ldquo;It&rsquo;s very rude of him,&rdquo; she said,
		    <br>
		      &ldquo;To come and spoil the fun!&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     The sea was wet as wet could be,
		    <br>
		      The sands were dry as dry.
		    <br>
		     You could not see a cloud, because
		    <br>
		      No cloud was in the sky:
		    <br>
		     No birds were flying over head&mdash;
		    <br>
		      There were no birds to fly.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     The Walrus and the Carpenter
		    <br>
		      Were walking close at hand;
		    <br>
		     They wept like anything to see
		    <br>
		      Such quantities of sand:
		    <br>
		     &ldquo;If this were only cleared away,&rdquo;
		    <br>
		       They said, &ldquo;it <i>would</i> be grand!&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;If seven maids with seven mops
		    <br>
		      Swept it for half a year,
		    <br>
		     Do you suppose,&rdquo; the Walrus said,
		    <br>
		      &ldquo;That they could get it clear?&rdquo;
		    <br>
		      &ldquo;I doubt it,&rdquo; said the Carpenter,
		    <br>
		      And shed a bitter tear.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;O Oysters, come and walk with us!&rdquo;
		    <br>
		       The Walrus did beseech.
		    <br>
		     &ldquo;A pleasant walk, a pleasant talk,
		    <br>
		      Along the briny beach:
		    <br>
		     We cannot do with more than four,
		    <br>
		      To give a hand to each.&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     The eldest Oyster looked at him.
		    <br>
		      But never a word he said:
		    <br>
		     The eldest Oyster winked his eye,
		    <br>
		      And shook his heavy head&mdash;
		    <br>
		     Meaning to say he did not choose
		    <br>
		      To leave the oyster-bed.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     But four young oysters hurried up,
		    <br>
		      All eager for the treat:
		    <br>
		     Their coats were brushed, their faces washed,
		    <br>
		      Their shoes were clean and neat&mdash;
		    <br>
		     And this was odd, because, you know,
		    <br>
		      They hadn&rsquo;t any feet.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     Four other Oysters followed them,
		    <br>
		      And yet another four;
		    <br>
		     And thick and fast they came at last,
		    <br>
		      And more, and more, and more&mdash;
		    <br>
		     All hopping through the frothy waves,
		    <br>
		      And scrambling to the shore.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     The Walrus and the Carpenter
		    <br>
		      Walked on a mile or so,
		    <br>
		     And then they rested on a rock
		    <br>
		      Conveniently low:
		    <br>
		     And all the little Oysters stood
		    <br>
		      And waited in a row.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;The time has come,&rdquo; the Walrus said,
		    <br>
		      &ldquo;To talk of many things:
		    <br>
		     Of shoes&mdash;and ships&mdash;and sealing-wax&mdash;
		    <br>
		      Of cabbages&mdash;and kings&mdash;
		    <br>
		     And why the sea is boiling hot&mdash;
		    <br>
		      And whether pigs have wings.&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;But wait a bit,&rdquo; the Oysters cried,
		    <br>
		      &ldquo;Before we have our chat;
		    <br>
		     For some of us are out of breath,
		    <br>
		      And all of us are fat!&rdquo;
		    <br>
		      &ldquo;No hurry!&rdquo; said the Carpenter.
		    <br>
		      They thanked him much for that.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;A loaf of bread,&rdquo; the Walrus said,
		    <br>
		      &ldquo;Is what we chiefly need:
		    <br>
		     Pepper and vinegar besides
		    <br>
		      Are very good indeed&mdash;
		    <br>
		     Now if you&rsquo;re ready Oysters dear,
		    <br>
		      We can begin to feed.&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;But not on us!&rdquo; the Oysters cried,
		    <br>
		      Turning a little blue,
		    <br>
		     &ldquo;After such kindness, that would be
		    <br>
		      A dismal thing to do!&rdquo;
		    <br>
		      &ldquo;The night is fine,&rdquo; the Walrus said
		    <br>
		      &ldquo;Do you admire the view?
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;It was so kind of you to come!
		    <br>
		      And you are very nice!&rdquo;
		    <br>
		      The Carpenter said nothing but
		    <br>
		      &ldquo;Cut us another slice:
		    <br>
		     I wish you were not quite so deaf&mdash;
		    <br>
		      I&rsquo;ve had to ask you twice!&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;It seems a shame,&rdquo; the Walrus said,
		    <br>
		      &ldquo;To play them such a trick,
		    <br>
		     After we&rsquo;ve brought them out so far,
		    <br>
		      And made them trot so quick!&rdquo;
		    <br>
		      The Carpenter said nothing but
		    <br>
		      &ldquo;The butter&rsquo;s spread too thick!&rdquo;
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;I weep for you,&rdquo; the Walrus said.
		    <br>
		      &ldquo;I deeply sympathize.&rdquo;
		    <br>
		      With sobs and tears he sorted out
		    <br>
		      Those of the largest size.
		    <br>
		     Holding his pocket handkerchief
		    <br>
		      Before his streaming eyes.
		    </p>
		    <p class='tlg-tweedle stanza'>
		     &ldquo;O Oysters,&rdquo; said the Carpenter.
		    <br>
		      &ldquo;You&rsquo;ve had a pleasant run!
		    <br>
		     Shall we be trotting home again?&rdquo;
		    <br>
		       But answer came there none&mdash;
		    <br>
		     And that was scarcely odd, because
		    <br>
		      They&rsquo;d eaten every one.&rsquo;
		    </p>
		    <p>
		      &lsquo;I like the Walrus best,&rsquo; said Alice: &lsquo;because you see he was a <i>little</i>
		      sorry for the poor oysters.&rsquo;
		    </p>
		    <p>
		      &lsquo;He ate more than the Carpenter, though,&rsquo; said Tweedledee. &lsquo;You see he
		      held his handkerchief in front, so that the Carpenter couldn&rsquo;t count how
		      many he took: contrariwise.&rsquo;
		    </p>
		    <p>
		      &lsquo;That was mean!&rsquo; Alice said indignantly. &lsquo;Then I like the Carpenter best&mdash;if
		      he didn&rsquo;t eat so many as the Walrus.&rsquo;
		    </p>
		    <p>
		      &lsquo;But he ate as many as he could get,&rsquo; said Tweedledum.
		    </p>
		    <p>
		      This was a puzzler. After a pause, Alice began, &lsquo;Well! They were <i>both</i> very
		      unpleasant characters&mdash;&rsquo; Here she checked herself in some alarm, at
		      hearing something that sounded to her like the puffing of a large
		      steam-engine in the wood near them, though she feared it was more likely
		      to be a wild beast. &lsquo;Are there any lions or tigers about here?&rsquo; she asked
		      timidly.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s only the Red King snoring,&rsquo; said Tweedledee.
		    </p>
		    <p>
		      &lsquo;Come and look at him!&rsquo; the brothers cried, and they each took one of
		      Alice&rsquo;s hands, and led her up to where the King was sleeping.
		    </p>
		    <p>
		      &lsquo;Isn&rsquo;t he a <i>lovely</i> sight?&rsquo; said Tweedledum.
		    </p>
		    <p>
		      Alice couldn&rsquo;t say honestly that he was. He had a tall red night-cap on,
		      with a tassel, and he was lying crumpled up into a sort of untidy heap,
		      and snoring loud&mdash;&lsquo;fit to snore his head off!&rsquo; as Tweedledum
		      remarked.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid he&rsquo;ll catch cold with lying on the damp grass,&rsquo; said Alice,
		      who was a very thoughtful little girl.
		    </p>
		    <p>
		      &lsquo;He&rsquo;s dreaming now,&rsquo; said Tweedledee: &lsquo;and what do you think he&rsquo;s dreaming
		      about?&rsquo;
		    </p>
		    <p>
		      Alice said &lsquo;Nobody can guess that.&rsquo;
		    </p>
		    <p>
		      &lsquo;Why, about <i>you</i>!&rsquo; Tweedledee exclaimed, clapping his hands triumphantly.
		      &lsquo;And if he left off dreaming about you, where do you suppose you&rsquo;d be?&rsquo;
		    </p>
		    <p>
		      &lsquo;Where I am now, of course,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Not you!&rsquo; Tweedledee retorted contemptuously. &lsquo;You&rsquo;d be nowhere. Why,
		      you&rsquo;re only a sort of thing in his dream!&rsquo;
		    </p>
		    <p>
		      &lsquo;If that there King was to wake,&rsquo; added Tweedledum, &lsquo;you&rsquo;d go out&mdash;bang!&mdash;just
		      like a candle!&rsquo;
		    </p>
		    <p>
		      &lsquo;I shouldn&rsquo;t!&rsquo; Alice exclaimed indignantly. &lsquo;Besides, if <i>I&rsquo;m</i> only a sort
		      of thing in his dream, what are <i>you</i>, I should like to know?&rsquo;
		    </p>
		    <p>
		      &lsquo;Ditto&rsquo; said Tweedledum.
		    </p>
		    <p>
		      &lsquo;Ditto, ditto&rsquo; cried Tweedledee.
		    </p>
		    <p>
		      He shouted this so loud that Alice couldn&rsquo;t help saying, &lsquo;Hush! You&rsquo;ll be
		      waking him, I&rsquo;m afraid, if you make so much noise.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it no use <i>your</i> talking about waking him,&rsquo; said Tweedledum, &lsquo;when
		      you&rsquo;re only one of the things in his dream. You know very well you&rsquo;re not
		      real.&rsquo;
		    </p>
		    <p>
		      &lsquo;I <i>am</i> real!&rsquo; said Alice and began to cry.
		    </p>
		    <p>
		      &lsquo;You won&rsquo;t make yourself a bit realler by crying,&rsquo; Tweedledee remarked:
		      &lsquo;there&rsquo;s nothing to cry about.&rsquo;
		    </p>
		    <p>
		      &lsquo;If I wasn&rsquo;t real,&rsquo; Alice said&mdash;half-laughing through her tears, it
		      all seemed so ridiculous&mdash;&lsquo;I shouldn&rsquo;t be able to cry.&rsquo;
		    </p>
		    <p>
		      &lsquo;I hope you don&rsquo;t suppose those are real tears?&rsquo; Tweedledum interrupted in
		      a tone of great contempt.
		    </p>
		    <p>
		      &lsquo;I know they&rsquo;re talking nonsense,&rsquo; Alice thought to herself: &lsquo;and it&rsquo;s
		      foolish to cry about it.&rsquo; So she brushed away her tears, and went on as
		      cheerfully as she could. &lsquo;At any rate I&rsquo;d better be getting out of the
		      wood, for really it&rsquo;s coming on very dark. Do you think it&rsquo;s going to
		      rain?&rsquo;
		    </p>
		    <p>
		      Tweedledum spread a large umbrella over himself and his brother, and
		      looked up into it. &lsquo;No, I don&rsquo;t think it is,&rsquo; he said: &lsquo;at least&mdash;not
		      under <i>here</i>. Nohow.&rsquo;
		    </p>
		    <p>
		      &lsquo;But it may rain <i>outside</i>?&rsquo;
		    </p>
		    <p>
		      &lsquo;It may&mdash;if it chooses,&rsquo; said Tweedledee: &lsquo;we&rsquo;ve no objection.
		      Contrariwise.&rsquo;
		    </p>
		    <p>
		      &lsquo;Selfish things!&rsquo; thought Alice, and she was just going to say
		      &lsquo;Good-night&rsquo; and leave them, when Tweedledum sprang out from under the
		      umbrella and seized her by the wrist.
		    </p>
		    <p>
		      &lsquo;Do you see <i>that</i>?&rsquo; he said, in a voice choking with passion, and his eyes
		      grew large and yellow all in a moment, as he pointed with a trembling
		      finger at a small white thing lying under the tree.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s only a rattle,&rsquo; Alice said, after a careful examination of the
		      little white thing. &lsquo;Not a rattle-<i>snake</i>, you know,&rsquo; she added hastily,
		      thinking that he was frightened: &lsquo;only an old rattle&mdash;quite old and
		      broken.&rsquo;
		    </p>
		    <p>
		      &lsquo;I knew it was!&rsquo; cried Tweedledum, beginning to stamp about wildly and
		      tear his hair. &lsquo;It&rsquo;s spoilt, of course!&rsquo; Here he looked at Tweedledee, who
		      immediately sat down on the ground, and tried to hide himself under the
		      umbrella.
		    </p>
		    <p>
		      Alice laid her hand upon his arm, and said in a soothing tone, &lsquo;You
		      needn&rsquo;t be so angry about an old rattle.&rsquo;
		    </p>
		    <p>
		      &lsquo;But it isn&rsquo;t old!&rsquo; Tweedledum cried, in a greater fury than ever. &lsquo;It&rsquo;s
		      new, I tell you&mdash;I bought it yesterday&mdash;my nice new RATTLE!&rsquo; and
		      his voice rose to a perfect scream.
		    </p>
		    <p>
		      All this time Tweedledee was trying his best to fold up the umbrella, with
		      himself in it: which was such an extraordinary thing to do, that it quite
		      took off Alice&rsquo;s attention from the angry brother. But he couldn&rsquo;t quite
		      succeed, and it ended in his rolling over, bundled up in the umbrella,
		      with only his head out: and there he lay, opening and shutting his mouth
		      and his large eyes&mdash;&lsquo;looking more like a fish than anything else,&rsquo;
		      Alice thought.
		    </p>
		    <p>
		      &lsquo;Of course you agree to have a battle?&rsquo; Tweedledum said in a calmer tone.
		    </p>
		    <p>
		      &lsquo;I suppose so,&rsquo; the other sulkily replied, as he crawled out of the
		      umbrella: &lsquo;only <i>she</i> must help us to dress up, you know.&rsquo;
		    </p>
		    <p>
		      So the two brothers went off hand-in-hand into the wood, and returned in a
		      minute with their arms full of things&mdash;such as bolsters, blankets,
		      hearth-rugs, table-cloths, dish-covers and coal-scuttles. &lsquo;I hope you&rsquo;re a
		      good hand at pinning and tying strings?&rsquo; Tweedledum remarked. &lsquo;Every one
		      of these things has got to go on, somehow or other.&rsquo;
		    </p>
		    <p>
		      Alice said afterwards she had never seen such a fuss made about anything
		      in all her life&mdash;the way those two bustled about&mdash;and the
		      quantity of things they put on&mdash;and the trouble they gave her in
		      tying strings and fastening buttons&mdash;&lsquo;Really they&rsquo;ll be more like
		      bundles of old clothes than anything else, by the time they&rsquo;re ready!&rsquo; she
		      said to herself, as she arranged a bolster round the neck of Tweedledee,
		      &lsquo;to keep his head from being cut off,&rsquo; as he said.
		    </p>
		    <p>
		      &lsquo;You know,&rsquo; he added very gravely, &lsquo;it&rsquo;s one of the most serious things
		      that can possibly happen to one in a battle&mdash;to get one&rsquo;s head cut
		      off.&rsquo;
		    </p>
		    <p>
		      Alice laughed aloud: but she managed to turn it into a cough, for fear of
		      hurting his feelings.
		    </p>
		    <p>
		      &lsquo;Do I look very pale?&rsquo; said Tweedledum, coming up to have his helmet tied
		      on. (He <i>called</i> it a helmet, though it certainly looked much more like a
		      saucepan.)
		    </p>
		    <p>
		      &lsquo;Well&mdash;yes&mdash;a <i>little</i>,&rsquo; Alice replied gently.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m very brave generally,&rsquo; he went on in a low voice: &lsquo;only to-day I
		      happen to have a headache.&rsquo;
		    </p>
		    <p>
		      &lsquo;And <i>I&rsquo;ve</i> got a toothache!&rsquo; said Tweedledee, who had overheard the remark.
		      &lsquo;I&rsquo;m far worse off than you!&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you&rsquo;d better not fight to-day,&rsquo; said Alice, thinking it a good
		      opportunity to make peace.
		    </p>
		    <p>
		      &lsquo;We <i>must</i> have a bit of a fight, but I don&rsquo;t care about going on long,&rsquo;
		      said Tweedledum. &lsquo;What&rsquo;s the time now?&rsquo;
		    </p>
		    <p>
		      Tweedledee looked at his watch, and said &lsquo;Half-past four.&rsquo;
		    </p>
		    <p>
		      &lsquo;Let&rsquo;s fight till six, and then have dinner,&rsquo; said Tweedledum.
		    </p>
		    <p>
		      &lsquo;Very well,&rsquo; the other said, rather sadly: &lsquo;and <i>she</i> can watch us&mdash;only
		      you&rsquo;d better not come <i>very</i> close,&rsquo; he added: &lsquo;I generally hit everything I
		      can see&mdash;when I get really excited.&rsquo;
		    </p>
		    <p>
		      &lsquo;And <i>I</i> hit everything within reach,&rsquo; cried Tweedledum, &lsquo;whether I
		      can see it or not!&rsquo;
		    </p>
		    <p>
		      Alice laughed. &lsquo;You must hit the <i>trees</i> pretty often, I should think,&rsquo; she
		      said.
		    </p>
		    <p>
		      Tweedledum looked round him with a satisfied smile. &lsquo;I don&rsquo;t suppose,&rsquo; he
		      said, &lsquo;there&rsquo;ll be a tree left standing, for ever so far round, by the
		      time we&rsquo;ve finished!&rsquo;
		    </p>
		    <p>
		      &lsquo;And all about a rattle!&rsquo; said Alice, still hoping to make them a <i>little</i>
		      ashamed of fighting for such a trifle.
		    </p>
		    <p>
		      &lsquo;I shouldn&rsquo;t have minded it so much,&rsquo; said Tweedledum, &lsquo;if it hadn&rsquo;t been
		      a new one.&rsquo;
		    </p>
		    <p>
		      &lsquo;I wish the monstrous crow would come!&rsquo; thought Alice.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s only one sword, you know,&rsquo; Tweedledum said to his brother: &lsquo;but
		      you can have the umbrella&mdash;it&rsquo;s quite as sharp. Only we must begin
		      quick. It&rsquo;s getting as dark as it can.&rsquo;
		    </p>
		    <p>
		      &lsquo;And darker,&rsquo; said Tweedledee.
		    </p>
		    <p>
		      It was getting dark so suddenly that Alice thought there must be a
		      thunderstorm coming on. &lsquo;What a thick black cloud that is!&rsquo; she said. &lsquo;And
		      how fast it comes! Why, I do believe it&rsquo;s got wings!&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s the crow!&rsquo; Tweedledum cried out in a shrill voice of alarm: and the
		      two brothers took to their heels and were out of sight in a moment.
		    </p>
		    <p>
		      Alice ran a little way into the wood, and stopped under a large tree. &lsquo;It
		      can never get at me <i>here</i>,&rsquo; she thought: &lsquo;it&rsquo;s far too large to squeeze
		      itself in among the trees. But I wish it wouldn&rsquo;t flap its wings so&mdash;it
		      makes quite a hurricane in the wood&mdash;here&rsquo;s somebody&rsquo;s shawl being
		      blown away!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Wool and Water",
			'number' => "Five",
			'order' => 5,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      She caught the shawl as she spoke, and looked about for the owner: in
		      another moment the White Queen came running wildly through the wood, with
		      both arms stretched out wide, as if she were flying, and Alice very
		      civilly went to meet her with the shawl.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m very glad I happened to be in the way,&rsquo; Alice said, as she helped her
		      to put on her shawl again.
		    </p>
		    <p>
		      The White Queen only looked at her in a helpless frightened sort of way,
		      and kept repeating something in a whisper to herself that sounded like
		      &lsquo;bread-and-butter, bread-and-butter,&rsquo; and Alice felt that if there was to
		      be any conversation at all, she must manage it herself. So she began
		      rather timidly: &lsquo;Am I addressing the White Queen?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, yes, if you call that a-dressing,&rsquo; The Queen said. &lsquo;It isn&rsquo;t <i>my</i>
		      notion of the thing, at all.&rsquo;
		    </p>
		    <p>
		      Alice thought it would never do to have an argument at the very beginning
		      of their conversation, so she smiled and said, &lsquo;If your Majesty will only
		      tell me the right way to begin, I&rsquo;ll do it as well as I can.&rsquo;
		    </p>
		    <p>
		      &lsquo;But I don&rsquo;t want it done at all!&rsquo; groaned the poor Queen. &lsquo;I&rsquo;ve been
		      a-dressing myself for the last two hours.&rsquo;
		    </p>
		    <p>
		      It would have been all the better, as it seemed to Alice, if she had got
		      some one else to dress her, she was so dreadfully untidy. &lsquo;Every single
		      thing&rsquo;s crooked,&rsquo; Alice thought to herself, &lsquo;and she&rsquo;s all over pins!&mdash;may
		      I put your shawl straight for you?&rsquo; she added aloud.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what&rsquo;s the matter with it!&rsquo; the Queen said, in a melancholy
		      voice. &lsquo;It&rsquo;s out of temper, I think. I&rsquo;ve pinned it here, and I&rsquo;ve pinned
		      it there, but there&rsquo;s no pleasing it!&rsquo;
		    </p>
		    <p>
		      &lsquo;It <i>can&rsquo;t</i> go straight, you know, if you pin it all on one side,&rsquo; Alice
		      said, as she gently put it right for her; &lsquo;and, dear me, what a state your
		      hair is in!&rsquo;
		    </p>
		    <p>
		      &lsquo;The brush has got entangled in it!&rsquo; the Queen said with a sigh. &lsquo;And I
		      lost the comb yesterday.&rsquo;
		    </p>
		    <p>
		      Alice carefully released the brush, and did her best to get the hair into
		      order. &lsquo;Come, you look rather better now!&rsquo; she said, after altering most
		      of the pins. &lsquo;But really you should have a lady&rsquo;s maid!&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m sure I&rsquo;ll take you with pleasure!&rsquo; the Queen said. &lsquo;Twopence a week,
		      and jam every other day.&rsquo;
		    </p>
		    <p>
		      Alice couldn&rsquo;t help laughing, as she said, &lsquo;I don&rsquo;t want you to hire <i>me</i>&mdash;and
		      I don&rsquo;t care for jam.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s very good jam,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;Well, I don&rsquo;t want any <i>to-day</i>, at any rate.&rsquo;
		    </p>
		    <p>
		      &lsquo;You couldn&rsquo;t have it if you <i>did</i> want it,&rsquo; the Queen said. &lsquo;The rule is,
		      jam to-morrow and jam yesterday&mdash;but never jam to-day.&rsquo;
		    </p>
		    <p>
		      &lsquo;It <i>must</i> come sometimes to &ldquo;jam to-day,&rdquo;&rsquo; Alice objected.
		    </p>
		    <p>
		      &lsquo;No, it can&rsquo;t,&rsquo; said the Queen. &lsquo;It&rsquo;s jam every <i>other</i> day: to-day isn&rsquo;t
		      any <i>other</i> day, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t understand you,&rsquo; said Alice. &lsquo;It&rsquo;s dreadfully confusing!&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the effect of living backwards,&rsquo; the Queen said kindly: &lsquo;it always
		      makes one a little giddy at first&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Living backwards!&rsquo; Alice repeated in great astonishment. &lsquo;I never heard
		      of such a thing!&rsquo;
		    </p>
		    <p>
		      &lsquo;&mdash;but there&rsquo;s one great advantage in it, that one&rsquo;s memory works
		      both ways.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m sure <i>mine</i> only works one way,&rsquo; Alice remarked. &lsquo;I can&rsquo;t remember
		      things before they happen.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a poor sort of memory that only works backwards,&rsquo; the Queen
		      remarked.
		    </p>
		    <p>
		      &lsquo;What sort of things do <i>you</i> remember best?&rsquo; Alice ventured to ask.
		    </p>
		    <p>
		      &lsquo;Oh, things that happened the week after next,&rsquo; the Queen replied in a
		      careless tone. &lsquo;For instance, now,&rsquo; she went on, sticking a large piece of
		      plaster on her finger as she spoke, &lsquo;there&rsquo;s the King&rsquo;s
		      Messenger. He&rsquo;s in prison now, being punished: and the trial doesn&rsquo;t even
		      begin till next Wednesday: and of course the crime comes last of all.&rsquo;
		    </p>
		    <p>
		      &lsquo;Suppose he never commits the crime?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;That would be all the better, wouldn&rsquo;t it?&rsquo; the Queen said, as she bound
		      the plaster round her finger with a bit of ribbon.
		    </p>
		    <p>
		      Alice felt there was no denying <i>that</i>. &lsquo;Of course it would be all the
		      better,&rsquo; she said: &lsquo;but it wouldn&rsquo;t be all the better his being punished.&rsquo;
		    </p>
		    <p>
		      &lsquo;You&rsquo;re wrong <i>there</i>, at any rate,&rsquo; said the Queen: &lsquo;were <i>you</i> ever
		      punished?&rsquo;
		    </p>
		    <p>
		      &lsquo;Only for faults,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;And you were all the better for it, I know!&rsquo; the Queen said triumphantly.
		    </p>
		    <p>
		      &lsquo;Yes, but then I <i>had</i> done the things I was punished for,&rsquo; said Alice:
		      &lsquo;that makes all the difference.&rsquo;
		    </p>
		    <p>
		      &lsquo;But if you <i>hadn&rsquo;t</i> done them,&rsquo; the Queen said, &lsquo;that would have been
		      better still; better, and better, and better!&rsquo; Her voice went higher with
		      each &lsquo;better,&rsquo; till it got quite to a squeak at last.
		    </p>
		    <p>
		      Alice was just beginning to say &lsquo;There&rsquo;s a mistake somewhere&mdash;,&rsquo; when
		      the Queen began screaming so loud that she had to leave the sentence
		      unfinished. &lsquo;Oh, oh, oh!&rsquo; shouted the Queen, shaking her hand about as if
		      she wanted to shake it off. &lsquo;My finger&rsquo;s bleeding! Oh, oh, oh, oh!&rsquo;
		    </p>
		    <p>
		      Her screams were so exactly like the whistle of a steam-engine, that Alice
		      had to hold both her hands over her ears.
		    </p>
		    <p>
		      &lsquo;What <i>is</i> the matter?&rsquo; she said, as soon as there was a chance of making
		      herself heard. &lsquo;Have you pricked your finger?&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t pricked it <i>yet</i>,&rsquo; the Queen said, &lsquo;but I soon shall&mdash;oh,
		      oh, oh!&rsquo;
		    </p>
		    <p>
		      &lsquo;When do you expect to do it?&rsquo; Alice asked, feeling very much inclined to
		      laugh.
		    </p>
		    <p>
		      &lsquo;When I fasten my shawl again,&rsquo; the poor Queen groaned out: &lsquo;the brooch
		      will come undone directly. Oh, oh!&rsquo; As she said the words the brooch flew
		      open, and the Queen clutched wildly at it, and tried to clasp it again.
		    </p>
		    <p>
		      &lsquo;Take care!&rsquo; cried Alice. &lsquo;You&rsquo;re holding it all crooked!&rsquo; And she caught
		      at the brooch; but it was too late: the pin had slipped, and the Queen had
		      pricked her finger.
		    </p>
		    <p>
		      &lsquo;That accounts for the bleeding, you see,&rsquo; she said to Alice with a smile.
		      &lsquo;Now you understand the way things happen here.&rsquo;
		    </p>
		    <p>
		      &lsquo;But why don&rsquo;t you scream now?&rsquo; Alice asked, holding her hands ready to
		      put over her ears again.
		    </p>
		    <p>
		      &lsquo;Why, I&rsquo;ve done all the screaming already,&rsquo; said the Queen. &lsquo;What would be
		      the good of having it all over again?&rsquo;
		    </p>
		    <p>
		      By this time it was getting light. &lsquo;The crow must have flown away, I
		      think,&rsquo; said Alice: &lsquo;I&rsquo;m so glad it&rsquo;s gone. I thought it was the night
		      coming on.&rsquo;
		    </p>
		    <p>
		      &lsquo;I wish <i>I</i> could manage to be glad!&rsquo; the Queen said. &lsquo;Only I never
		      can remember the rule. You must be very happy, living in this wood, and
		      being glad whenever you like!&rsquo;
		    </p>
		    <p>
		      &lsquo;Only it is so <i>very</i> lonely here!&rsquo; Alice said in a melancholy voice; and at
		      the thought of her loneliness two large tears came rolling down her
		      cheeks.
		    </p>
		    <p>
		      &lsquo;Oh, don&rsquo;t go on like that!&rsquo; cried the poor Queen, wringing her hands in
		      despair. &lsquo;Consider what a great girl you are. Consider what a long way
		      you&rsquo;ve come to-day. Consider what o&rsquo;clock it is. Consider anything, only
		      don&rsquo;t cry!&rsquo;
		    </p>
		    <p>
		      Alice could not help laughing at this, even in the midst of her tears.
		      &lsquo;Can <i>you</i> keep from crying by considering things?&rsquo; she asked.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s the way it&rsquo;s done,&rsquo; the Queen said with great decision: &lsquo;nobody
		      can do two things at once, you know. Let&rsquo;s consider your age to begin with&mdash;how
		      old are you?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m seven and a half exactly.&rsquo;
		    </p>
		    <p>
		      &lsquo;You needn&rsquo;t say &ldquo;exactually,&rdquo;&rsquo; the Queen remarked: &lsquo;I can believe it
		      without that. Now I&rsquo;ll give <i>you</i> something to believe. I&rsquo;m just one hundred
		      and one, five months and a day.&rsquo;
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t believe <i>that</i>!&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Can&rsquo;t you?&rsquo; the Queen said in a pitying tone. &lsquo;Try again: draw a long
		      breath, and shut your eyes.&rsquo;
		    </p>
		    <p>
		      Alice laughed. &lsquo;There&rsquo;s no use trying,&rsquo; she said: &lsquo;one <i>can&rsquo;t</i> believe
		      impossible things.&rsquo;
		    </p>
		    <p>
		      &lsquo;I daresay you haven&rsquo;t had much practice,&rsquo; said the Queen. &lsquo;When I was
		      your age, I always did it for half-an-hour a day. Why, sometimes I&rsquo;ve
		      believed as many as six impossible things before breakfast. There goes the
		      shawl again!&rsquo;
		    </p>
		    <p>
		      The brooch had come undone as she spoke, and a sudden gust of wind blew
		      the Queen&rsquo;s shawl across a little brook. The Queen spread out her arms
		      again, and went flying after it, and this time she succeeded in catching
		      it for herself. &lsquo;I&rsquo;ve got it!&rsquo; she cried in a triumphant tone. &lsquo;Now you
		      shall see me pin it on again, all by myself!&rsquo;
		    </p>
		    <p>
		      &lsquo;Then I hope your finger is better now?&rsquo; Alice said very politely, as she
		      crossed the little brook after the Queen.
		    </p>
		    <p class='tlg-separator'>
			  *****
		    </p>
		    <p>
		      &lsquo;Oh, much better!&rsquo; cried the Queen, her voice rising to a squeak as she
		      went on. &lsquo;Much be-etter! Be-etter! Be-e-e-etter! Be-e-ehh!&rsquo; The last word
		      ended in a long bleat, so like a sheep that Alice quite started.
		    </p>
		    <p>
		      She looked at the Queen, who seemed to have suddenly wrapped herself up in
		      wool. Alice rubbed her eyes, and looked again. She couldn&rsquo;t make out what
		      had happened at all. Was she in a shop? And was that really&mdash;was it
		      really a <i>sheep</i> that was sitting on the other side of the counter? Rub as
		      she could, she could make nothing more of it: she was in a little dark
		      shop, leaning with her elbows on the counter, and opposite to her was an
		      old Sheep, sitting in an arm-chair knitting, and every now and then
		      leaving off to look at her through a great pair of spectacles.
		    </p>
		    <p>
		      &lsquo;What is it you want to buy?&rsquo; the Sheep said at last, looking up for a
		      moment from her knitting.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t <i>quite</i> know yet,&rsquo; Alice said, very gently. &lsquo;I should like to look
		      all round me first, if I might.&rsquo;
		    </p>
		    <p>
		      &lsquo;You may look in front of you, and on both sides, if you like,&rsquo; said the
		      Sheep: &lsquo;but you can&rsquo;t look <i>all</i> round you&mdash;unless you&rsquo;ve got eyes at
		      the back of your head.&rsquo;
		    </p>
		    <p>
		      But these, as it happened, Alice had <i>not</i> got: so she contented herself
		      with turning round, looking at the shelves as she came to them.
		    </p>
		    <p>
		      The shop seemed to be full of all manner of curious things&mdash;but the
		      oddest part of it all was, that whenever she looked hard at any shelf, to
		      make out exactly what it had on it, that particular shelf was always quite
		      empty: though the others round it were crowded as full as they could hold.
		    </p>
		    <p>
		      &lsquo;Things flow about so here!&rsquo; she said at last in a plaintive tone, after
		      she had spent a minute or so in vainly pursuing a large bright thing, that
		      looked sometimes like a doll and sometimes like a work-box, and was always
		      in the shelf next above the one she was looking at. &lsquo;And this one is the
		      most provoking of all&mdash;but I&rsquo;ll tell you what&mdash;&rsquo; she added, as a
		      sudden thought struck her, &lsquo;I&rsquo;ll follow it up to the very top shelf of
		      all. It&rsquo;ll puzzle it to go through the ceiling, I expect!&rsquo;
		    </p>
		    <p>
		      But even this plan failed: the &lsquo;thing&rsquo; went through the ceiling as quietly
		      as possible, as if it were quite used to it.
		    </p>
		    <p>
		      &lsquo;Are you a child or a teetotum?&rsquo; the Sheep said, as she took up another
		      pair of needles. &lsquo;You&rsquo;ll make me giddy soon, if you go on turning round
		      like that.&rsquo; She was now working with fourteen pairs at once, and Alice
		      couldn&rsquo;t help looking at her in great astonishment.
		    </p>
		    <p>
		      &lsquo;How <i>can</i> she knit with so many?&rsquo; the puzzled child thought to herself.
		      &lsquo;She gets more and more like a porcupine every minute!&rsquo;
		    </p>
		    <p>
		      &lsquo;Can you row?&rsquo; the Sheep asked, handing her a pair of knitting-needles as
		      she spoke.
		    </p>
		    <p>
		      &lsquo;Yes, a little&mdash;but not on land&mdash;and not with needles&mdash;&rsquo;
		      Alice was beginning to say, when suddenly the needles turned into oars in
		      her hands, and she found they were in a little boat, gliding along between
		      banks: so there was nothing for it but to do her best.
		    </p>
		    <p>
		      &lsquo;Feather!&rsquo; cried the Sheep, as she took up another pair of needles.
		    </p>
		    <p>
		      This didn&rsquo;t sound like a remark that needed any answer, so Alice said
		      nothing, but pulled away. There was something very queer about the water,
		      she thought, as every now and then the oars got fast in it, and would
		      hardly come out again.
		    </p>
		    <p>
		      &lsquo;Feather! Feather!&rsquo; the Sheep cried again, taking more needles. &lsquo;You&rsquo;ll be
		      catching a crab directly.&rsquo;
		    </p>
		    <p>
		      &lsquo;A dear little crab!&rsquo; thought Alice. &lsquo;I should like that.&rsquo;
		    </p>
		    <p>
		      &lsquo;Didn&rsquo;t you hear me say &ldquo;Feather&rdquo;?&rsquo; the Sheep cried angrily, taking up
		      quite a bunch of needles.
		    </p>
		    <p>
		      &lsquo;Indeed I did,&rsquo; said Alice: &lsquo;you&rsquo;ve said it very often&mdash;and very
		      loud. Please, where <i>are</i> the crabs?&rsquo;
		    </p>
		    <p>
		      &lsquo;In the water, of course!&rsquo; said the Sheep, sticking some of the needles
		      into her hair, as her hands were full. &lsquo;Feather, I say!&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>Why</i> do you say &ldquo;feather&rdquo; so often?&rsquo; Alice asked at last, rather vexed.
		      &lsquo;I&rsquo;m not a bird!&rsquo;
		    </p>
		    <p>
		      &lsquo;You are,&rsquo; said the Sheep: &lsquo;you&rsquo;re a little goose.&rsquo;
		    </p>
		    <p>
		      This offended Alice a little, so there was no more conversation for a
		      minute or two, while the boat glided gently on, sometimes among beds of
		      weeds (which made the oars stick fast in the water, worse then ever), and
		      sometimes under trees, but always with the same tall river-banks frowning
		      over their heads.
		    </p>
		    <p>
		      &lsquo;Oh, please! There are some scented rushes!&rsquo; Alice cried in a sudden
		      transport of delight. &lsquo;There really are&mdash;and <i>such</i> beauties!&rsquo;
		    </p>
		    <p>
		      &lsquo;You needn&rsquo;t say &ldquo;please&rdquo; to <i>me</i> about &lsquo;em,&rsquo; the Sheep said, without
		      looking up from her knitting: &lsquo;I didn&rsquo;t put &lsquo;em there, and I&rsquo;m not going
		      to take &lsquo;em away.&rsquo;
		    </p>
		    <p>
		      &lsquo;No, but I meant&mdash;please, may we wait and pick some?&rsquo; Alice pleaded.
		      &lsquo;If you don&rsquo;t mind stopping the boat for a minute.&rsquo;
		    </p>
		    <p>
		      &lsquo;How am <i>I</i> to stop it?&rsquo; said the Sheep. &lsquo;If you leave off rowing,
		      it&rsquo;ll stop of itself.&rsquo;
		    </p>
		    <p>
		      So the boat was left to drift down the stream as it would, till it glided
		      gently in among the waving rushes. And then the little sleeves were
		      carefully rolled up, and the little arms were plunged in elbow-deep to get
		      the rushes a good long way down before breaking them off&mdash;and for a
		      while Alice forgot all about the Sheep and the knitting, as she bent over
		      the side of the boat, with just the ends of her tangled hair dipping into
		      the water&mdash;while with bright eager eyes she caught at one bunch after
		      another of the darling scented rushes.
		    </p>
		    <p>
		      &lsquo;I only hope the boat won&rsquo;t tipple over!&rsquo; she said to herself. &lsquo;Oh, <i>what</i> a
		      lovely one! Only I couldn&rsquo;t quite reach it.&rsquo; &lsquo;And it certainly <i>did</i> seem a
		      little provoking (&lsquo;almost as if it happened on purpose,&rsquo; she thought)
		      that, though she managed to pick plenty of beautiful rushes as the boat
		      glided by, there was always a more lovely one that she couldn&rsquo;t reach.
		    </p>
		    <p>
		      &lsquo;The prettiest are always further!&rsquo; she said at last, with a sigh at the
		      obstinacy of the rushes in growing so far off, as, with flushed cheeks and
		      dripping hair and hands, she scrambled back into her place, and began to
		      arrange her new-found treasures.
		    </p>
		    <p>
		      What mattered it to her just then that the rushes had begun to fade, and
		      to lose all their scent and beauty, from the very moment that she picked
		      them? Even real scented rushes, you know, last only a very little while&mdash;and
		      these, being dream-rushes, melted away almost like snow, as they lay in
		      heaps at her feet&mdash;but Alice hardly noticed this, there were so many
		      other curious things to think about.
		    </p>
		    <p>
		      They hadn&rsquo;t gone much farther before the blade of one of the oars got fast
		      in the water and <i>wouldn&rsquo;t</i> come out again (so Alice explained it
		      afterwards), and the consequence was that the handle of it caught her
		      under the chin, and, in spite of a series of little shrieks of &lsquo;Oh, oh,
		      oh!&rsquo; from poor Alice, it swept her straight off the seat, and down among
		      the heap of rushes.
		    </p>
		    <p>
		      However, she wasn&rsquo;t hurt, and was soon up again: the Sheep went on with
		      her knitting all the while, just as if nothing had happened. &lsquo;That was a
		      nice crab you caught!&rsquo; she remarked, as Alice got back into her place,
		      very much relieved to find herself still in the boat.
		    </p>
		    <p>
		      &lsquo;Was it? I didn&rsquo;t see it,&rsquo; Said Alice, peeping cautiously over the side of
		      the boat into the dark water. &lsquo;I wish it hadn&rsquo;t let go&mdash;I should so
		      like to see a little crab to take home with me!&rsquo; But the Sheep only
		      laughed scornfully, and went on with her knitting.
		    </p>
		    <p>
		      &lsquo;Are there many crabs here?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Crabs, and all sorts of things,&rsquo; said the Sheep: &lsquo;plenty of choice, only
		      make up your mind. Now, what <i>do</i> you want to buy?&rsquo;
		    </p>
		    <p>
		      &lsquo;To buy!&rsquo; Alice echoed in a tone that was half astonished and half
		      frightened&mdash;for the oars, and the boat, and the river, had vanished
		      all in a moment, and she was back again in the little dark shop.
		    </p>
		    <p>
		      &lsquo;I should like to buy an egg, please,&rsquo; she said timidly. &lsquo;How do you sell
		      them?&rsquo;
		    </p>
		    <p>
		      &lsquo;Fivepence farthing for one&mdash;Twopence for two,&rsquo; the Sheep replied.
		    </p>
		    <p>
		      &lsquo;Then two are cheaper than one?&rsquo; Alice said in a surprised tone, taking
		      out her purse.
		    </p>
		    <p>
		      &lsquo;Only you <i>must</i> eat them both, if you buy two,&rsquo; said the Sheep.
		    </p>
		    <p>
		      &lsquo;Then I&rsquo;ll have <i>one</i>, please,&rsquo; said Alice, as she put the money down on the
		      counter. For she thought to herself, &lsquo;They mightn&rsquo;t be at all nice, you
		      know.&rsquo;
		    </p>
		    <p>
		      The Sheep took the money, and put it away in a box: then she said &lsquo;I never
		      put things into people&rsquo;s hands&mdash;that would never do&mdash;you must
		      get it for yourself.&rsquo; And so saying, she went off to the other end of the
		      shop, and set the egg upright on a shelf.
		    </p>
		    <p>
		      &lsquo;I wonder <i>why</i> it wouldn&rsquo;t do?&rsquo; thought Alice, as she groped her way among
		      the tables and chairs, for the shop was very dark towards the end. &lsquo;The
		      egg seems to get further away the more I walk towards it. Let me see, is
		      this a chair? Why, it&rsquo;s got branches, I declare! How very odd to find
		      trees growing here! And actually here&rsquo;s a little brook! Well, this is the
		      very queerest shop I ever saw!&rsquo;
		    </p>
		    <p class='tlg-separator'>
			  *****
		    </p>
		    <p>
		      So she went on, wondering more and more at every step, as everything
		      turned into a tree the moment she came up to it, and she quite expected
		      the egg to do the same.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Humpty Dumpty",
			'number' => "Six",
			'order' => 6,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      However, the egg only got larger and larger, and more and more human: when
		      she had come within a few yards of it, she saw that it had eyes and a nose
		      and mouth; and when she had come close to it, she saw clearly that it was
		      HUMPTY DUMPTY himself. &lsquo;It can&rsquo;t be anybody else!&rsquo; she said to herself.
		      &lsquo;I&rsquo;m as certain of it, as if his name were written all over his face.&rsquo;
		    </p>
		    <p>
		      It might have been written a hundred times, easily, on that enormous face.
		      Humpty Dumpty was sitting with his legs crossed, like a Turk, on the top
		      of a high wall&mdash;such a narrow one that Alice quite wondered how he
		      could keep his balance&mdash;and, as his eyes were steadily fixed in the
		      opposite direction, and he didn&rsquo;t take the least notice of her, she
		      thought he must be a stuffed figure after all.
		    </p>
		    <p>
		      &lsquo;And how exactly like an egg he is!&rsquo; she said aloud, standing with her
		      hands ready to catch him, for she was every moment expecting him to fall.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s <i>very</i> provoking,&rsquo; Humpty Dumpty said after a long silence, looking
		      away from Alice as he spoke, &lsquo;to be called an egg&mdash;<i>Very!</i>&rsquo;
		    </p>
		    <p>
		      &lsquo;I said you <i>looked</i> like an egg, Sir,&rsquo; Alice gently explained. &lsquo;And some
		      eggs are very pretty, you know&rsquo; she added, hoping to turn her remark into
		      a sort of a compliment.
		    </p>
		    <p>
		      &lsquo;Some people,&rsquo; said Humpty Dumpty, looking away from her as usual, &lsquo;have
		      no more sense than a baby!&rsquo;
		    </p>
		    <p>
		      Alice didn&rsquo;t know what to say to this: it wasn&rsquo;t at all like conversation,
		      she thought, as he never said anything to <i>her</i>; in fact, his last remark
		      was evidently addressed to a tree&mdash;so she stood and softly repeated
		      to herself:&mdash;
		    </p>
		    <p class='tlg-humpty stanza'>
		     &lsquo;Humpty Dumpty sat on a wall:
		    <br>
		     Humpty Dumpty had a great fall.
		    <br>
		     All the King&rsquo;s horses and all the King&rsquo;s men
		    <br>
		     Couldn&rsquo;t put Humpty Dumpty in his place again.&rsquo;
		    </p>
		    <p>
		      &lsquo;That last line is much too long for the poetry,&rsquo; she added, almost out
		      loud, forgetting that Humpty Dumpty would hear her.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t stand there chattering to yourself like that,&rsquo; Humpty Dumpty said,
		      looking at her for the first time, &lsquo;but tell me your name and your
		      business.&rsquo;
		    </p>
		    <p>
		      &lsquo;My <i>name</i> is Alice, but&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a stupid enough name!&rsquo; Humpty Dumpty interrupted impatiently. &lsquo;What
		      does it mean?&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>Must</i> a name mean something?&rsquo; Alice asked doubtfully.
		    </p>
		    <p>
		      &lsquo;Of course it must,&rsquo; Humpty Dumpty said with a short laugh: &lsquo;<i>my</i> name means
		      the shape I am&mdash;and a good handsome shape it is, too. With a name
		      like yours, you might be any shape, almost.&rsquo;
		    </p>
		    <p>
		      &lsquo;Why do you sit out here all alone?&rsquo; said Alice, not wishing to begin an
		      argument.
		    </p>
		    <p>
		      &lsquo;Why, because there&rsquo;s nobody with me!&rsquo; cried Humpty Dumpty. &lsquo;Did you think
		      I didn&rsquo;t know the answer to <i>that</i>? Ask another.&rsquo;
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t you think you&rsquo;d be safer down on the ground?&rsquo; Alice went on, not
		      with any idea of making another riddle, but simply in her good-natured
		      anxiety for the queer creature. &lsquo;That wall is so <i>very</i> narrow!&rsquo;
		    </p>
		    <p>
		      &lsquo;What tremendously easy riddles you ask!&rsquo; Humpty Dumpty growled out. &lsquo;Of
		      course I don&rsquo;t think so! Why, if ever I <i>did</i> fall off&mdash;which there&rsquo;s
		      no chance of&mdash;but <i>if</i> I did&mdash;&rsquo; Here he pursed his lips and looked
		      so solemn and grand that Alice could hardly help laughing. &lsquo;<i>If</i> I did
		      fall,&rsquo; he went on, &lsquo;<i>The King has promised me&mdash;with his very own mouth</i>&mdash;to&mdash;to&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;To send all his horses and all his men,&rsquo; Alice interrupted, rather
		      unwisely.
		    </p>
		    <p>
		      &lsquo;Now I declare that&rsquo;s too bad!&rsquo; Humpty Dumpty cried, breaking into a
		      sudden passion. &lsquo;You&rsquo;ve been listening at doors&mdash;and behind trees&mdash;and
		      down chimneys&mdash;or you couldn&rsquo;t have known it!&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t, indeed!&rsquo; Alice said very gently. &lsquo;It&rsquo;s in a book.&rsquo;
		    </p>
		    <p>
		      &lsquo;Ah, well! They may write such things in a <i>book</i>,&rsquo; Humpty Dumpty said in a
		      calmer tone. &lsquo;That&rsquo;s what you call a History of England, that is. Now,
		      take a good look at me! I&rsquo;m one that has spoken to a King, <i>I</i> am:
		      mayhap you&rsquo;ll never see such another: and to show you I&rsquo;m not proud, you
		      may shake hands with me!&rsquo; And he grinned almost from ear to ear, as he
		      leant forwards (and as nearly as possible fell off the wall in doing so)
		      and offered Alice his hand. She watched him a little anxiously as she took
		      it. &lsquo;If he smiled much more, the ends of his mouth might meet behind,&rsquo; she
		      thought: &lsquo;and then I don&rsquo;t know what would happen to his head! I&rsquo;m afraid
		      it would come off!&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, all his horses and all his men,&rsquo; Humpty Dumpty went on. &lsquo;They&rsquo;d pick
		      me up again in a minute, <i>they</i> would! However, this conversation is going
		      on a little too fast: let&rsquo;s go back to the last remark but one.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I can&rsquo;t quite remember it,&rsquo; Alice said very politely.
		    </p>
		    <p>
		      &lsquo;In that case we start fresh,&rsquo; said Humpty Dumpty, &lsquo;and it&rsquo;s my turn to
		      choose a subject&mdash;&rsquo; (&lsquo;He talks about it just as if it was a game!&rsquo;
		      thought Alice.) &lsquo;So here&rsquo;s a question for you. How old did you say you
		      were?&rsquo;
		    </p>
		    <p>
		      Alice made a short calculation, and said &lsquo;Seven years and six months.&rsquo;
		    </p>
		    <p>
		      &lsquo;Wrong!&rsquo; Humpty Dumpty exclaimed triumphantly. &lsquo;You never said a word like
		      it!&rsquo;
		    </p>
		    <p>
		      &lsquo;I though you meant &ldquo;How old <i>are</i> you?&rdquo;&rsquo; Alice explained.
		    </p>
		    <p>
		      &lsquo;If I&rsquo;d meant that, I&rsquo;d have said it,&rsquo; said Humpty Dumpty.
		    </p>
		    <p>
		      Alice didn&rsquo;t want to begin another argument, so she said nothing.
		    </p>
		    <p>
		      &lsquo;Seven years and six months!&rsquo; Humpty Dumpty repeated thoughtfully. &lsquo;An
		      uncomfortable sort of age. Now if you&rsquo;d asked <i>my</i> advice, I&rsquo;d have said
		      &ldquo;Leave off at seven&rdquo;&mdash;but it&rsquo;s too late now.&rsquo;
		    </p>
		    <p>
		      &lsquo;I never ask advice about growing,&rsquo; Alice said indignantly.
		    </p>
		    <p>
		      &lsquo;Too proud?&rsquo; the other inquired.
		    </p>
		    <p>
		      Alice felt even more indignant at this suggestion. &lsquo;I mean,&rsquo; she said,
		      &lsquo;that one can&rsquo;t help growing older.&rsquo;
		    </p>
		    <p>
		      &lsquo;<i>One</i> can&rsquo;t, perhaps,&rsquo; said Humpty Dumpty, &lsquo;but <i>two</i> can. With proper
		      assistance, you might have left off at seven.&rsquo;
		    </p>
		    <p>
		      &lsquo;What a beautiful belt you&rsquo;ve got on!&rsquo; Alice suddenly remarked.
		    </p>
		    <p>
		      (They had had quite enough of the subject of age, she thought: and if they
		      really were to take turns in choosing subjects, it was her turn now.) &lsquo;At
		      least,&rsquo; she corrected herself on second thoughts, &lsquo;a beautiful cravat, I
		      should have said&mdash;no, a belt, I mean&mdash;I beg your pardon!&rsquo; she
		      added in dismay, for Humpty Dumpty looked thoroughly offended, and she
		      began to wish she hadn&rsquo;t chosen that subject. &lsquo;If I only knew,&rsquo; she
		      thought to herself, &lsquo;which was neck and which was waist!&rsquo;
		    </p>
		    <p>
		      Evidently Humpty Dumpty was very angry, though he said nothing for a
		      minute or two. When he <i>did</i> speak again, it was in a deep growl.
		    </p>
		    <p>
		      &lsquo;It is a&mdash;<i>most&mdash;provoking</i>&mdash;thing,&rsquo; he said at last, &lsquo;when a
		      person doesn&rsquo;t know a cravat from a belt!&rsquo;
		    </p>
		    <p>
		      &lsquo;I know it&rsquo;s very ignorant of me,&rsquo; Alice said, in so humble a tone that
		      Humpty Dumpty relented.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a cravat, child, and a beautiful one, as you say. It&rsquo;s a present
		      from the White King and Queen. There now!&rsquo;
		    </p>
		    <p>
		      &lsquo;Is it really?&rsquo; said Alice, quite pleased to find that she <i>had</i> chosen a
		      good subject, after all.
		    </p>
		    <p>
		      &lsquo;They gave it me,&rsquo; Humpty Dumpty continued thoughtfully, as he crossed one
		      knee over the other and clasped his hands round it, &lsquo;they gave it me&mdash;for
		      an un-birthday present.&rsquo;
		    </p>
		    <p>
		      &lsquo;I beg your pardon?&rsquo; Alice said with a puzzled air.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m not offended,&rsquo; said Humpty Dumpty.
		    </p>
		    <p>
		      &lsquo;I mean, what <i>is</i> an un-birthday present?&rsquo;
		    </p>
		    <p>
		      &lsquo;A present given when it isn&rsquo;t your birthday, of course.&rsquo;
		    </p>
		    <p>
		      Alice considered a little. &lsquo;I like birthday presents best,&rsquo; she said at
		      last.
		    </p>
		    <p>
		      &lsquo;You don&rsquo;t know what you&rsquo;re talking about!&rsquo; cried Humpty Dumpty. &lsquo;How many
		      days are there in a year?&rsquo;
		    </p>
		    <p>
		      &lsquo;Three hundred and sixty-five,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;And how many birthdays have you?&rsquo;
		    </p>
		    <p>
		      &lsquo;One.&rsquo;
		    </p>
		    <p>
		      &lsquo;And if you take one from three hundred and sixty-five, what remains?&rsquo;
		    </p>
		    <p>
		      &lsquo;Three hundred and sixty-four, of course.&rsquo;
		    </p>
		    <p>
		      Humpty Dumpty looked doubtful. &lsquo;I&rsquo;d rather see that done on paper,&rsquo; he
		      said.
		    </p>
		    <p>
		      Alice couldn&rsquo;t help smiling as she took out her memorandum-book, and
		      worked the sum for him:
		    </p>
		    <p class='tlg-sum'>
		               365
		    <br>
		                1
		    <br>
		               ____
		    <br>
		               364
		    <br>
		               ___
		    </p>
		    <p>
		      Humpty Dumpty took the book, and looked at it carefully. &lsquo;That seems to be
		      done right&mdash;&rsquo; he began.
		    </p>
		    <p>
		      &lsquo;You&rsquo;re holding it upside down!&rsquo; Alice interrupted.
		    </p>
		    <p>
		      &lsquo;To be sure I was!&rsquo; Humpty Dumpty said gaily, as she turned it round for
		      him. &lsquo;I thought it looked a little queer. As I was saying, that <i>seems</i> to
		      be done right&mdash;though I haven&rsquo;t time to look it over thoroughly just
		      now&mdash;and that shows that there are three hundred and sixty-four days
		      when you might get un-birthday presents&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Certainly,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;And only <i>one</i> for birthday presents, you know. There&rsquo;s glory for you!&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what you mean by &ldquo;glory,&rdquo;&rsquo; Alice said.
		    </p>
		    <p>
		      Humpty Dumpty smiled contemptuously. &lsquo;Of course you don&rsquo;t&mdash;till I
		      tell you. I meant &ldquo;there&rsquo;s a nice knock-down argument for you!&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;But &ldquo;glory&rdquo; doesn&rsquo;t mean &ldquo;a nice knock-down argument,&rdquo;&rsquo; Alice objected.
		    </p>
		    <p>
		      &lsquo;When <i>I</i> use a word,&rsquo; Humpty Dumpty said in rather a scornful tone,
		      &lsquo;it means just what I choose it to mean&mdash;neither more nor less.&rsquo;
		    </p>
		    <p>
		      &lsquo;The question is,&rsquo; said Alice, &lsquo;whether you <i>can</i> make words mean so many
		      different things.&rsquo;
		    </p>
		    <p>
		      &lsquo;The question is,&rsquo; said Humpty Dumpty, &lsquo;which is to be master&mdash;that&rsquo;s
		      all.&rsquo;
		    </p>
		    <p>
		      Alice was too much puzzled to say anything, so after a minute Humpty
		      Dumpty began again. &lsquo;They&rsquo;ve a temper, some of them&mdash;particularly
		      verbs, they&rsquo;re the proudest&mdash;adjectives you can do anything with, but
		      not verbs&mdash;however, <i>I</i> can manage the whole lot of them!
		      Impenetrability! That&rsquo;s what <i>I</i> say!&rsquo;
		    </p>
		    <p>
		      &lsquo;Would you tell me, please,&rsquo; said Alice &lsquo;what that means?&rsquo;
		    </p>
		    <p>
		      &lsquo;Now you talk like a reasonable child,&rsquo; said Humpty Dumpty, looking very
		      much pleased. &lsquo;I meant by &ldquo;impenetrability&rdquo; that we&rsquo;ve had enough of that
		      subject, and it would be just as well if you&rsquo;d mention what you mean to do
		      next, as I suppose you don&rsquo;t mean to stop here all the rest of your life.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;s a great deal to make one word mean,&rsquo; Alice said in a thoughtful
		      tone.
		    </p>
		    <p>
		      &lsquo;When I make a word do a lot of work like that,&rsquo; said Humpty Dumpty, &lsquo;I
		      always pay it extra.&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh!&rsquo; said Alice. She was too much puzzled to make any other remark.
		    </p>
		    <p>
		      &lsquo;Ah, you should see &lsquo;em come round me of a Saturday night,&rsquo; Humpty Dumpty
		      went on, wagging his head gravely from side to side: &lsquo;for to get their
		      wages, you know.&rsquo;
		    </p>
		    <p>
		      (Alice didn&rsquo;t venture to ask what he paid them with; and so you see I
		      can&rsquo;t tell <i>you</i>.)
		    </p>
		    <p>
		      &lsquo;You seem very clever at explaining words, Sir,&rsquo; said Alice. &lsquo;Would you
		      kindly tell me the meaning of the poem called &ldquo;Jabberwocky&rdquo;?&rsquo;
		    </p>
		    <p>
		      &lsquo;Let&rsquo;s hear it,&rsquo; said Humpty Dumpty. &lsquo;I can explain all the poems that
		      were ever invented&mdash;and a good many that haven&rsquo;t been invented just
		      yet.&rsquo;
		    </p>
		    <p>
		      This sounded very hopeful, so Alice repeated the first verse:
		    </p>
		    <p class='tlg-wabe stanza'>
		     &lsquo;Twas brillig, and the slithy toves
		    <br>
		      Did gyre and gimble in the wabe;
		    <br>
		     All mimsy were the borogoves,
		    <br>
		      And the mome raths outgrabe.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s enough to begin with,&rsquo; Humpty Dumpty interrupted: &lsquo;there are
		      plenty of hard words there. &ldquo;<i>Brillig</i>&rdquo; means four o&rsquo;clock in the afternoon&mdash;the
		      time when you begin <i>broiling</i> things for dinner.&rsquo;
		    </p>
		    <p>
		      &lsquo;That&rsquo;ll do very well,&rsquo; said Alice: &lsquo;and &ldquo;<i>slithy</i>&rdquo;?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, &ldquo;<i>slithy</i>&rdquo; means &ldquo;lithe and slimy.&rdquo; &ldquo;Lithe&rdquo; is the same as &ldquo;active.&rdquo;
		       You see it&rsquo;s like a portmanteau&mdash;there are two meanings packed up
		      into one word.&rsquo;
		    </p>
		    <p>
		      &lsquo;I see it now,&rsquo; Alice remarked thoughtfully: &lsquo;and what are &ldquo;<i>toves</i>&rdquo;?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, &ldquo;<i>toves</i>&rdquo; are something like badgers&mdash;they&rsquo;re something like
		      lizards&mdash;and they&rsquo;re something like corkscrews.&rsquo;
		    </p>
		    <p>
		      &lsquo;They must be very curious looking creatures.&rsquo;
		    </p>
		    <p>
		      &lsquo;They are that,&rsquo; said Humpty Dumpty: &lsquo;also they make their nests under
		      sun-dials&mdash;also they live on cheese.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what&rsquo;s the &ldquo;<i>gyre</i>&rdquo; and to &ldquo;<i>gimble</i>&rdquo;?&rsquo;
		    </p>
		    <p>
		      &lsquo;To &ldquo;<i>gyre</i>&rdquo; is to go round and round like a gyroscope. To &ldquo;<i>gimble</i>&rdquo; is to
		      make holes like a gimlet.&rsquo;
		    </p>
		    <p>
		      &lsquo;And &ldquo;<i>the wabe</i>&rdquo; is the grass-plot round a sun-dial, I suppose?&rsquo; said
		      Alice, surprised at her own ingenuity.
		    </p>
		    <p>
		      &lsquo;Of course it is. It&rsquo;s called &ldquo;<i>wabe</i>,&rdquo; you know, because it goes a long way
		      before it, and a long way behind it&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;And a long way beyond it on each side,&rsquo; Alice added.
		    </p>
		    <p>
		      &lsquo;Exactly so. Well, then, &ldquo;<i>mimsy</i>&rdquo; is &ldquo;flimsy and miserable&rdquo; (there&rsquo;s
		      another portmanteau for you). And a &ldquo;<i>borogove</i>&rdquo; is a thin shabby-looking
		      bird with its feathers sticking out all round&mdash;something like a live
		      mop.&rsquo;
		    </p>
		    <p>
		      &lsquo;And then &ldquo;<i>mome raths</i>&rdquo;?&rsquo; said Alice. &lsquo;I&rsquo;m afraid I&rsquo;m giving you a great
		      deal of trouble.&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, a &ldquo;<i>rath</i>&rdquo; is a sort of green pig: but &ldquo;<i>mome</i>&rdquo; I&rsquo;m not certain about.
		      I think it&rsquo;s short for &ldquo;from home&rdquo;&mdash;meaning that they&rsquo;d lost their
		      way, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;And what does &ldquo;<i>outgrabe</i>&rdquo; mean?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, &ldquo;<i>outgrabing</i>&rdquo; is something between bellowing and whistling, with a
		      kind of sneeze in the middle: however, you&rsquo;ll hear it done, maybe&mdash;down
		      in the wood yonder&mdash;and when you&rsquo;ve once heard it you&rsquo;ll be <i>quite</i>
		      content. Who&rsquo;s been repeating all that hard stuff to you?&rsquo;
		    </p>
		    <p>
		      &lsquo;I read it in a book,&rsquo; said Alice. &lsquo;But I had some poetry repeated to me,
		      much easier than that, by&mdash;Tweedledee, I think it was.&rsquo;
		    </p>
		    <p>
		      &lsquo;As to poetry, you know,&rsquo; said Humpty Dumpty, stretching out one of his
		      great hands, &lsquo;<i>I</i> can repeat poetry as well as other folk, if it
		      comes to that&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, it needn&rsquo;t come to that!&rsquo; Alice hastily said, hoping to keep him from
		      beginning.
		    </p>
		    <p>
		      &lsquo;The piece I&rsquo;m going to repeat,&rsquo; he went on without noticing her remark,
		      &lsquo;was written entirely for your amusement.&rsquo;
		    </p>
		    <p>
		      Alice felt that in that case she really <i>ought</i> to listen to it, so she sat
		      down, and said &lsquo;Thank you&rsquo; rather sadly.
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;In winter, when the fields are white,
		    <br>
		     I sing this song for your delight&mdash;
		    </p>
		    <p>
		      only I don&rsquo;t sing it,&rsquo; he added, as an explanation.
		    </p>
		    <p>
		      &lsquo;I see you don&rsquo;t,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;If you can <i>see</i> whether I&rsquo;m singing or not, you&rsquo;ve sharper eyes than
		      most.&rsquo; Humpty Dumpty remarked severely. Alice was silent.
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;In spring, when woods are getting green,
		    <br>
		     I&rsquo;ll try and tell you what I mean.&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you very much,&rsquo; said Alice.
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;In summer, when the days are long,
		    <br>
		     Perhaps you&rsquo;ll understand the song:
		    <br>
		     In autumn, when the leaves are brown,
		    <br>
		     Take pen and ink, and write it down.&rsquo;
		    </p>
		    <p>
		      &lsquo;I will, if I can remember it so long,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;You needn&rsquo;t go on making remarks like that,&rsquo; Humpty Dumpty said: &lsquo;they&rsquo;re
		      not sensible, and they put me out.&rsquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;I sent a message to the fish:
		    <br>
		     I told them &ldquo;This is what I wish.&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     The little fishes of the sea,
		    <br>
		     They sent an answer back to me.
		    </p>
		    <p class='tlg-seasons stanza'>
		     The little fishes&rsquo; answer was
		    <br>
		     &ldquo;We cannot do it, Sir, because&mdash;&ldquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid I don&rsquo;t quite understand,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;It gets easier further on,&rsquo; Humpty Dumpty replied.
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;I sent to them again to say
		    <br>
		     &ldquo;It will be better to obey.&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     The fishes answered with a grin,
		    <br>
		     &ldquo;Why, what a temper you are in!&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     I told them once, I told them twice:
		    <br>
		     They would not listen to advice.
		    </p>
		    <p class='tlg-seasons stanza'>
		     I took a kettle large and new,
		    <br>
		     Fit for the deed I had to do.
		    </p>
		    <p class='tlg-seasons stanza'>
		     My heart went hop, my heart went thump;
		    <br>
		     I filled the kettle at the pump.
		    </p>
		    <p class='tlg-seasons stanza'>
		     Then some one came to me and said,
		    <br>
		     &ldquo;The little fishes are in bed.&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     I said to him, I said it plain,
		    <br>
		     &ldquo;Then you must wake them up again.&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     I said it very loud and clear;
		    <br>
		     I went and shouted in his ear.&rsquo;
		    </p>
		    <p>
		      Humpty Dumpty raised his voice almost to a scream as he repeated this
		      verse, and Alice thought with a shudder, &lsquo;I wouldn&rsquo;t have been the
		      messenger for <i>anything</i>!&rsquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     &lsquo;But he was very stiff and proud;
		    <br>
		     He said &ldquo;You needn&rsquo;t shout so loud!&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     And he was very proud and stiff;
		    <br>
		     He said &ldquo;I&rsquo;d go and wake them, if&mdash;&rdquo;
		    </p>
		    <p class='tlg-seasons stanza'>
		     I took a corkscrew from the shelf:
		    <br>
		     I went to wake them up myself.
		    </p>
		    <p class='tlg-seasons stanza'>
		     And when I found the door was locked,
		    <br>
		     I pulled and pushed and kicked and knocked.
		    </p>
		    <p class='tlg-seasons stanza'>
		     And when I found the door was shut,
		    <br>
		     I tried to turn the handle, but&mdash;&rsquo;
		    </p>
		    <p>
		      There was a long pause.
		    </p>
		    <p>
		      &lsquo;Is that all?&rsquo; Alice timidly asked.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s all,&rsquo; said Humpty Dumpty. &lsquo;Good-bye.&rsquo;
		    </p>
		    <p>
		      This was rather sudden, Alice thought: but, after such a <i>very</i> strong hint
		      that she ought to be going, she felt that it would hardly be civil to
		      stay. So she got up, and held out her hand. &lsquo;Good-bye, till we meet
		      again!&rsquo; she said as cheerfully as she could.
		    </p>
		    <p>
		      &lsquo;I shouldn&rsquo;t know you again if we <i>did</i> meet,&rsquo; Humpty Dumpty replied in a
		      discontented tone, giving her one of his fingers to shake; &lsquo;you&rsquo;re so
		      exactly like other people.&rsquo;
		    </p>
		    <p>
		      &lsquo;The face is what one goes by, generally,&rsquo; Alice remarked in a thoughtful
		      tone.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s just what I complain of,&rsquo; said Humpty Dumpty. &lsquo;Your face is the
		      same as everybody has&mdash;the two eyes, so&mdash;&rsquo; (marking their places
		      in the air with this thumb) &lsquo;nose in the middle, mouth under. It&rsquo;s always
		      the same. Now if you had the two eyes on the same side of the nose, for
		      instance&mdash;or the mouth at the top&mdash;that would be <i>some</i> help.&rsquo;
		    </p>
		    <p>
		      &lsquo;It wouldn&rsquo;t look nice,&rsquo; Alice objected. But Humpty Dumpty only shut his
		      eyes and said &lsquo;Wait till you&rsquo;ve tried.&rsquo;
		    </p>
		    <p>
		      Alice waited a minute to see if he would speak again, but as he never
		      opened his eyes or took any further notice of her, she said &lsquo;Good-bye!&rsquo;
		      once more, and, getting no answer to this, she quietly walked away: but
		      she couldn&rsquo;t help saying to herself as she went, &lsquo;Of all the
		      unsatisfactory&mdash;&rsquo; (she repeated this aloud, as it was a great comfort
		      to have such a long word to say) &lsquo;of all the unsatisfactory people I <i>ever</i>
		      met&mdash;&rsquo; She never finished the sentence, for at this moment a heavy
		      crash shook the forest from end to end.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "The Lion and the Unicorn",
			'number' => "Seven",
			'order' => 7,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      The next moment soldiers came running through the wood, at first in twos
		      and threes, then ten or twenty together, and at last in such crowds that
		      they seemed to fill the whole forest. Alice got behind a tree, for fear of
		      being run over, and watched them go by.
		    </p>
		    <p>
		      She thought that in all her life she had never seen soldiers so uncertain
		      on their feet: they were always tripping over something or other, and
		      whenever one went down, several more always fell over him, so that the
		      ground was soon covered with little heaps of men.
		    </p>
		    <p>
		      Then came the horses. Having four feet, these managed rather better than
		      the foot-soldiers: but even <i>they</i> stumbled now and then; and it seemed to
		      be a regular rule that, whenever a horse stumbled the rider fell off
		      instantly. The confusion got worse every moment, and Alice was very glad
		      to get out of the wood into an open place, where she found the White King
		      seated on the ground, busily writing in his memorandum-book.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve sent them all!&rsquo; the King cried in a tone of delight, on seeing
		      Alice. &lsquo;Did you happen to meet any soldiers, my dear, as you came through
		      the wood?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, I did,&rsquo; said Alice: &lsquo;several thousand, I should think.&rsquo;
		    </p>
		    <p>
		      &lsquo;Four thousand two hundred and seven, that&rsquo;s the exact number,&rsquo; the King
		      said, referring to his book. &lsquo;I couldn&rsquo;t send all the horses, you know,
		      because two of them are wanted in the game. And I haven&rsquo;t sent the two
		      Messengers, either. They&rsquo;re both gone to the town. Just look along the
		      road, and tell me if you can see either of them.&rsquo;
		    </p>
		    <p>
		      &lsquo;I see nobody on the road,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;I only wish <i>I</i> had such eyes,&rsquo; the King remarked in a fretful tone.
		      &lsquo;To be able to see Nobody! And at that distance, too! Why, it&rsquo;s as much as
		      <i>I</i> can do to see real people, by this light!&rsquo;
		    </p>
		    <p>
		      All this was lost on Alice, who was still looking intently along the road,
		      shading her eyes with one hand. &lsquo;I see somebody now!&rsquo; she exclaimed at
		      last. &lsquo;But he&rsquo;s coming very slowly&mdash;and what curious attitudes he
		      goes into!&rsquo; (For the messenger kept skipping up and down, and wriggling
		      like an eel, as he came along, with his great hands spread out like fans
		      on each side.)
		    </p>
		    <p>
		      &lsquo;Not at all,&rsquo; said the King. &lsquo;He&rsquo;s an Anglo-Saxon Messenger&mdash;and
		      those are Anglo-Saxon attitudes. He only does them when he&rsquo;s happy. His
		      name is Haigha.&rsquo; (He pronounced it so as to rhyme with &lsquo;mayor.&rsquo;)
		    </p>
		    <p>
		      &lsquo;I love my love with an H,&rsquo; Alice couldn&rsquo;t help beginning, &lsquo;because he is
		      Happy. I hate him with an H, because he is Hideous. I fed him with&mdash;with&mdash;with
		      Ham-sandwiches and Hay. His name is Haigha, and he lives&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;He lives on the Hill,&rsquo; the King remarked simply, without the least idea
		      that he was joining in the game, while Alice was still hesitating for the
		      name of a town beginning with H. &lsquo;The other Messenger&rsquo;s called Hatta. I
		      must have <i>two</i>, you know&mdash;to come and go. One to come, and one to go.&rsquo;
		    </p>
		    <p>
		      &lsquo;I beg your pardon?&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;It isn&rsquo;t respectable to beg,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;I only meant that I didn&rsquo;t understand,&rsquo; said Alice. &lsquo;Why one to come and
		      one to go?&rsquo;
		    </p>
		    <p>
		      &lsquo;Didn&rsquo;t I tell you?&rsquo; the King repeated impatiently. &lsquo;I must have <i>two</i>&mdash;to
		      fetch and carry. One to fetch, and one to carry.&rsquo;
		    </p>
		    <p>
		      At this moment the Messenger arrived: he was far too much out of breath to
		      say a word, and could only wave his hands about, and make the most fearful
		      faces at the poor King.
		    </p>
		    <p>
		      &lsquo;This young lady loves you with an H,&rsquo; the King said, introducing Alice in
		      the hope of turning off the Messenger&rsquo;s attention from himself&mdash;but
		      it was no use&mdash;the Anglo-Saxon attitudes only got more extraordinary
		      every moment, while the great eyes rolled wildly from side to side.
		    </p>
		    <p>
		      &lsquo;You alarm me!&rsquo; said the King. &lsquo;I feel faint&mdash;Give me a ham
		      sandwich!&rsquo;
		    </p>
		    <p>
		      On which the Messenger, to Alice&rsquo;s great amusement, opened a bag that hung
		      round his neck, and handed a sandwich to the King, who devoured it
		      greedily.
		    </p>
		    <p>
		      &lsquo;Another sandwich!&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;There&rsquo;s nothing but hay left now,&rsquo; the Messenger said, peeping into the
		      bag.
		    </p>
		    <p>
		      &lsquo;Hay, then,&rsquo; the King murmured in a faint whisper.
		    </p>
		    <p>
		      Alice was glad to see that it revived him a good deal. &lsquo;There&rsquo;s nothing
		      like eating hay when you&rsquo;re faint,&rsquo; he remarked to her, as he munched
		      away.
		    </p>
		    <p>
		      &lsquo;I should think throwing cold water over you would be better,&rsquo; Alice
		      suggested: &lsquo;or some sal-volatile.&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t say there was nothing <i>better</i>,&rsquo; the King replied. &lsquo;I said there
		      was nothing <i>like</i> it.&rsquo; Which Alice did not venture to deny.
		    </p>
		    <p>
		      &lsquo;Who did you pass on the road?&rsquo; the King went on, holding out his hand to
		      the Messenger for some more hay.
		    </p>
		    <p>
		      &lsquo;Nobody,&rsquo; said the Messenger.
		    </p>
		    <p>
		      &lsquo;Quite right,&rsquo; said the King: &lsquo;this young lady saw him too. So of course
		      Nobody walks slower than you.&rsquo;
		    </p>
		    <p>
		      &lsquo;I do my best,&rsquo; the Messenger said in a sulky tone. &lsquo;I&rsquo;m sure nobody walks
		      much faster than I do!&rsquo;
		    </p>
		    <p>
		      &lsquo;He can&rsquo;t do that,&rsquo; said the King, &lsquo;or else he&rsquo;d have been here first.
		      However, now you&rsquo;ve got your breath, you may tell us what&rsquo;s happened in
		      the town.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll whisper it,&rsquo; said the Messenger, putting his hands to his mouth in
		      the shape of a trumpet, and stooping so as to get close to the King&rsquo;s ear.
		      Alice was sorry for this, as she wanted to hear the news too. However,
		      instead of whispering, he simply shouted at the top of his voice &lsquo;They&rsquo;re
		      at it again!&rsquo;
		    </p>
		    <p>
		      &lsquo;Do you call <i>that</i> a whisper?&rsquo; cried the poor King, jumping up and shaking
		      himself. &lsquo;If you do such a thing again, I&rsquo;ll have you buttered! It went
		      through and through my head like an earthquake!&rsquo;
		    </p>
		    <p>
		      &lsquo;It would have to be a very tiny earthquake!&rsquo; thought Alice. &lsquo;Who are at
		      it again?&rsquo; she ventured to ask.
		    </p>
		    <p>
		      &lsquo;Why the Lion and the Unicorn, of course,&rsquo; said the King.
		    </p>
		    <p>
		      &lsquo;Fighting for the crown?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, to be sure,&rsquo; said the King: &lsquo;and the best of the joke is, that it&rsquo;s
		      <i>my</i> crown all the while! Let&rsquo;s run and see them.&rsquo; And they trotted off,
		      Alice repeating to herself, as she ran, the words of the old song:&mdash;
		    </p>
		    <p class='tlg-unicorn stanza'>
		   &lsquo;The Lion and the Unicorn were fighting for the crown:
		    <br>
		   The Lion beat the Unicorn all round the town.
		    <br>
		   Some gave them white bread, some gave them brown;
		    <br>
		   Some gave them plum-cake and drummed them out of town.&rsquo;
		    </p>
		    <p>
		      &lsquo;Does&mdash;the one&mdash;that wins&mdash;get the crown?&rsquo; she asked, as
		      well as she could, for the run was putting her quite out of breath.
		    </p>
		    <p>
		      &lsquo;Dear me, no!&rsquo; said the King. &lsquo;What an idea!&rsquo;
		    </p>
		    <p>
		      &lsquo;Would you&mdash;be good enough,&rsquo; Alice panted out, after running a little
		      further, &lsquo;to stop a minute&mdash;just to get&mdash;one&rsquo;s breath again?&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m <i>good</i> enough,&rsquo; the King said, &lsquo;only I&rsquo;m not strong enough. You see, a
		      minute goes by so fearfully quick. You might as well try to stop a
		      Bandersnatch!&rsquo;
		    </p>
		    <p>
		      Alice had no more breath for talking, so they trotted on in silence, till
		      they came in sight of a great crowd, in the middle of which the Lion and
		      Unicorn were fighting. They were in such a cloud of dust, that at first
		      Alice could not make out which was which: but she soon managed to
		      distinguish the Unicorn by his horn.
		    </p>
		    <p>
		      They placed themselves close to where Hatta, the other messenger, was
		      standing watching the fight, with a cup of tea in one hand and a piece of
		      bread-and-butter in the other.
		    </p>
		    <p>
		      &lsquo;He&rsquo;s only just out of prison, and he hadn&rsquo;t finished his tea when he was
		      sent in,&rsquo; Haigha whispered to Alice: &lsquo;and they only give them
		      oyster-shells in there&mdash;so you see he&rsquo;s very hungry and thirsty. How
		      are you, dear child?&rsquo; he went on, putting his arm affectionately round
		      Hatta&rsquo;s neck.
		    </p>
		    <p>
		      Hatta looked round and nodded, and went on with his bread and butter.
		    </p>
		    <p>
		      &lsquo;Were you happy in prison, dear child?&rsquo; said Haigha.
		    </p>
		    <p>
		      Hatta looked round once more, and this time a tear or two trickled down
		      his cheek: but not a word would he say.
		    </p>
		    <p>
		      &lsquo;Speak, can&rsquo;t you!&rsquo; Haigha cried impatiently. But Hatta only munched away,
		      and drank some more tea.
		    </p>
		    <p>
		      &lsquo;Speak, won&rsquo;t you!&rsquo; cried the King. &lsquo;How are they getting on with the
		      fight?&rsquo;
		    </p>
		    <p>
		      Hatta made a desperate effort, and swallowed a large piece of
		      bread-and-butter. &lsquo;They&rsquo;re getting on very well,&rsquo; he said in a choking
		      voice: &lsquo;each of them has been down about eighty-seven times.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then I suppose they&rsquo;ll soon bring the white bread and the brown?&rsquo; Alice
		      ventured to remark.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s waiting for &lsquo;em now,&rsquo; said Hatta: &lsquo;this is a bit of it as I&rsquo;m
		      eating.&rsquo;
		    </p>
		    <p>
		      There was a pause in the fight just then, and the Lion and the Unicorn sat
		      down, panting, while the King called out &lsquo;Ten minutes allowed for
		      refreshments!&rsquo; Haigha and Hatta set to work at once, carrying rough trays
		      of white and brown bread. Alice took a piece to taste, but it was <i>very</i>
		      dry.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t think they&rsquo;ll fight any more to-day,&rsquo; the King said to Hatta: &lsquo;go
		      and order the drums to begin.&rsquo; And Hatta went bounding away like a
		      grasshopper.
		    </p>
		    <p>
		      For a minute or two Alice stood silent, watching him. Suddenly she
		      brightened up. &lsquo;Look, look!&rsquo; she cried, pointing eagerly. &lsquo;There&rsquo;s the
		      White Queen running across the country! She came flying out of the wood
		      over yonder&mdash;How fast those Queens <i>can</i> run!&rsquo;
		    </p>
		    <p>
		      &lsquo;There&rsquo;s some enemy after her, no doubt,&rsquo; the King said, without even
		      looking round. &lsquo;That wood&rsquo;s full of them.&rsquo;
		    </p>
		    <p>
		      &lsquo;But aren&rsquo;t you going to run and help her?&rsquo; Alice asked, very much
		      surprised at his taking it so quietly.
		    </p>
		    <p>
		      &lsquo;No use, no use!&rsquo; said the King. &lsquo;She runs so fearfully quick. You might
		      as well try to catch a Bandersnatch! But I&rsquo;ll make a memorandum about her,
		      if you like&mdash;She&rsquo;s a dear good creature,&rsquo; he repeated softly to
		      himself, as he opened his memorandum-book. &lsquo;Do you spell &ldquo;creature&rdquo; with a
		      double &ldquo;e&rdquo;?&rsquo;
		    </p>
		    <p>
		      At this moment the Unicorn sauntered by them, with his hands in his
		      pockets. &lsquo;I had the best of it this time?&rsquo; he said to the King, just
		      glancing at him as he passed.
		    </p>
		    <p>
		      &lsquo;A little&mdash;a little,&rsquo; the King replied, rather nervously. &lsquo;You
		      shouldn&rsquo;t have run him through with your horn, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;It didn&rsquo;t hurt him,&rsquo; the Unicorn said carelessly, and he was going on,
		      when his eye happened to fall upon Alice: he turned round rather
		      instantly, and stood for some time looking at her with an air of the
		      deepest disgust.
		    </p>
		    <p>
		      &lsquo;What&mdash;is&mdash;this?&rsquo; he said at last.
		    </p>
		    <p>
		      &lsquo;This is a child!&rsquo; Haigha replied eagerly, coming in front of Alice to
		      introduce her, and spreading out both his hands towards her in an
		      Anglo-Saxon attitude. &lsquo;We only found it to-day. It&rsquo;s as large as life, and
		      twice as natural!&rsquo;
		    </p>
		    <p>
		      &lsquo;I always thought they were fabulous monsters!&rsquo; said the Unicorn. &lsquo;Is it
		      alive?&rsquo;
		    </p>
		    <p>
		      &lsquo;It can talk,&rsquo; said Haigha, solemnly.
		    </p>
		    <p>
		      The Unicorn looked dreamily at Alice, and said &lsquo;Talk, child.&rsquo;
		    </p>
		    <p>
		      Alice could not help her lips curling up into a smile as she began: &lsquo;Do
		      you know, I always thought Unicorns were fabulous monsters, too! I never
		      saw one alive before!&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, now that we <i>have</i> seen each other,&rsquo; said the Unicorn, &lsquo;if you&rsquo;ll
		      believe in me, I&rsquo;ll believe in you. Is that a bargain?&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, if you like,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Come, fetch out the plum-cake, old man!&rsquo; the Unicorn went on, turning
		      from her to the King. &lsquo;None of your brown bread for me!&rsquo;
		    </p>
		    <p>
		      &lsquo;Certainly&mdash;certainly!&rsquo; the King muttered, and beckoned to Haigha.
		      &lsquo;Open the bag!&rsquo; he whispered. &lsquo;Quick! Not that one&mdash;that&rsquo;s full of
		      hay!&rsquo;
		    </p>
		    <p>
		      Haigha took a large cake out of the bag, and gave it to Alice to hold,
		      while he got out a dish and carving-knife. How they all came out of it
		      Alice couldn&rsquo;t guess. It was just like a conjuring-trick, she thought.
		    </p>
		    <p>
		      The Lion had joined them while this was going on: he looked very tired and
		      sleepy, and his eyes were half shut. &lsquo;What&rsquo;s this!&rsquo; he said, blinking
		      lazily at Alice, and speaking in a deep hollow tone that sounded like the
		      tolling of a great bell.
		    </p>
		    <p>
		      &lsquo;Ah, what <i>is</i> it, now?&rsquo; the Unicorn cried eagerly. &lsquo;You&rsquo;ll never guess! <i>I</i>
		      couldn&rsquo;t.&rsquo;
		    </p>
		    <p>
		      The Lion looked at Alice wearily. &lsquo;Are you animal&mdash;vegetable&mdash;or
		      mineral?&rsquo; he said, yawning at every other word.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s a fabulous monster!&rsquo; the Unicorn cried out, before Alice could
		      reply.
		    </p>
		    <p>
		      &lsquo;Then hand round the plum-cake, Monster,&rsquo; the Lion said, lying down and
		      putting his chin on his paws. &lsquo;And sit down, both of you,&rsquo; (to the King
		      and the Unicorn): &lsquo;fair play with the cake, you know!&rsquo;
		    </p>
		    <p>
		      The King was evidently very uncomfortable at having to sit down between
		      the two great creatures; but there was no other place for him.
		    </p>
		    <p>
		      &lsquo;What a fight we might have for the crown, <i>now</i>!&rsquo; the Unicorn said, looking
		      slyly up at the crown, which the poor King was nearly shaking off his
		      head, he trembled so much.
		    </p>
		    <p>
		      &lsquo;I should win easy,&rsquo; said the Lion.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m not so sure of that,&rsquo; said the Unicorn.
		    </p>
		    <p>
		      &lsquo;Why, I beat you all round the town, you chicken!&rsquo; the Lion replied
		      angrily, half getting up as he spoke.
		    </p>
		    <p>
		      Here the King interrupted, to prevent the quarrel going on: he was very
		      nervous, and his voice quite quivered. &lsquo;All round the town?&rsquo; he said.
		      &lsquo;That&rsquo;s a good long way. Did you go by the old bridge, or the
		      market-place? You get the best view by the old bridge.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m sure I don&rsquo;t know,&rsquo; the Lion growled out as he lay down again. &lsquo;There
		      was too much dust to see anything. What a time the Monster is, cutting up
		      that cake!&rsquo;
		    </p>
		    <p>
		      Alice had seated herself on the bank of a little brook, with the great
		      dish on her knees, and was sawing away diligently with the knife. &lsquo;It&rsquo;s
		      very provoking!&rsquo; she said, in reply to the Lion (she was getting quite
		      used to being called &lsquo;the Monster&rsquo;). &lsquo;I&rsquo;ve cut several slices already, but
		      they always join on again!&rsquo;
		    </p>
		    <p>
		      &lsquo;You don&rsquo;t know how to manage Looking-glass cakes,&rsquo; the Unicorn remarked.
		      &lsquo;Hand it round first, and cut it afterwards.&rsquo;
		    </p>
		    <p>
		      This sounded nonsense, but Alice very obediently got up, and carried the
		      dish round, and the cake divided itself into three pieces as she did so.
		      &lsquo;<i>Now</i> cut it up,&rsquo; said the Lion, as she returned to her place with the
		      empty dish.
		    </p>
		    <p>
		      &lsquo;I say, this isn&rsquo;t fair!&rsquo; cried the Unicorn, as Alice sat with the knife
		      in her hand, very much puzzled how to begin. &lsquo;The Monster has given the
		      Lion twice as much as me!&rsquo;
		    </p>
		    <p>
		      &lsquo;She&rsquo;s kept none for herself, anyhow,&rsquo; said the Lion. &lsquo;Do you like
		      plum-cake, Monster?&rsquo;
		    </p>
		    <p>
		      But before Alice could answer him, the drums began.
		    </p>
		    <p>
		      Where the noise came from, she couldn&rsquo;t make out: the air seemed full of
		      it, and it rang through and through her head till she felt quite deafened.
		      She started to her feet and sprang across the little brook in her terror,
		    </p>
		    <p class='tlg-separator'>
			  *****
		    </p>
		    <p>
		      and had just time to see the Lion and the Unicorn rise to their feet, with
		      angry looks at being interrupted in their feast, before she dropped to her
		      knees, and put her hands over her ears, vainly trying to shut out the
		      dreadful uproar.
		    </p>
		    <p>
		      &lsquo;If <i>that</i> doesn&rsquo;t &ldquo;drum them out of town,&rdquo;&rsquo; she thought to herself,
		      &lsquo;nothing ever will!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "‘It’s my own Invention’",
			'number' => "Eight",
			'order' => 8,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      After a while the noise seemed gradually to die away, till all was dead
		      silence, and Alice lifted up her head in some alarm. There was no one to
		      be seen, and her first thought was that she must have been dreaming about
		      the Lion and the Unicorn and those queer Anglo-Saxon Messengers. However,
		      there was the great dish still lying at her feet, on which she had tried
		      to cut the plum-cake, &lsquo;So I wasn&rsquo;t dreaming, after all,&rsquo; she said to
		      herself, &lsquo;unless&mdash;unless we&rsquo;re all part of the same dream. Only I do
		      hope it&rsquo;s <i>my</i> dream, and not the Red King&rsquo;s! I don&rsquo;t like belonging to
		      another person&rsquo;s dream,&rsquo; she went on in a rather complaining tone: &lsquo;I&rsquo;ve a
		      great mind to go and wake him, and see what happens!&rsquo;
		    </p>
		    <p>
		      At this moment her thoughts were interrupted by a loud shouting of &lsquo;Ahoy!
		      Ahoy! Check!&rsquo; and a Knight dressed in crimson armour came galloping down
		      upon her, brandishing a great club. Just as he reached her, the horse
		      stopped suddenly: &lsquo;You&rsquo;re my prisoner!&rsquo; the Knight cried, as he tumbled
		      off his horse.
		    </p>
		    <p>
		      Startled as she was, Alice was more frightened for him than for herself at
		      the moment, and watched him with some anxiety as he mounted again. As soon
		      as he was comfortably in the saddle, he began once more &lsquo;You&rsquo;re my&mdash;&rsquo;
		      but here another voice broke in &lsquo;Ahoy! Ahoy! Check!&rsquo; and Alice looked
		      round in some surprise for the new enemy.
		    </p>
		    <p>
		      This time it was a White Knight. He drew up at Alice&rsquo;s side, and tumbled
		      off his horse just as the Red Knight had done: then he got on again, and
		      the two Knights sat and looked at each other for some time without
		      speaking. Alice looked from one to the other in some bewilderment.
		    </p>
		    <p>
		      &lsquo;She&rsquo;s <i>my</i> prisoner, you know!&rsquo; the Red Knight said at last.
		    </p>
		    <p>
		      &lsquo;Yes, but then <i>I</i> came and rescued her!&rsquo; the White Knight replied.
		    </p>
		    <p>
		      &lsquo;Well, we must fight for her, then,&rsquo; said the Red Knight, as he took up
		      his helmet (which hung from the saddle, and was something the shape of a
		      horse&rsquo;s head), and put it on.
		    </p>
		    <p>
		      &lsquo;You will observe the Rules of Battle, of course?&rsquo; the White Knight
		      remarked, putting on his helmet too.
		    </p>
		    <p>
		      &lsquo;I always do,&rsquo; said the Red Knight, and they began banging away at each
		      other with such fury that Alice got behind a tree to be out of the way of
		      the blows.
		    </p>
		    <p>
		      &lsquo;I wonder, now, what the Rules of Battle are,&rsquo; she said to herself, as she
		      watched the fight, timidly peeping out from her hiding-place: &lsquo;one Rule
		      seems to be, that if one Knight hits the other, he knocks him off his
		      horse, and if he misses, he tumbles off himself&mdash;and another Rule
		      seems to be that they hold their clubs with their arms, as if they were
		      Punch and Judy&mdash;What a noise they make when they tumble! Just like a
		      whole set of fire-irons falling into the fender! And how quiet the horses
		      are! They let them get on and off them just as if they were tables!&rsquo;
		    </p>
		    <p>
		      Another Rule of Battle, that Alice had not noticed, seemed to be that they
		      always fell on their heads, and the battle ended with their both falling
		      off in this way, side by side: when they got up again, they shook hands,
		      and then the Red Knight mounted and galloped off.
		    </p>
		    <p>
		      &lsquo;It was a glorious victory, wasn&rsquo;t it?&rsquo; said the White Knight, as he came
		      up panting.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know,&rsquo; Alice said doubtfully. &lsquo;I don&rsquo;t want to be anybody&rsquo;s
		      prisoner. I want to be a Queen.&rsquo;
		    </p>
		    <p>
		      &lsquo;So you will, when you&rsquo;ve crossed the next brook,&rsquo; said the White Knight.
		      &lsquo;I&rsquo;ll see you safe to the end of the wood&mdash;and then I must go back,
		      you know. That&rsquo;s the end of my move.&rsquo;
		    </p>
		    <p>
		      &lsquo;Thank you very much,&rsquo; said Alice. &lsquo;May I help you off with your helmet?&rsquo;
		      It was evidently more than he could manage by himself; however, she
		      managed to shake him out of it at last.
		    </p>
		    <p>
		      &lsquo;Now one can breathe more easily,&rsquo; said the Knight, putting back his
		      shaggy hair with both hands, and turning his gentle face and large mild
		      eyes to Alice. She thought she had never seen such a strange-looking
		      soldier in all her life.
		    </p>
		    <p>
		      He was dressed in tin armour, which seemed to fit him very badly, and he
		      had a queer-shaped little deal box fastened across his shoulder,
		      upside-down, and with the lid hanging open. Alice looked at it with great
		      curiosity.
		    </p>
		    <p>
		      &lsquo;I see you&rsquo;re admiring my little box.&rsquo; the Knight said in a friendly tone.
		      &lsquo;It&rsquo;s my own invention&mdash;to keep clothes and sandwiches in. You see I
		      carry it upside-down, so that the rain can&rsquo;t get in.&rsquo;
		    </p>
		    <p>
		      &lsquo;But the things can get <i>out</i>,&rsquo; Alice gently remarked. &lsquo;Do you know the
		      lid&rsquo;s open?&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know it,&rsquo; the Knight said, a shade of vexation passing over his
		      face. &lsquo;Then all the things must have fallen out! And the box is no use
		      without them.&rsquo; He unfastened it as he spoke, and was just going to throw
		      it into the bushes, when a sudden thought seemed to strike him, and he
		      hung it carefully on a tree. &lsquo;Can you guess why I did that?&rsquo; he said to
		      Alice.
		    </p>
		    <p>
		      Alice shook her head.
		    </p>
		    <p>
		      &lsquo;In hopes some bees may make a nest in it&mdash;then I should get the
		      honey.&rsquo;
		    </p>
		    <p>
		      &lsquo;But you&rsquo;ve got a bee-hive&mdash;or something like one&mdash;fastened to
		      the saddle,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Yes, it&rsquo;s a very good bee-hive,&rsquo; the Knight said in a discontented tone,
		      &lsquo;one of the best kind. But not a single bee has come near it yet. And the
		      other thing is a mouse-trap. I suppose the mice keep the bees out&mdash;or
		      the bees keep the mice out, I don&rsquo;t know which.&rsquo;
		    </p>
		    <p>
		      &lsquo;I was wondering what the mouse-trap was for,&rsquo; said Alice. &lsquo;It isn&rsquo;t very
		      likely there would be any mice on the horse&rsquo;s back.&rsquo;
		    </p>
		    <p>
		      &lsquo;Not very likely, perhaps,&rsquo; said the Knight: &lsquo;but if they <i>do</i> come, I don&rsquo;t
		      choose to have them running all about.&rsquo;
		    </p>
		    <p>
		      &lsquo;You see,&rsquo; he went on after a pause, &lsquo;it&rsquo;s as well to be provided for
		      <i>everything</i>. That&rsquo;s the reason the horse has all those anklets round his
		      feet.&rsquo;
		    </p>
		    <p>
		      &lsquo;But what are they for?&rsquo; Alice asked in a tone of great curiosity.
		    </p>
		    <p>
		      &lsquo;To guard against the bites of sharks,&rsquo; the Knight replied. &lsquo;It&rsquo;s an
		      invention of my own. And now help me on. I&rsquo;ll go with you to the end of
		      the wood&mdash;What&rsquo;s the dish for?&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s meant for plum-cake,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;We&rsquo;d better take it with us,&rsquo; the Knight said. &lsquo;It&rsquo;ll come in handy if we
		      find any plum-cake. Help me to get it into this bag.&rsquo;
		    </p>
		    <p>
		      This took a very long time to manage, though Alice held the bag open very
		      carefully, because the Knight was so <i>very</i> awkward in putting in the dish:
		      the first two or three times that he tried he fell in himself instead.
		      &lsquo;It&rsquo;s rather a tight fit, you see,&rsquo; he said, as they got it in a last;
		      &lsquo;There are so many candlesticks in the bag.&rsquo; And he hung it to the saddle,
		      which was already loaded with bunches of carrots, and fire-irons, and many
		      other things.
		    </p>
		    <p>
		      &lsquo;I hope you&rsquo;ve got your hair well fastened on?&rsquo; he continued, as they set
		      off.
		    </p>
		    <p>
		      &lsquo;Only in the usual way,&rsquo; Alice said, smiling.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s hardly enough,&rsquo; he said, anxiously. &lsquo;You see the wind is so <i>very</i>
		      strong here. It&rsquo;s as strong as soup.&rsquo;
		    </p>
		    <p>
		      &lsquo;Have you invented a plan for keeping the hair from being blown off?&rsquo;
		      Alice enquired.
		    </p>
		    <p>
		      &lsquo;Not yet,&rsquo; said the Knight. &lsquo;But I&rsquo;ve got a plan for keeping it from
		      <i>falling</i> off.&rsquo;
		    </p>
		    <p>
		      &lsquo;I should like to hear it, very much.&rsquo;
		    </p>
		    <p>
		      &lsquo;First you take an upright stick,&rsquo; said the Knight. &lsquo;Then you make your
		      hair creep up it, like a fruit-tree. Now the reason hair falls off is
		      because it hangs <i>down</i>&mdash;things never fall <i>upwards</i>, you know. It&rsquo;s a
		      plan of my own invention. You may try it if you like.&rsquo;
		    </p>
		    <p>
		      It didn&rsquo;t sound a comfortable plan, Alice thought, and for a few minutes
		      she walked on in silence, puzzling over the idea, and every now and then
		      stopping to help the poor Knight, who certainly was <i>not</i> a good rider.
		    </p>
		    <p>
		      Whenever the horse stopped (which it did very often), he fell off in
		      front; and whenever it went on again (which it generally did rather
		      suddenly), he fell off behind. Otherwise he kept on pretty well, except
		      that he had a habit of now and then falling off sideways; and as he
		      generally did this on the side on which Alice was walking, she soon found
		      that it was the best plan not to walk <i>quite</i> close to the horse.
		    </p>
		    <p>
		      &lsquo;I&rsquo;m afraid you&rsquo;ve not had much practice in riding,&rsquo; she ventured to say,
		      as she was helping him up from his fifth tumble.
		    </p>
		    <p>
		      The Knight looked very much surprised, and a little offended at the
		      remark. &lsquo;What makes you say that?&rsquo; he asked, as he scrambled back into the
		      saddle, keeping hold of Alice&rsquo;s hair with one hand, to save himself from
		      falling over on the other side.
		    </p>
		    <p>
		      &lsquo;Because people don&rsquo;t fall off quite so often, when they&rsquo;ve had much
		      practice.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ve had plenty of practice,&rsquo; the Knight said very gravely: &lsquo;plenty of
		      practice!&rsquo;
		    </p>
		    <p>
		      Alice could think of nothing better to say than &lsquo;Indeed?&rsquo; but she said it
		      as heartily as she could. They went on a little way in silence after this,
		      the Knight with his eyes shut, muttering to himself, and Alice watching
		      anxiously for the next tumble.
		    </p>
		    <p>
		      &lsquo;The great art of riding,&rsquo; the Knight suddenly began in a loud voice,
		      waving his right arm as he spoke, &lsquo;is to keep&mdash;&rsquo; Here the sentence
		      ended as suddenly as it had begun, as the Knight fell heavily on the top
		      of his head exactly in the path where Alice was walking. She was quite
		      frightened this time, and said in an anxious tone, as she picked him up,
		      &lsquo;I hope no bones are broken?&rsquo;
		    </p>
		    <p>
		      &lsquo;None to speak of,&rsquo; the Knight said, as if he didn&rsquo;t mind breaking two or
		      three of them. &lsquo;The great art of riding, as I was saying, is&mdash;to keep
		      your balance properly. Like this, you know&mdash;&rsquo;
		    </p>
		    <p>
		      He let go the bridle, and stretched out both his arms to show Alice what
		      he meant, and this time he fell flat on his back, right under the horse&rsquo;s
		      feet.
		    </p>
		    <p>
		      &lsquo;Plenty of practice!&rsquo; he went on repeating, all the time that Alice was
		      getting him on his feet again. &lsquo;Plenty of practice!&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s too ridiculous!&rsquo; cried Alice, losing all her patience this time.
		      &lsquo;You ought to have a wooden horse on wheels, that you ought!&rsquo;
		    </p>
		    <p>
		      &lsquo;Does that kind go smoothly?&rsquo; the Knight asked in a tone of great
		      interest, clasping his arms round the horse&rsquo;s neck as he spoke, just in
		      time to save himself from tumbling off again.
		    </p>
		    <p>
		      &lsquo;Much more smoothly than a live horse,&rsquo; Alice said, with a little scream
		      of laughter, in spite of all she could do to prevent it.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll get one,&rsquo; the Knight said thoughtfully to himself. &lsquo;One or two&mdash;several.&rsquo;
		    </p>
		    <p>
		      There was a short silence after this, and then the Knight went on again.
		      &lsquo;I&rsquo;m a great hand at inventing things. Now, I daresay you noticed, that
		      last time you picked me up, that I was looking rather thoughtful?&rsquo;
		    </p>
		    <p>
		      &lsquo;You <i>were</i> a little grave,&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;Well, just then I was inventing a new way of getting over a gate&mdash;would
		      you like to hear it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Very much indeed,&rsquo; Alice said politely.
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll tell you how I came to think of it,&rsquo; said the Knight. &lsquo;You see, I
		      said to myself, &ldquo;The only difficulty is with the feet: the <i>head</i> is high
		      enough already.&rdquo; Now, first I put my head on the top of the gate&mdash;then
		      I stand on my head&mdash;then the feet are high enough, you see&mdash;then
		      I&rsquo;m over, you see.&rsquo;
		    </p>
		    <p>
		      &lsquo;Yes, I suppose you&rsquo;d be over when that was done,&rsquo; Alice said
		      thoughtfully: &lsquo;but don&rsquo;t you think it would be rather hard?&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t tried it yet,&rsquo; the Knight said, gravely: &lsquo;so I can&rsquo;t tell for
		      certain&mdash;but I&rsquo;m afraid it <i>would</i> be a little hard.&rsquo;
		    </p>
		    <p>
		      He looked so vexed at the idea, that Alice changed the subject hastily.
		      &lsquo;What a curious helmet you&rsquo;ve got!&rsquo; she said cheerfully. &lsquo;Is that your
		      invention too?&rsquo;
		    </p>
		    <p>
		      The Knight looked down proudly at his helmet, which hung from the saddle.
		      &lsquo;Yes,&rsquo; he said, &lsquo;but I&rsquo;ve invented a better one than that&mdash;like a
		      sugar loaf. When I used to wear it, if I fell off the horse, it always
		      touched the ground directly. So I had a <i>very</i> little way to fall, you see&mdash;But
		      there <i>was</i> the danger of falling <i>into</i> it, to be sure. That happened to me
		      once&mdash;and the worst of it was, before I could get out again, the
		      other White Knight came and put it on. He thought it was his own helmet.&rsquo;
		    </p>
		    <p>
		      The knight looked so solemn about it that Alice did not dare to laugh.
		      &lsquo;I&rsquo;m afraid you must have hurt him,&rsquo; she said in a trembling voice, &lsquo;being
		      on the top of his head.&rsquo;
		    </p>
		    <p>
		      &lsquo;I had to kick him, of course,&rsquo; the Knight said, very seriously. &lsquo;And then
		      he took the helmet off again&mdash;but it took hours and hours to get me
		      out. I was as fast as&mdash;as lightning, you know.&rsquo;
		    </p>
		    <p>
		      &lsquo;But that&rsquo;s a different kind of fastness,&rsquo; Alice objected.
		    </p>
		    <p>
		      The Knight shook his head. &lsquo;It was all kinds of fastness with me, I can
		      assure you!&rsquo; he said. He raised his hands in some excitement as he said
		      this, and instantly rolled out of the saddle, and fell headlong into a
		      deep ditch.
		    </p>
		    <p>
		      Alice ran to the side of the ditch to look for him. She was rather
		      startled by the fall, as for some time he had kept on very well, and she
		      was afraid that he really <i>was</i> hurt this time. However, though she could
		      see nothing but the soles of his feet, she was much relieved to hear that
		      he was talking on in his usual tone. &lsquo;All kinds of fastness,&rsquo; he repeated:
		      &lsquo;but it was careless of him to put another man&rsquo;s helmet on&mdash;with the
		      man in it, too.&rsquo;
		    </p>
		    <p>
		      &lsquo;How <i>can</i> you go on talking so quietly, head downwards?&rsquo; Alice asked, as
		      she dragged him out by the feet, and laid him in a heap on the bank.
		    </p>
		    <p>
		      The Knight looked surprised at the question. &lsquo;What does it matter where my
		      body happens to be?&rsquo; he said. &lsquo;My mind goes on working all the same. In
		      fact, the more head downwards I am, the more I keep inventing new things.&rsquo;
		    </p>
		    <p>
		      &lsquo;Now the cleverest thing of the sort that I ever did,&rsquo; he went on after a
		      pause, &lsquo;was inventing a new pudding during the meat-course.&rsquo;
		    </p>
		    <p>
		      &lsquo;In time to have it cooked for the next course?&rsquo; said Alice. &lsquo;Well, not
		      the <i>next</i> course,&rsquo; the Knight said in a slow thoughtful tone: &lsquo;no,
		      certainly not the next <i>course</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;Then it would have to be the next day. I suppose you wouldn&rsquo;t have two
		      pudding-courses in one dinner?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, not the <i>next</i> day,&rsquo; the Knight repeated as before: &lsquo;not the next
		      <i>day</i>. In fact,&rsquo; he went on, holding his head down, and his voice getting
		      lower and lower, &lsquo;I don&rsquo;t believe that pudding ever <i>was</i> cooked! In fact, I
		      don&rsquo;t believe that pudding ever <i>will</i> be cooked! And yet it was a very
		      clever pudding to invent.&rsquo;
		    </p>
		    <p>
		      &lsquo;What did you mean it to be made of?&rsquo; Alice asked, hoping to cheer him up,
		      for the poor Knight seemed quite low-spirited about it.
		    </p>
		    <p>
		      &lsquo;It began with blotting paper,&rsquo; the Knight answered with a groan.
		    </p>
		    <p>
		      &lsquo;That wouldn&rsquo;t be very nice, I&rsquo;m afraid&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Not very nice <i>alone</i>,&rsquo; he interrupted, quite eagerly: &lsquo;but you&rsquo;ve no idea
		      what a difference it makes mixing it with other things&mdash;such as
		      gunpowder and sealing-wax. And here I must leave you.&rsquo; They had just come
		      to the end of the wood.
		    </p>
		    <p>
		      Alice could only look puzzled: she was thinking of the pudding.
		    </p>
		    <p>
		      &lsquo;You are sad,&rsquo; the Knight said in an anxious tone: &lsquo;let me sing you a song
		      to comfort you.&rsquo;
		    </p>
		    <p>
		      &lsquo;Is it very long?&rsquo; Alice asked, for she had heard a good deal of poetry
		      that day.
		    </p>
		    <p>
		      &lsquo;It&rsquo;s long,&rsquo; said the Knight, &lsquo;but very, <i>very</i> beautiful. Everybody that
		      hears me sing it&mdash;either it brings the <i>tears</i> into their eyes, or else&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Or else what?&rsquo; said Alice, for the Knight had made a sudden pause.
		    </p>
		    <p>
		      &lsquo;Or else it doesn&rsquo;t, you know. The name of the song is called &ldquo;<i>Haddocks&rsquo;
		      Eyes</i>.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Oh, that&rsquo;s the name of the song, is it?&rsquo; Alice said, trying to feel
		      interested.
		    </p>
		    <p>
		      &lsquo;No, you don&rsquo;t understand,&rsquo; the Knight said, looking a little vexed.
		      &lsquo;That&rsquo;s what the name is <i>called</i>. The name really <i>is</i> &ldquo;<i>The Aged Aged Man</i>.&rdquo;&rsquo;
		    </p>
		    <p>
		      &lsquo;Then I ought to have said &ldquo;That&rsquo;s what the <i>song</i> is called&rdquo;?&rsquo; Alice
		      corrected herself.
		    </p>
		    <p>
		      &lsquo;No, you oughtn&rsquo;t: that&rsquo;s quite another thing! The <i>song</i> is called &ldquo;<i>Ways
		      and Means</i>&rdquo;: but that&rsquo;s only what it&rsquo;s <i>called</i>, you know!&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, what <i>is</i> the song, then?&rsquo; said Alice, who was by this time
		      completely bewildered.
		    </p>
		    <p>
		      &lsquo;I was coming to that,&rsquo; the Knight said. &lsquo;The song really <i>is</i> &ldquo;<i>A-sitting On
		      A Gate</i>&rdquo;: and the tune&rsquo;s my own invention.&rsquo;
		    </p>
		    <p>
		      So saying, he stopped his horse and let the reins fall on its neck: then,
		      slowly beating time with one hand, and with a faint smile lighting up his
		      gentle foolish face, as if he enjoyed the music of his song, he began.
		    </p>
		    <p>
		      Of all the strange things that Alice saw in her journey Through The
		      Looking-Glass, this was the one that she always remembered most clearly.
		      Years afterwards she could bring the whole scene back again, as if it had
		      been only yesterday&mdash;the mild blue eyes and kindly smile of the
		      Knight&mdash;the setting sun gleaming through his hair, and shining on his
		      armour in a blaze of light that quite dazzled her&mdash;the horse quietly
		      moving about, with the reins hanging loose on his neck, cropping the grass
		      at her feet&mdash;and the black shadows of the forest behind&mdash;all
		      this she took in like a picture, as, with one hand shading her eyes, she
		      leant against a tree, watching the strange pair, and listening, in a half
		      dream, to the melancholy music of the song.
		    </p>
		    <p>
		      &lsquo;But the tune <i>isn&rsquo;t</i> his own invention,&rsquo; she said to herself: &lsquo;it&rsquo;s &ldquo;<i>I give
		      thee all, I can no more</i>.&rdquo;&rsquo; She stood and listened very attentively, but no
		      tears came into her eyes.
		    </p>
		    <p class='tlg-man stanza'>
		     &lsquo;I&rsquo;ll tell thee everything I can;
		    <br>
		      There&rsquo;s little to relate.
		    <br>
		     I saw an aged aged man,
		    <br>
		      A-sitting on a gate.
		    <br>
		     &ldquo;Who are you, aged man?&rdquo; I said,
		    <br>
		      &ldquo;and how is it you live?&rdquo;
		    <br>
		      And his answer trickled through my head
		    <br>
		      Like water through a sieve.
		    </p>
		    <p class='tlg-man stanza'>
		     He said &ldquo;I look for butterflies
		    <br>
		      That sleep among the wheat:
		    <br>
		     I make them into mutton-pies,
		    <br>
		      And sell them in the street.
		    <br>
		     I sell them unto men,&rdquo; he said,
		    <br>
		      &ldquo;Who sail on stormy seas;
		    <br>
		     And that&rsquo;s the way I get my bread&mdash;
		    <br>
		      A trifle, if you please.&rdquo;
		    </p>
		    <p class='tlg-man stanza'>
		     But I was thinking of a plan
		    <br>
		      To dye one&rsquo;s whiskers green,
		    <br>
		     And always use so large a fan
		    <br>
		      That they could not be seen.
		    <br>
		     So, having no reply to give
		    <br>
		      To what the old man said,
		    <br>
		     I cried, &ldquo;Come, tell me how you live!&rdquo;
		    <br>
		       And thumped him on the head.
		    </p>
		    <p class='tlg-man stanza'>
		     His accents mild took up the tale:
		    <br>
		      He said &ldquo;I go my ways,
		    <br>
		     And when I find a mountain-rill,
		    <br>
		      I set it in a blaze;
		    <br>
		     And thence they make a stuff they call
		    <br>
		      Rolands&rsquo; Macassar Oil&mdash;
		    <br>
		     Yet twopence-halfpenny is all
		    <br>
		      They give me for my toil.&rdquo;
		    </p>
		    <p class='tlg-man stanza'>
		     But I was thinking of a way
		    <br>
		      To feed oneself on batter,
		    <br>
		     And so go on from day to day
		    <br>
		      Getting a little fatter.
		    <br>
		     I shook him well from side to side,
		    <br>
		      Until his face was blue:
		    <br>
		     &ldquo;Come, tell me how you live,&rdquo; I cried,
		    <br>
		      &ldquo;And what it is you do!&rdquo;
		    </p>
		    <p class='tlg-man stanza'>
		     He said &ldquo;I hunt for haddocks&rsquo; eyes
		    <br>
		      Among the heather bright,
		    <br>
		     And work them into waistcoat-buttons
		    <br>
		      In the silent night.
		    <br>
		     And these I do not sell for gold
		    <br>
		      Or coin of silvery shine
		    <br>
		     But for a copper halfpenny,
		    <br>
		      And that will purchase nine.
		    </p>
		    <p class='tlg-man stanza'>
		     &ldquo;I sometimes dig for buttered rolls,
		    <br>
		      Or set limed twigs for crabs;
		    <br>
		     I sometimes search the grassy knolls
		    <br>
		      For wheels of Hansom-cabs.
		    <br>
		     And that&rsquo;s the way&rdquo; (he gave a wink)
		    <br>
		      &ldquo;By which I get my wealth&mdash;
		    <br>
		     And very gladly will I drink
		    <br>
		      Your Honour&rsquo;s noble health.&rdquo;
		    </p>
		    <p class='tlg-man stanza'>
		     I heard him then, for I had just
		    <br>
		      Completed my design
		    <br>
		     To keep the Menai bridge from rust
		    <br>
		      By boiling it in wine.
		    <br>
		     I thanked him much for telling me
		    <br>
		      The way he got his wealth,
		    <br>
		     But chiefly for his wish that he
		    <br>
		      Might drink my noble health.
		    </p>
		    <p class='tlg-man stanza'>
		     And now, if e&rsquo;er by chance I put
		    <br>
		      My fingers into glue
		    <br>
		     Or madly squeeze a right-hand foot
		    <br>
		      Into a left-hand shoe,
		    <br>
		     Or if I drop upon my toe
		    <br>
		      A very heavy weight,
		    <br>
		     I weep, for it reminds me so,
		    <br>
		      Of that old man I used to know&mdash;
		    </p>
		    <p class='tlg-man stanza'>
		     Whose look was mild, whose speech was slow,
		    <br>
		     Whose hair was whiter than the snow,
		    <br>
		     Whose face was very like a crow,
		    <br>
		     With eyes, like cinders, all aglow,
		    <br>
		     Who seemed distracted with his woe,
		    <br>
		     Who rocked his body to and fro,
		    <br>
		     And muttered mumblingly and low,
		    <br>
		     As if his mouth were full of dough,
		    <br>
		     Who snorted like a buffalo&mdash;
		    <br>
		     That summer evening, long ago,
		    <br>
		      A-sitting on a gate.&rsquo;
		    </p>
		    <p>
		      As the Knight sang the last words of the ballad, he gathered up the reins,
		      and turned his horse&rsquo;s head along the road by which they had come. &lsquo;You&rsquo;ve
		      only a few yards to go,&rsquo; he said, &lsquo;down the hill and over that little
		      brook, and then you&rsquo;ll be a Queen&mdash;But you&rsquo;ll stay and see me off
		      first?&rsquo; he added as Alice turned with an eager look in the direction to
		      which he pointed. &lsquo;I shan&rsquo;t be long. You&rsquo;ll wait and wave your
		      handkerchief when I get to that turn in the road? I think it&rsquo;ll encourage
		      me, you see.&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course I&rsquo;ll wait,&rsquo; said Alice: &lsquo;and thank you very much for coming so
		      far&mdash;and for the song&mdash;I liked it very much.&rsquo;
		    </p>
		    <p>
		      &lsquo;I hope so,&rsquo; the Knight said doubtfully: &lsquo;but you didn&rsquo;t cry so much as I
		      thought you would.&rsquo;
		    </p>
		    <p>
		      So they shook hands, and then the Knight rode slowly away into the forest.
		      &lsquo;It won&rsquo;t take long to see him <i>off</i>, I expect,&rsquo; Alice said to herself, as
		      she stood watching him. &lsquo;There he goes! Right on his head as usual!
		      However, he gets on again pretty easily&mdash;that comes of having so many
		      things hung round the horse&mdash;&rsquo; So she went on talking to herself, as
		      she watched the horse walking leisurely along the road, and the Knight
		      tumbling off, first on one side and then on the other. After the fourth or
		      fifth tumble he reached the turn, and then she waved her handkerchief to
		      him, and waited till he was out of sight.
		    </p>
		    <p>
		      &lsquo;I hope it encouraged him,&rsquo; she said, as she turned to run down the hill:
		      &lsquo;and now for the last brook, and to be a Queen! How grand it sounds!&rsquo; A
		      very few steps brought her to the edge of the brook. &lsquo;The Eighth Square at
		      last!&rsquo; she cried as she bounded across,
		    </p>
		    <p class='tlg-separator'>
			  *****
		    </p>
		    <p>
		      and threw herself down to rest on a lawn as soft as moss, with little
		      flower-beds dotted about it here and there. &lsquo;Oh, how glad I am to get
		      here! And what <i>is</i> this on my head?&rsquo; she exclaimed in a tone of dismay, as
		      she put her hands up to something very heavy, and fitted tight all round
		      her head.
		    </p>
		    <p>
		      &lsquo;But how <i>can</i> it have got there without my knowing it?&rsquo; she said to
		      herself, as she lifted it off, and set it on her lap to make out what it
		      could possibly be.
		    </p>
		    <p>
		      It was a golden crown.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Queen Alice",
			'number' => "Nine",
			'order' => 9,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      &lsquo;Well, this <i>is</i> grand!&rsquo; said Alice. &lsquo;I never expected I should be a Queen
		      so soon&mdash;and I&rsquo;ll tell you what it is, your majesty,&rsquo; she went on in
		      a severe tone (she was always rather fond of scolding herself), &lsquo;it&rsquo;ll
		      never do for you to be lolling about on the grass like that! Queens have
		      to be dignified, you know!&rsquo;
		    </p>
		    <p>
		      So she got up and walked about&mdash;rather stiffly just at first, as she
		      was afraid that the crown might come off: but she comforted herself with
		      the thought that there was nobody to see her, &lsquo;and if I really am a
		      Queen,&rsquo; she said as she sat down again, &lsquo;I shall be able to manage it
		      quite well in time.&rsquo;
		    </p>
		    <p>
		      Everything was happening so oddly that she didn&rsquo;t feel a bit surprised at
		      finding the Red Queen and the White Queen sitting close to her, one on
		      each side: she would have liked very much to ask them how they came there,
		      but she feared it would not be quite civil. However, there would be no
		      harm, she thought, in asking if the game was over. &lsquo;Please, would you tell
		      me&mdash;&rsquo; she began, looking timidly at the Red Queen.
		    </p>
		    <p>
		      &lsquo;Speak when you&rsquo;re spoken to!&rsquo; The Queen sharply interrupted her.
		    </p>
		    <p>
		      &lsquo;But if everybody obeyed that rule,&rsquo; said Alice, who was always ready for
		      a little argument, &lsquo;and if you only spoke when you were spoken to, and the
		      other person always waited for <i>you</i> to begin, you see nobody would ever say
		      anything, so that&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Ridiculous!&rsquo; cried the Queen. &lsquo;Why, don&rsquo;t you see, child&mdash;&rsquo; here she
		      broke off with a frown, and, after thinking for a minute, suddenly changed
		      the subject of the conversation. &lsquo;What do you mean by &ldquo;If you really are a
		      Queen&rdquo;? What right have you to call yourself so? You can&rsquo;t be a Queen, you
		      know, till you&rsquo;ve passed the proper examination. And the sooner we begin
		      it, the better.&rsquo;
		    </p>
		    <p>
		      &lsquo;I only said &ldquo;if&rdquo;!&rsquo; poor Alice pleaded in a piteous tone.
		    </p>
		    <p>
		      The two Queens looked at each other, and the Red Queen remarked, with a
		      little shudder, &lsquo;She <i>says</i> she only said &ldquo;if&rdquo;&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;But she said a great deal more than that!&rsquo; the White Queen moaned,
		      wringing her hands. &lsquo;Oh, ever so much more than that!&rsquo;
		    </p>
		    <p>
		      &lsquo;So you did, you know,&rsquo; the Red Queen said to Alice. &lsquo;Always speak the
		      truth&mdash;think before you speak&mdash;and write it down afterwards.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;m sure I didn&rsquo;t mean&mdash;&rsquo; Alice was beginning, but the Red Queen
		      interrupted her impatiently.
		    </p>
		    <p>
		      &lsquo;That&rsquo;s just what I complain of! You <i>should</i> have meant! What do you
		      suppose is the use of child without any meaning? Even a joke should have
		      some meaning&mdash;and a child&rsquo;s more important than a joke, I hope. You
		      couldn&rsquo;t deny that, even if you tried with both hands.&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t deny things with my <i>hands</i>,&rsquo; Alice objected.
		    </p>
		    <p>
		      &lsquo;Nobody said you did,&rsquo; said the Red Queen. &lsquo;I said you couldn&rsquo;t if you
		      tried.&rsquo;
		    </p>
		    <p>
		      &lsquo;She&rsquo;s in that state of mind,&rsquo; said the White Queen, &lsquo;that she wants to
		      deny <i>something</i>&mdash;only she doesn&rsquo;t know what to deny!&rsquo;
		    </p>
		    <p>
		      &lsquo;A nasty, vicious temper,&rsquo; the Red Queen remarked; and then there was an
		      uncomfortable silence for a minute or two.
		    </p>
		    <p>
		      The Red Queen broke the silence by saying to the White Queen, &lsquo;I invite
		      you to Alice&rsquo;s dinner-party this afternoon.&rsquo;
		    </p>
		    <p>
		      The White Queen smiled feebly, and said &lsquo;And I invite <i>you</i>.&rsquo;
		    </p>
		    <p>
		      &lsquo;I didn&rsquo;t know I was to have a party at all,&rsquo; said Alice; &lsquo;but if there is
		      to be one, I think <i>I</i> ought to invite the guests.&rsquo;
		    </p>
		    <p>
		      &lsquo;We gave you the opportunity of doing it,&rsquo; the Red Queen remarked: &lsquo;but I
		      daresay you&rsquo;ve not had many lessons in manners yet?&rsquo;
		    </p>
		    <p>
		      &lsquo;Manners are not taught in lessons,&rsquo; said Alice. &lsquo;Lessons teach you to do
		      sums, and things of that sort.&rsquo;
		    </p>
		    <p>
		      &lsquo;And you do Addition?&rsquo; the White Queen asked. &lsquo;What&rsquo;s one and one and one
		      and one and one and one and one and one and one and one?&rsquo;
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know,&rsquo; said Alice. &lsquo;I lost count.&rsquo;
		    </p>
		    <p>
		      &lsquo;She can&rsquo;t do Addition,&rsquo; the Red Queen interrupted. &lsquo;Can you do
		      Subtraction? Take nine from eight.&rsquo;
		    </p>
		    <p>
		      &lsquo;Nine from eight I can&rsquo;t, you know,&rsquo; Alice replied very readily: &lsquo;but&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;She can&rsquo;t do Subtraction,&rsquo; said the White Queen. &lsquo;Can you do Division?
		      Divide a loaf by a knife&mdash;what&rsquo;s the answer to that?&rsquo;
		    </p>
		    <p>
		      &lsquo;I suppose&mdash;&rsquo; Alice was beginning, but the Red Queen answered for
		      her. &lsquo;Bread-and-butter, of course. Try another Subtraction sum. Take a
		      bone from a dog: what remains?&rsquo;
		    </p>
		    <p>
		      Alice considered. &lsquo;The bone wouldn&rsquo;t remain, of course, if I took it&mdash;and
		      the dog wouldn&rsquo;t remain; it would come to bite me&mdash;and I&rsquo;m sure <i>I</i>
		      shouldn&rsquo;t remain!&rsquo;
		    </p>
		    <p>
		      &lsquo;Then you think nothing would remain?&rsquo; said the Red Queen.
		    </p>
		    <p>
		      &lsquo;I think that&rsquo;s the answer.&rsquo;
		    </p>
		    <p>
		      &lsquo;Wrong, as usual,&rsquo; said the Red Queen: &lsquo;the dog&rsquo;s temper would remain.&rsquo;
		    </p>
		    <p>
		      &lsquo;But I don&rsquo;t see how&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Why, look here!&rsquo; the Red Queen cried. &lsquo;The dog would lose its temper,
		      wouldn&rsquo;t it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Perhaps it would,&rsquo; Alice replied cautiously.
		    </p>
		    <p>
		      &lsquo;Then if the dog went away, its temper would remain!&rsquo; the Queen exclaimed
		      triumphantly.
		    </p>
		    <p>
		      Alice said, as gravely as she could, &lsquo;They might go different ways.&rsquo; But
		      she couldn&rsquo;t help thinking to herself, &lsquo;What dreadful nonsense we <i>are</i>
		      talking!&rsquo;
		    </p>
		    <p>
		      &lsquo;She can&rsquo;t do sums a <i>bit</i>!&rsquo; the Queens said together, with great emphasis.
		    </p>
		    <p>
		      &lsquo;Can <i>you</i> do sums?&rsquo; Alice said, turning suddenly on the White Queen, for
		      she didn&rsquo;t like being found fault with so much.
		    </p>
		    <p>
		      The Queen gasped and shut her eyes. &lsquo;I can do Addition, if you give me
		      time&mdash;but I can&rsquo;t do Subtraction, under <i>any</i> circumstances!&rsquo;
		    </p>
		    <p>
		      &lsquo;Of course you know your A B C?&rsquo; said the Red Queen.
		    </p>
		    <p>
		      &lsquo;To be sure I do.&rsquo; said Alice.
		    </p>
		    <p>
		      &lsquo;So do I,&rsquo; the White Queen whispered: &lsquo;we&rsquo;ll often say it over together,
		      dear. And I&rsquo;ll tell you a secret&mdash;I can read words of one letter!
		      Isn&rsquo;t <i>that</i> grand! However, don&rsquo;t be discouraged. You&rsquo;ll come to it in
		      time.&rsquo;
		    </p>
		    <p>
		      Here the Red Queen began again. &lsquo;Can you answer useful questions?&rsquo; she
		      said. &lsquo;How is bread made?&rsquo;
		    </p>
		    <p>
		      &lsquo;I know <i>that</i>!&rsquo; Alice cried eagerly. &lsquo;You take some flour&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Where do you pick the flower?&rsquo; the White Queen asked. &lsquo;In a garden, or in
		      the hedges?&rsquo;
		    </p>
		    <p>
		      &lsquo;Well, it isn&rsquo;t <i>picked</i> at all,&rsquo; Alice explained: &lsquo;it&rsquo;s <i>ground</i>&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;How many acres of ground?&rsquo; said the White Queen. &lsquo;You mustn&rsquo;t leave out
		      so many things.&rsquo;
		    </p>
		    <p>
		      &lsquo;Fan her head!&rsquo; the Red Queen anxiously interrupted. &lsquo;She&rsquo;ll be feverish
		      after so much thinking.&rsquo; So they set to work and fanned her with bunches
		      of leaves, till she had to beg them to leave off, it blew her hair about
		      so.
		    </p>
		    <p>
		      &lsquo;She&rsquo;s all right again now,&rsquo; said the Red Queen. &lsquo;Do you know Languages?
		      What&rsquo;s the French for fiddle-de-dee?&rsquo;
		    </p>
		    <p>
		      &lsquo;Fiddle-de-dee&rsquo;s not English,&rsquo; Alice replied gravely.
		    </p>
		    <p>
		      &lsquo;Who ever said it was?&rsquo; said the Red Queen.
		    </p>
		    <p>
		      Alice thought she saw a way out of the difficulty this time. &lsquo;If you&rsquo;ll
		      tell me what language &ldquo;fiddle-de-dee&rdquo; is, I&rsquo;ll tell you the French for
		      it!&rsquo; she exclaimed triumphantly.
		    </p>
		    <p>
		      But the Red Queen drew herself up rather stiffly, and said &lsquo;Queens never
		      make bargains.&rsquo;
		    </p>
		    <p>
		      &lsquo;I wish Queens never asked questions,&rsquo; Alice thought to herself.
		    </p>
		    <p>
		      &lsquo;Don&rsquo;t let us quarrel,&rsquo; the White Queen said in an anxious tone. &lsquo;What is
		      the cause of lightning?&rsquo;
		    </p>
		    <p>
		      &lsquo;The cause of lightning,&rsquo; Alice said very decidedly, for she felt quite
		      certain about this, &lsquo;is the thunder&mdash;no, no!&rsquo; she hastily corrected
		      herself. &lsquo;I meant the other way.&rsquo;
		    </p>
		    <p>
		      &lsquo;It&rsquo;s too late to correct it,&rsquo; said the Red Queen: &lsquo;when you&rsquo;ve once said
		      a thing, that fixes it, and you must take the consequences.&rsquo;
		    </p>
		    <p>
		      &lsquo;Which reminds me&mdash;&rsquo; the White Queen said, looking down and nervously
		      clasping and unclasping her hands, &lsquo;we had <i>such</i> a thunderstorm last
		      Tuesday&mdash;I mean one of the last set of Tuesdays, you know.&rsquo;
		    </p>
		    <p>
		      Alice was puzzled. &lsquo;In <i>our</i> country,&rsquo; she remarked, &lsquo;there&rsquo;s only one day
		      at a time.&rsquo;
		    </p>
		    <p>
		      The Red Queen said, &lsquo;That&rsquo;s a poor thin way of doing things. Now <i>here</i>, we
		      mostly have days and nights two or three at a time, and sometimes in the
		      winter we take as many as five nights together&mdash;for warmth, you
		      know.&rsquo;
		    </p>
		    <p>
		      &lsquo;Are five nights warmer than one night, then?&rsquo; Alice ventured to ask.
		    </p>
		    <p>
		      &lsquo;Five times as warm, of course.&rsquo;
		    </p>
		    <p>
		      &lsquo;But they should be five times as <i>cold</i>, by the same rule&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;Just so!&rsquo; cried the Red Queen. &lsquo;Five times as warm, <i>and</i> five times as
		      cold&mdash;just as I&rsquo;m five times as rich as you are, <i>and</i> five times as
		      clever!&rsquo;
		    </p>
		    <p>
		      Alice sighed and gave it up. &lsquo;It&rsquo;s exactly like a riddle with no answer!&rsquo;
		      she thought.
		    </p>
		    <p>
		      &lsquo;Humpty Dumpty saw it too,&rsquo; the White Queen went on in a low voice, more
		      as if she were talking to herself. &lsquo;He came to the door with a corkscrew
		      in his hand&mdash;&rsquo;
		    </p>
		    <p>
		      &lsquo;What did he want?&rsquo; said the Red Queen.
		    </p>
		    <p>
		      &lsquo;He said he <i>would</i> come in,&rsquo; the White Queen went on, &lsquo;because he was
		      looking for a hippopotamus. Now, as it happened, there wasn&rsquo;t such a thing
		      in the house, that morning.&rsquo;
		    </p>
		    <p>
		      &lsquo;Is there generally?&rsquo; Alice asked in an astonished tone.
		    </p>
		    <p>
		      &lsquo;Well, only on Thursdays,&rsquo; said the Queen.
		    </p>
		    <p>
		      &lsquo;I know what he came for,&rsquo; said Alice: &lsquo;he wanted to punish the fish,
		      because&mdash;&rsquo;
		    </p>
		    <p>
		      Here the White Queen began again. &lsquo;It was <i>such</i> a thunderstorm, you can&rsquo;t
		      think!&rsquo; (&lsquo;She <i>never</i> could, you know,&rsquo; said the Red Queen.) &lsquo;And part of
		      the roof came off, and ever so much thunder got in&mdash;and it went
		      rolling round the room in great lumps&mdash;and knocking over the tables
		      and things&mdash;till I was so frightened, I couldn&rsquo;t remember my own
		      name!&rsquo;
		    </p>
		    <p>
		      Alice thought to herself, &lsquo;I never should <i>try</i> to remember my name in the
		      middle of an accident! Where would be the use of it?&rsquo; but she did not say
		      this aloud, for fear of hurting the poor Queen&rsquo;s feeling.
		    </p>
		    <p>
		      &lsquo;Your Majesty must excuse her,&rsquo; the Red Queen said to Alice, taking one of
		      the White Queen&rsquo;s hands in her own, and gently stroking it: &lsquo;she means
		      well, but she can&rsquo;t help saying foolish things, as a general rule.&rsquo;
		    </p>
		    <p>
		      The White Queen looked timidly at Alice, who felt she <i>ought</i> to say
		      something kind, but really couldn&rsquo;t think of anything at the moment.
		    </p>
		    <p>
		      &lsquo;She never was really well brought up,&rsquo; the Red Queen went on: &lsquo;but it&rsquo;s
		      amazing how good-tempered she is! Pat her on the head, and see how pleased
		      she&rsquo;ll be!&rsquo; But this was more than Alice had courage to do.
		    </p>
		    <p>
		      &lsquo;A little kindness&mdash;and putting her hair in papers&mdash;would do
		      wonders with her&mdash;&rsquo;
		    </p>
		    <p>
		      The White Queen gave a deep sigh, and laid her head on Alice&rsquo;s shoulder.
		      &lsquo;I <i>am</i> so sleepy?&rsquo; she moaned.
		    </p>
		    <p>
		      &lsquo;She&rsquo;s tired, poor thing!&rsquo; said the Red Queen. &lsquo;Smooth her hair&mdash;lend
		      her your nightcap&mdash;and sing her a soothing lullaby.&rsquo;
		    </p>
		    <p>
		      &lsquo;I haven&rsquo;t got a nightcap with me,&rsquo; said Alice, as she tried to obey the
		      first direction: &lsquo;and I don&rsquo;t know any soothing lullabies.&rsquo;
		    </p>
		    <p>
		      &lsquo;I must do it myself, then,&rsquo; said the Red Queen, and she began:
		    </p>
		    <p class='tlg-hush stanza'>
		   &lsquo;Hush-a-by lady, in Alice&rsquo;s lap!
		    <br>
		   Till the feast&rsquo;s ready, we&rsquo;ve time for a nap:
		    <br>
		   When the feast&rsquo;s over, we&rsquo;ll go to the ball&mdash;
		    <br>
		   Red Queen, and White Queen, and Alice, and all!
		    </p>
		    <p>
		      &lsquo;And now you know the words,&rsquo; she added, as she put her head down on
		      Alice&rsquo;s other shoulder, &lsquo;just sing it through to <i>me</i>. I&rsquo;m getting sleepy,
		      too.&rsquo; In another moment both Queens were fast asleep, and snoring loud.
		    </p>
		    <p>
		      &lsquo;What <i>am</i> I to do?&rsquo; exclaimed Alice, looking about in great perplexity, as
		      first one round head, and then the other, rolled down from her shoulder,
		      and lay like a heavy lump in her lap. &lsquo;I don&rsquo;t think it <i>ever</i> happened
		      before, that any one had to take care of two Queens asleep at once! No,
		      not in all the History of England&mdash;it couldn&rsquo;t, you know, because
		      there never was more than one Queen at a time. Do wake up, you heavy
		      things!&rsquo; she went on in an impatient tone; but there was no answer but a
		      gentle snoring.
		    </p>
		    <p>
		      The snoring got more distinct every minute, and sounded more like a tune:
		      at last she could even make out the words, and she listened so eagerly
		      that, when the two great heads vanished from her lap, she hardly missed
		      them.
		    </p>
		    <p>
		      She was standing before an arched doorway over which were the words QUEEN
		      ALICE in large letters, and on each side of the arch there was a
		      bell-handle; one was marked &lsquo;Visitors&rsquo; Bell,&rsquo; and the other &lsquo;Servants&rsquo;
		      Bell.&rsquo;
		    </p>
		    <p>
		      &lsquo;I&rsquo;ll wait till the song&rsquo;s over,&rsquo; thought Alice, &lsquo;and then I&rsquo;ll ring&mdash;the&mdash;<i>which</i>
		      bell must I ring?&rsquo; she went on, very much puzzled by the names. &lsquo;I&rsquo;m not a
		      visitor, and I&rsquo;m not a servant. There <i>ought</i> to be one marked &ldquo;Queen,&rdquo; you
		      know&mdash;&rsquo;
		    </p>
		    <p>
		      Just then the door opened a little way, and a creature with a long beak
		      put its head out for a moment and said &lsquo;No admittance till the week after
		      next!&rsquo; and shut the door again with a bang.
		    </p>
		    <p>
		      Alice knocked and rang in vain for a long time, but at last, a very old
		      Frog, who was sitting under a tree, got up and hobbled slowly towards her:
		      he was dressed in bright yellow, and had enormous boots on.
		    </p>
		    <p>
		      &lsquo;What is it, now?&rsquo; the Frog said in a deep hoarse whisper.
		    </p>
		    <p>
		      Alice turned round, ready to find fault with anybody. &lsquo;Where&rsquo;s the servant
		      whose business it is to answer the door?&rsquo; she began angrily.
		    </p>
		    <p>
		      &lsquo;Which door?&rsquo; said the Frog.
		    </p>
		    <p>
		      Alice almost stamped with irritation at the slow drawl in which he spoke.
		      &lsquo;<i>This</i> door, of course!&rsquo;
		    </p>
		    <p>
		      The Frog looked at the door with his large dull eyes for a minute: then he
		      went nearer and rubbed it with his thumb, as if he were trying whether the
		      paint would come off; then he looked at Alice.
		    </p>
		    <p>
		      &lsquo;To answer the door?&rsquo; he said. &lsquo;What&rsquo;s it been asking of?&rsquo; He was so
		      hoarse that Alice could scarcely hear him.
		    </p>
		    <p>
		      &lsquo;I don&rsquo;t know what you mean,&rsquo; she said.
		    </p>
		    <p>
		      &lsquo;I talks English, doesn&rsquo;t I?&rsquo; the Frog went on. &lsquo;Or are you deaf? What did
		      it ask you?&rsquo;
		    </p>
		    <p>
		      &lsquo;Nothing!&rsquo; Alice said impatiently. &lsquo;I&rsquo;ve been knocking at it!&rsquo;
		    </p>
		    <p>
		      &lsquo;Shouldn&rsquo;t do that&mdash;shouldn&rsquo;t do that&mdash;&rsquo; the Frog muttered.
		      &lsquo;Vexes it, you know.&rsquo; Then he went up and gave the door a kick with one of
		      his great feet. &lsquo;You let <i>it</i> alone,&rsquo; he panted out, as he hobbled back to
		      his tree, &lsquo;and it&rsquo;ll let <i>you</i> alone, you know.&rsquo;
		    </p>
		    <p>
		      At this moment the door was flung open, and a shrill voice was heard
		      singing:
		    </p>
		    <p class='tlg-dine stanza'>
		   &lsquo;To the Looking-Glass world it was Alice that said,
		    <br>
		   &ldquo;I&rsquo;ve a sceptre in hand, I&rsquo;ve a crown on my head;
		    <br>
		   Let the Looking-Glass creatures, whatever they be,
		    <br>
		   Come and dine with the Red Queen, the White Queen, and me.&rdquo;&rsquo;
		    </p>
		    <p>
		      And hundreds of voices joined in the chorus:
		    </p>
		    <p class='tlg-dine stanza'>
		  &lsquo;Then fill up the glasses as quick as you can,
		    <br>
		  And sprinkle the table with buttons and bran:
		    <br>
		  Put cats in the coffee, and mice in the tea&mdash;
		    <br>
		  And welcome Queen Alice with thirty-times-three!&rsquo;
		    </p>
		    <p>
		      Then followed a confused noise of cheering, and Alice thought to herself,
		      &lsquo;Thirty times three makes ninety. I wonder if any one&rsquo;s counting?&rsquo; In a
		      minute there was silence again, and the same shrill voice sang another
		      verse;
		    </p>
		    <p class='tlg-dine stanza'>
		  &lsquo;&ldquo;O Looking-Glass creatures,&rdquo; quoth Alice, &ldquo;draw near!
		    <br>
		  &lsquo;Tis an honour to see me, a favour to hear:
		    <br>
		  &lsquo;Tis a privilege high to have dinner and tea
		    <br>
		  Along with the Red Queen, the White Queen, and me!&rdquo;&rsquo;
		    </p>
		    <p>
		      Then came the chorus again:&mdash;
		    </p>
		    <p class='tlg-dine stanza'>
		  &lsquo;Then fill up the glasses with treacle and ink,
		    <br>
		  Or anything else that is pleasant to drink:
		    <br>
		  Mix sand with the cider, and wool with the wine&mdash;
		    <br>
		  And welcome Queen Alice with ninety-times-nine!&rsquo;
		    </p>
		    <p>
		      &lsquo;Ninety times nine!&rsquo; Alice repeated in despair, &lsquo;Oh, that&rsquo;ll never be
		      done! I&rsquo;d better go in at once&mdash;&rsquo; and there was a dead silence the
		      moment she appeared.
		    </p>
		    <p>
		      Alice glanced nervously along the table, as she walked up the large hall,
		      and noticed that there were about fifty guests, of all kinds: some were
		      animals, some birds, and there were even a few flowers among them. &lsquo;I&rsquo;m
		      glad they&rsquo;ve come without waiting to be asked,&rsquo; she thought: &lsquo;I should
		      never have known who were the right people to invite!&rsquo;
		    </p>
		    <p>
		      There were three chairs at the head of the table; the Red and White Queens
		      had already taken two of them, but the middle one was empty. Alice sat
		      down in it, rather uncomfortable in the silence, and longing for some one
		      to speak.
		    </p>
		    <p>
		      At last the Red Queen began. &lsquo;You&rsquo;ve missed the soup and fish,&rsquo; she said.
		      &lsquo;Put on the joint!&rsquo; And the waiters set a leg of mutton before Alice, who
		      looked at it rather anxiously, as she had never had to carve a joint
		      before.
		    </p>
		    <p>
		      &lsquo;You look a little shy; let me introduce you to that leg of mutton,&rsquo; said
		      the Red Queen. &lsquo;Alice&mdash;Mutton; Mutton&mdash;Alice.&rsquo; The leg of mutton
		      got up in the dish and made a little bow to Alice; and Alice returned the
		      bow, not knowing whether to be frightened or amused.
		    </p>
		    <p>
		      &lsquo;May I give you a slice?&rsquo; she said, taking up the knife and fork, and
		      looking from one Queen to the other.
		    </p>
		    <p>
		      &lsquo;Certainly not,&rsquo; the Red Queen said, very decidedly: &lsquo;it isn&rsquo;t etiquette
		      to cut any one you&rsquo;ve been introduced to. Remove the joint!&rsquo; And the
		      waiters carried it off, and brought a large plum-pudding in its place.
		    </p>
		    <p>
		      &lsquo;I won&rsquo;t be introduced to the pudding, please,&rsquo; Alice said rather hastily,
		      &lsquo;or we shall get no dinner at all. May I give you some?&rsquo;
		    </p>
		    <p>
		      But the Red Queen looked sulky, and growled &lsquo;Pudding&mdash;Alice; Alice&mdash;Pudding.
		      Remove the pudding!&rsquo; and the waiters took it away so quickly that Alice
		      couldn&rsquo;t return its bow.
		    </p>
		    <p>
		      However, she didn&rsquo;t see why the Red Queen should be the only one to give
		      orders, so, as an experiment, she called out &lsquo;Waiter! Bring back the
		      pudding!&rsquo; and there it was again in a moment like a conjuring-trick. It
		      was so large that she couldn&rsquo;t help feeling a <i>little</i> shy with it, as she
		      had been with the mutton; however, she conquered her shyness by a great
		      effort and cut a slice and handed it to the Red Queen.
		    </p>
		    <p>
		      &lsquo;What impertinence!&rsquo; said the Pudding. &lsquo;I wonder how you&rsquo;d like it, if I
		      were to cut a slice out of <i>you</i>, you creature!&rsquo;
		    </p>
		    <p>
		      It spoke in a thick, suety sort of voice, and Alice hadn&rsquo;t a word to say
		      in reply: she could only sit and look at it and gasp.
		    </p>
		    <p>
		      &lsquo;Make a remark,&rsquo; said the Red Queen: &lsquo;it&rsquo;s ridiculous to leave all the
		      conversation to the pudding!&rsquo;
		    </p>
		    <p>
		      &lsquo;Do you know, I&rsquo;ve had such a quantity of poetry repeated to me to-day,&rsquo;
		      Alice began, a little frightened at finding that, the moment she opened
		      her lips, there was dead silence, and all eyes were fixed upon her; &lsquo;and
		      it&rsquo;s a very curious thing, I think&mdash;every poem was about fishes in
		      some way. Do you know why they&rsquo;re so fond of fishes, all about here?&rsquo;
		    </p>
		    <p>
		      She spoke to the Red Queen, whose answer was a little wide of the mark.
		      &lsquo;As to fishes,&rsquo; she said, very slowly and solemnly, putting her mouth
		      close to Alice&rsquo;s ear, &lsquo;her White Majesty knows a lovely riddle&mdash;all
		      in poetry&mdash;all about fishes. Shall she repeat it?&rsquo;
		    </p>
		    <p>
		      &lsquo;Her Red Majesty&rsquo;s very kind to mention it,&rsquo; the White Queen murmured into
		      Alice&rsquo;s other ear, in a voice like the cooing of a pigeon. &lsquo;It would be
		      <i>such</i> a treat! May I?&rsquo;
		    </p>
		    <p>
		      &lsquo;Please do,&rsquo; Alice said very politely.
		    </p>
		    <p>
		      The White Queen laughed with delight, and stroked Alice&rsquo;s cheek. Then she
		      began:
		    </p>
		    <p class='tlg-fish stanza'>
		    &lsquo;&ldquo;First, the fish must be caught.&rdquo;
		    <br>
		   That is easy: a baby, I think, could have caught it.
		    <br>
		    &ldquo;Next, the fish must be bought.&rdquo;
		    <br>
		   That is easy: a penny, I think, would have bought it.
		    </p>
		    <p class='tlg-fish stanza'>
		    &ldquo;Now cook me the fish!&rdquo;
		    <br>
		   That is easy, and will not take more than a minute.
		    <br>
		    &ldquo;Let it lie in a dish!&rdquo;
		    <br>
		   That is easy, because it already is in it.
		    </p>
		    <p class='tlg-fish stanza'>
		    &ldquo;Bring it here! Let me sup!&rdquo;
		    <br>
		   It is easy to set such a dish on the table.
		    <br>
		    &ldquo;Take the dish-cover up!&rdquo;
		    <br>
		   Ah, that is so hard that I fear I&rsquo;m unable!
		    </p>
		    <p class='tlg-fish stanza'>
		    For it holds it like glue&mdash;
		    <br>
		  Holds the lid to the dish, while it lies in the middle:
		    <br>
		    Which is easiest to do,
		    <br>
		  Un-dish-cover the fish, or dishcover the riddle?&rsquo;
		    </p>
		    <p>
		      &lsquo;Take a minute to think about it, and then guess,&rsquo; said the Red Queen.
		      &lsquo;Meanwhile, we&rsquo;ll drink your health&mdash;Queen Alice&rsquo;s health!&rsquo; she
		      screamed at the top of her voice, and all the guests began drinking it
		      directly, and very queerly they managed it: some of them put their glasses
		      upon their heads like extinguishers, and drank all that trickled down
		      their faces&mdash;others upset the decanters, and drank the wine as it ran
		      off the edges of the table&mdash;and three of them (who looked like
		      kangaroos) scrambled into the dish of roast mutton, and began eagerly
		      lapping up the gravy, &lsquo;just like pigs in a trough!&rsquo; thought Alice.
		    </p>
		    <p>
		      &lsquo;You ought to return thanks in a neat speech,&rsquo; the Red Queen said,
		      frowning at Alice as she spoke.
		    </p>
		    <p>
		      &lsquo;We must support you, you know,&rsquo; the White Queen whispered, as Alice got
		      up to do it, very obediently, but a little frightened.
		    </p>
		    <p>
		      &lsquo;Thank you very much,&rsquo; she whispered in reply, &lsquo;but I can do quite well
		      without.&rsquo;
		    </p>
		    <p>
		      &lsquo;That wouldn&rsquo;t be at all the thing,&rsquo; the Red Queen said very decidedly: so
		      Alice tried to submit to it with a good grace.
		    </p>
		    <p>
		      (&lsquo;And they <i>did</i> push so!&rsquo; she said afterwards, when she was telling her
		      sister the history of the feast. &lsquo;You would have thought they wanted to
		      squeeze me flat!&rsquo;)
		    </p>
		    <p>
		      In fact it was rather difficult for her to keep in her place while she
		      made her speech: the two Queens pushed her so, one on each side, that they
		      nearly lifted her up into the air: &lsquo;I rise to return thanks&mdash;&rsquo; Alice
		      began: and she really <i>did</i> rise as she spoke, several inches; but she got
		      hold of the edge of the table, and managed to pull herself down again.
		    </p>
		    <p>
		      &lsquo;Take care of yourself!&rsquo; screamed the White Queen, seizing Alice&rsquo;s hair
		      with both her hands. &lsquo;Something&rsquo;s going to happen!&rsquo;
		    </p>
		    <p>
		      And then (as Alice afterwards described it) all sorts of things happened
		      in a moment. The candles all grew up to the ceiling, looking something
		      like a bed of rushes with fireworks at the top. As to the bottles, they
		      each took a pair of plates, which they hastily fitted on as wings, and so,
		      with forks for legs, went fluttering about in all directions: &lsquo;and very
		      like birds they look,&rsquo; Alice thought to herself, as well as she could in
		      the dreadful confusion that was beginning.
		    </p>
		    <p>
		      At this moment she heard a hoarse laugh at her side, and turned to see
		      what was the matter with the White Queen; but, instead of the Queen, there
		      was the leg of mutton sitting in the chair. &lsquo;Here I am!&rsquo; cried a voice
		      from the soup tureen, and Alice turned again, just in time to see the
		      Queen&rsquo;s broad good-natured face grinning at her for a moment over the edge
		      of the tureen, before she disappeared into the soup.
		    </p>
		    <p>
		      There was not a moment to be lost. Already several of the guests were
		      lying down in the dishes, and the soup ladle was walking up the table
		      towards Alice&rsquo;s chair, and beckoning to her impatiently to get out of its
		      way.
		    </p>
		    <p>
		      &lsquo;I can&rsquo;t stand this any longer!&rsquo; she cried as she jumped up and seized the
		      table-cloth with both hands: one good pull, and plates, dishes, guests,
		      and candles came crashing down together in a heap on the floor.
		    </p>
		    <p>
		      &lsquo;And as for <i>you</i>,&rsquo; she went on, turning fiercely upon the Red Queen, whom
		      she considered as the cause of all the mischief&mdash;but the Queen was no
		      longer at her side&mdash;she had suddenly dwindled down to the size of a
		      little doll, and was now on the table, merrily running round and round
		      after her own shawl, which was trailing behind her.
		    </p>
		    <p>
		      At any other time, Alice would have felt surprised at this, but she was
		      far too much excited to be surprised at anything <i>now</i>. &lsquo;As for <i>you</i>,&rsquo; she
		      repeated, catching hold of the little creature in the very act of jumping
		      over a bottle which had just lighted upon the table, &lsquo;I&rsquo;ll shake you into
		      a kitten, that I will!&rsquo;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Shaking",
			'number' => "Ten",
			'order' => 10,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      She took her off the table as she spoke, and shook her backwards and
		      forwards with all her might.
		    </p>
		    <p>
		      The Red Queen made no resistance whatever; only her face grew very small,
		      and her eyes got large and green: and still, as Alice went on shaking her,
		      she kept on growing shorter&mdash;and fatter&mdash;and softer&mdash;and
		      rounder&mdash;and&mdash;
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Waking",
			'number' => "Eleven",
			'order' => 11,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      &mdash;and it really <i>was</i> a kitten, after all.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Which Dreamed It?",
			'number' => "One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "Through the Looking-Glass, and What Alice Found There")->value('id'),
			'content' => "
			<p>
		      &lsquo;Your majesty shouldn&rsquo;t purr so loud,&rsquo; Alice said, rubbing her eyes, and
		      addressing the kitten, respectfully, yet with some severity. &lsquo;You woke me
		      out of oh! such a nice dream! And you&rsquo;ve been along with me, Kitty&mdash;all
		      through the Looking-Glass world. Did you know it, dear?&rsquo;
		    </p>
		    <p>
		      It is a very inconvenient habit of kittens (Alice had once made the
		      remark) that, whatever you say to them, they <i>always</i> purr. &lsquo;If they would
		      only purr for &ldquo;yes&rdquo; and mew for &ldquo;no,&rdquo; or any rule of that sort,&rsquo; she had
		      said, &lsquo;so that one could keep up a conversation! But how <i>can</i> you talk with
		      a person if they always say the same thing?&rsquo;
		    </p>
		    <p>
		      On this occasion the kitten only purred: and it was impossible to guess
		      whether it meant &lsquo;yes&rsquo; or &lsquo;no.&rsquo;
		    </p>
		    <p>
		      So Alice hunted among the chessmen on the table till she had found the Red
		      Queen: then she went down on her knees on the hearth-rug, and put the
		      kitten and the Queen to look at each other. &lsquo;Now, Kitty!&rsquo; she cried,
		      clapping her hands triumphantly. &lsquo;Confess that was what you turned into!&rsquo;
		    </p>
		    <p>
		      (&lsquo;But it wouldn&rsquo;t look at it,&rsquo; she said, when she was explaining the thing
		      afterwards to her sister: &lsquo;it turned away its head, and pretended not to
		      see it: but it looked a <i>little</i> ashamed of itself, so I think it <i>must</i> have
		      been the Red Queen.&rsquo;)
		    </p>
		    <p>
		      &lsquo;Sit up a little more stiffly, dear!&rsquo; Alice cried with a merry laugh. &lsquo;And
		      curtsey while you&rsquo;re thinking what to&mdash;what to purr. It saves time,
		      remember!&rsquo; And she caught it up and gave it one little kiss, &lsquo;just in
		      honour of having been a Red Queen.&rsquo;
		    </p>
		    <p>
		      &lsquo;Snowdrop, my pet!&rsquo; she went on, looking over her shoulder at the White
		      Kitten, which was still patiently undergoing its toilet, &lsquo;when <i>will</i> Dinah
		      have finished with your White Majesty, I wonder? That must be the reason
		      you were so untidy in my dream&mdash;Dinah! do you know that you&rsquo;re
		      scrubbing a White Queen? Really, it&rsquo;s most disrespectful of you!
		    </p>
		    <p>
		      &lsquo;And what did <i>Dinah</i> turn to, I wonder?&rsquo; she prattled on, as she settled
		      comfortably down, with one elbow in the rug, and her chin in her hand, to
		      watch the kittens. &lsquo;Tell me, Dinah, did you turn to Humpty Dumpty? I <i>think</i>
		      you did&mdash;however, you&rsquo;d better not mention it to your friends just
		      yet, for I&rsquo;m not sure.
		    </p>
		    <p>
		      &lsquo;By the way, Kitty, if only you&rsquo;d been really with me in my dream, there
		      was one thing you <i>would</i> have enjoyed&mdash;I had such a quantity of poetry
		      said to me, all about fishes! To-morrow morning you shall have a real
		      treat. All the time you&rsquo;re eating your breakfast, I&rsquo;ll repeat &ldquo;The Walrus
		      and the Carpenter&rdquo; to you; and then you can make believe it&rsquo;s oysters,
		      dear!
		    </p>
		    <p>
		      &lsquo;Now, Kitty, let&rsquo;s consider who it was that dreamed it all. This is a
		      serious question, my dear, and you should <i>not</i> go on licking your paw like
		      that&mdash;as if Dinah hadn&rsquo;t washed you this morning! You see, Kitty, it
		      <i>must</i> have been either me or the Red King. He was part of my dream, of
		      course&mdash;but then I was part of his dream, too! <i>Was</i> it the Red King,
		      Kitty? You were his wife, my dear, so you ought to know&mdash;Oh, Kitty,
		      <i>do</i> help to settle it! I&rsquo;m sure your paw can wait!&rsquo; But the provoking
		      kitten only began on the other paw, and pretended it hadn&rsquo;t heard the
		      question.
		    </p>
		    <p>
		      Which do <i>you</i> think it was?
		    </p>
		    <p class='tlg-dreams stanza'>
		         A boat beneath a sunny sky,
		    <br>
		         Lingering onward dreamily
		    <br>
		         In an evening of July&mdash;
		    </p>
		    <p class='tlg-dreams stanza'>
		         Children three that nestle near,
		    <br>
		         Eager eye and willing ear,
		    <br>
		         Pleased a simple tale to hear&mdash;
		    </p>
		    <p class='tlg-dreams stanza'>
		         Long has paled that sunny sky:
		    <br>
		         Echoes fade and memories die.
		    <br>
		         Autumn frosts have slain July.
		    </p>
		    <p class='tlg-dreams stanza'>
		         Still she haunts me, phantomwise,
		    <br>
		         Alice moving under skies
		    <br>
		         Never seen by waking eyes.
		    </p>
		    <p class='tlg-dreams stanza'>
		         Children yet, the tale to hear,
		    <br>
		         Eager eye and willing ear,
		    <br>
		         Lovingly shall nestle near.
		    </p>
		    <p class='tlg-dreams stanza'>
		         In a Wonderland they lie,
		    <br>
		         Dreaming as the days go by,
		    <br>
		         Dreaming as the summers die:
		    </p>
		    <p class='tlg-dreams stanza'>
		         Ever drifting down the stream&mdash;
		    <br>
		         Lingering in the golden gleam&mdash;
		    <br>
		         Life, what is it but a dream?
		    </p>
		    <p class='tlg-end'>
		                THE END
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "A Scandal in Bohemia",
			'number' => "One: I",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Sherlock Holmes")->value('id'),
			'content' => "
			<p>To Sherlock Holmes she is always <i>the</i> woman. I have seldom heard
			him mention her under any other name. In his eyes she eclipses
			and predominates the whole of her sex. It was not that he felt
			any emotion akin to love for Irene Adler. All emotions, and that
			one particularly, were abhorrent to his cold, precise but
			admirably balanced mind. He was, I take it, the most perfect
			reasoning and observing machine that the world has seen, but as a
			lover he would have placed himself in a false position. He never
			spoke of the softer passions, save with a gibe and a sneer. They
			were admirable things for the observer&#8212;excellent for drawing the
			veil from men&#8217;s motives and actions. But for the trained reasoner
			to admit such intrusions into his own delicate and finely
			adjusted temperament was to introduce a distracting factor which
			might throw a doubt upon all his mental results. Grit in a
			sensitive instrument, or a crack in one of his own high-power
			lenses, would not be more disturbing than a strong emotion in a
			nature such as his. And yet there was but one woman to him, and
			that woman was the late Irene Adler, of dubious and questionable
			memory.
			<p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Mr. Sherlock Holmes",
			'number' => "One",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Hound of the Baskervilles")->value('id'),
			'content' => "
			<p>
		      Mr. Sherlock Holmes, who was usually very late in the mornings, save upon
		      those not infrequent occasions when he was up all night, was seated at the
		      breakfast table. I stood upon the hearth-rug and picked up the stick which
		      our visitor had left behind him the night before. It was a fine, thick
		      piece of wood, bulbous-headed, of the sort which is known as a &ldquo;Penang
		      lawyer.&rdquo; Just under the head was a broad silver band nearly an inch
		      across. &ldquo;To James Mortimer, M.R.C.S., from his friends of the C.C.H.,&rdquo; was
		      engraved upon it, with the date &ldquo;1884.&rdquo; It was just such a stick as the
		      old-fashioned family practitioner used to carry&mdash;dignified, solid,
		      and reassuring.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Preface",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Tom Sawyer")->value('id'),
			'content' => "
			<p>
		      Most of the adventures recorded in this book really occurred; one or two
		      were experiences of my own, the rest those of boys who were schoolmates of
		      mine. Huck Finn is drawn from life; Tom Sawyer also, but not from an
		      individual&mdash;he is a combination of the characteristics of three boys
		      whom I knew, and therefore belongs to the composite order of architecture.
		    </p>
		    <p>
		      The odd superstitions touched upon were all prevalent among children and
		      slaves in the West at the period of this story&mdash;that is to say,
		      thirty or forty years ago.
		    </p>
		    <p>
		      Although my book is intended mainly for the entertainment of boys and
		      girls, I hope it will not be shunned by men and women on that account, for
		      part of my plan has been to try to pleasantly remind adults of what they
		      once were themselves, and of how they felt and thought and talked, and
		      what queer enterprises they sometimes engaged in.
		    </p>
		    <p>
		      THE AUTHOR.
		    </p>
		    <p>
		      HARTFORD, 1876.
		    </p>
			"
		]);

		DB::table('chapters')->insert([
			'title' => "Explanatory",
			'number' => "",
			'order' => 1,
			'book_id' => DB::table('books')->where('title', "The Adventures of Huckleberry Finn")->value('id'),
			'content' => "
			<p>
		      In this book a number of dialects are used, to wit: &nbsp;the Missouri
		      negro dialect; the extremest form of the backwoods Southwestern dialect;
		      the ordinary &ldquo;Pike County&rdquo; dialect; and four modified
		      varieties of this last. The shadings have not been done in a haphazard
		      fashion, or by guesswork; but painstakingly, and with the trustworthy
		      guidance and support of personal familiarity with these several forms of
		      speech.
		    </p>
		    <p>
		      I make this explanation for the reason that without it many readers would
		      suppose that all these characters were trying to talk alike and not
		      succeeding.
		    </p>
		    <p>
		      THE AUTHOR.
		    </p>
			"
		]);
	}
}
