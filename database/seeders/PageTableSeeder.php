<?php

 namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'site_id'=>1,
				'title' => 'Home',
				'slug' => 'home',
				'commonname'=>'home',
				'sortorder' => 5,
				'showinheader' => 1,
				'showinfooter' => 0,
				'published' => 1,
				'is_page' => 1,
				'metatitle' => 'Home',
				'metadescription' => '',
				'metakeywords' => '',
			],
		];

		// Insert the data into the 'templates' table
		Page::insert($data);
	}
}
