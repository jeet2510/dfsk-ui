<?php

 namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Seeder;

class SiteTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'title' => 'English',
				'language_code' => 'en',
				'isdefault'=>0
			],
		];

		// Insert the data into the 'templates' table
		Site::insert($data);
	}
}
