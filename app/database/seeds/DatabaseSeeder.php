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

        DB::table('raps')->delete();

		$this->call('RapsTableSeeder');
		// $this->call('UserTableSeeder');
	}

}
