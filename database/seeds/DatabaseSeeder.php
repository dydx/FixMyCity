<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('WorkRequestsTableSeeder');

		$this->command->info('Work Requests Table Seeded');
	}

}

class WorkRequestsTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();
    $workRequests = array();
    foreach(range(1, 10) as $index)
    {
      $workRequests[$index] = [
        'title'       => $faker->sentence(4),
        'description' => $faker->sentence(15),
        'complete' => false,
        'lat' => $faker->latitude,
        'long' => $faker->longitude,
      ];
    }
    DB::table('workRequests')->insert($workRequests);
    //dd($workRequests);
  }

}