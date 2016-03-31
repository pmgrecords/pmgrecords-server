<?php


class RapsTableSeeder extends Seeder {

	public function run()
	{
		$rap1 = new Rap();
		$rap1->title = 'The Test';
        $rap1->body = 'The test was passed';
        $rap1->author_id = 42;
        $rap1->save();

	}

}