<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            SiteTableSeeder::class,
            PageTableSeeder::class,
            TemplateTableSeeder::class,
            SectionTableSeeder::class,
            ValueTableSeeder::class,
			ConfigValueTableSeeder::class,
			SiteInfoTableSeeder::class
        ]);
    }
}
