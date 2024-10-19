<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
       $developer_permissions = Permission::all();
		Role::findOrFail(1)->permissions()->sync($developer_permissions->pluck('id'));
		// the admin are same for developer excluding section, template and value      
		$admin_permissions = $developer_permissions->filter(function ($permission) {
			return $permission->title != 'template_access' && $permission->title != 'section_access' && $permission->title != 'value_access';
		});
		Role::findOrFail(2)->permissions()->sync($admin_permissions);
		// the user are same for Admin that contains user or role in them
		$user_permissions = $admin_permissions->filter(function ($permission) {
			return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 5) != 'role_';
		});
		Role::findOrFail(3)->permissions()->sync($user_permissions);
    }
}
