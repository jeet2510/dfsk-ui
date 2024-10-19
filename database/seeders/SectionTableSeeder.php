<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'title' => 'Default Template',
				'sortorder' => 5,
				'published' => 1,
				'page_id' => 1,
				'template_id' => 1,
				'section_id' => null
		],
		];

		// Insert the data into the 'templates' table
		Section::insert($data);
	}
}
