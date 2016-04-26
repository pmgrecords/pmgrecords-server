<?php


class ShowsTableSeeder extends Seeder {

	public function run()
	{
		$event1 = new Show();
		$event1->name = 'noise in the hood festival';
		$event1->date = '2016/04/08';
		$event1->time = '8:00 PM';
		$event1->venue_name = 'TDB';
		$event1->city = 'Los Angeles';
		$event1->state = 'CA';
		$event1->image_path = 'images/events/2.png';
		$event1->save();

		$event2 = new Show();
		$event2->name = 'DAD Tour';
		$event2->date = '2016/04/08';
		$event2->venue_name = 'TBD';
		$event2->time = 'TBD';
		$event2->city = 'TBD';
		$event2->image_path = 'images/events/1.png';
		$event2->save();
	}

}