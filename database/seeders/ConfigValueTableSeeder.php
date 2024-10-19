<?php

namespace Database\Seeders;

use App\Models\ConfigValue;
use Illuminate\Database\Seeder;

class ConfigValueTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'site_id'=>1,
				'name' => 'social_fb',
				'value' => '',
			],
			[
				'id' => 2,
				'site_id'=>1,
				'name' => 'social_ig',
				'value' => '',
			],
			[
				'id' => 3,
				'site_id'=>1,
				'name' => 'social_li',
				'value' => '',
			],
			[
				'id' => 4,
				'site_id'=>1,
				'name' => 'contact_address',
				'value' => '',
			],
			[
				'id' => 5,
				'site_id'=>1,
				'name' => 'contact_email',
				'value' => '',
			],
			[
				'id' => 6,
				'site_id'=>1,
				'name' => 'contact_phone',
				'value' => '',
			],
			[
				'id' => 7,
				'site_id'=>1,
				'name' => 'contact_phone_forlink',
				'value' => '',
			],
			[
				'id' => 8,
				'site_id'=>1,
				'name' => 'contact_googlemap',
				'value' => '',
			],
		];

		// Insert the data into the 'templates' table
		ConfigValue::insert($data);
	}
}
