<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'title_1' => 'Default',
				'title_2' =>null,
				'title_3' => null,
				'text_1' => '<p>This is a test text for the homepage25</p>',
				'text_2' => null,
				'text_3' => null,
				'link_1' => null,
				'link_2' => null,
				'link_3' => null,
				'published' => 1,
				'section_id' => 1,
		],
		];

		// Insert the data into the 'templates' table
		Value::insert($data);
	}
}
