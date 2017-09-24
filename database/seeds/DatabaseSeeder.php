<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(BookSeeder::class);
        $this->call(AffiliateSeeder::class);

        // Chapters
        $this->call(AliceInWonderlandSeeder::class);
        $this->call(ThroughTheLookingGlassSeeder::class);
        $this->call(TheAdventuresOfTomSawyerSeeder::class);
        $this->call(TheAdventuresOfHuckleberryFinnSeeder::class);
        $this->call(TheHoundOfTheBaskervillesSeeder::class);
        $this->call(TheAdventuresOfSherlockHolmesSeeder::class);
		$this->call(TheYellowWallpaperSeeder::class);
		$this->call(TheAwakeningSeeder::class);
    }
}
