<?php

 namespace Database\Seeders;

use App\Models\SiteInfo;
use Illuminate\Database\Seeder;

class SiteInfoTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'site_id'=>1,
				'site_title' => 'CMS Test Project'
			],
		];

		// Insert the data into the 'templates' table
		SiteInfo::insert($data);
	}
}
