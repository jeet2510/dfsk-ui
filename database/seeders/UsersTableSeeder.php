<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
			$users = [
				[
						'id'             => 1,
						'name'           => 'Developer',
						'email'          => 'developer@admin.com',
						'password'       => bcrypt('password'),
						'remember_token' => Str::random(60),
				],
				[
						'id'             => 2,
						'name'           => 'Admin',
						'email'          => 'admin@admin.com',
						'password'       => bcrypt('password'),
						'remember_token' =>  Str::random(60),
				],
				[
						'id'             => 3,
						'name'           => 'User',
						'email'          => 'user@admin.com',
						'password'       => bcrypt('password'),
						'remember_token' =>  Str::random(60),
				],
				[
						'id'             => 4,
						'name'           => 'API User',
						'email'          => 'api@admin.com',
						'password'       => bcrypt('password'),
						'remember_token' =>  Str::random(60),
				],
			];

			User::insert($users);
	}
}
