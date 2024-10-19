<?php

namespace Database\Seeders;

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'title' => 'Title and Text',
				'filename' => 'title_and_text'
			],
		];

		// Insert the data into the 'templates' table
		Template::insert($data);
	}
}
