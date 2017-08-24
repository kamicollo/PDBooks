<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DaveChild\TextStatistics as TS;

class CalculateReadability extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:readability';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculates readability scores of all chapters in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
		$textStatistics = new TS\TextStatistics;
        $chapters = \App\Chapter::whereNull('readability_score')->get();
		foreach ($chapters as $chapter) {
			$text = strip_tags($chapter->content);
			$readability_score = $textStatistics->daleChallReadabilityScore($text);
			//calculation of adjusted D-C score as explained @ https://en.wikipedia.org/wiki/Dale%E2%80%93Chall_readability_formula
			$pdw = (float) $textStatistics->daleChallDifficultWordCount($text) / (float) TS\Text::wordCount($text);
			if ($pdw > 0.05) {
				$readability_score += 3.6365;
			}
			$chapter->readability_score = $readability_score;
			$chapter->save();
			echo 'Chapter ' . $chapter->title . ' readability score: ' . $chapter->readability_score . "\n";
		}		
    }
}
