<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        DB::table('artists')->delete();
        DB::table('videos')->delete();
        DB::table('shows')->delete();

		$this->call('ArtistsTableSeeder');
        $this->call('VideosTableSeeder');
        $this->call('ShowsTableSeeder');
		// $this->call('UserTableSeeder');
	}

}
