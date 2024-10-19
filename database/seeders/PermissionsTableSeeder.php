<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'cm_access',
            ],
            [
                'id'    => 18,
                'title' => 'template_create',
            ],
            [
                'id'    => 19,
                'title' => 'template_edit',
            ],
            [
                'id'    => 20,
                'title' => 'template_show',
            ],
            [
                'id'    => 21,
                'title' => 'template_delete',
            ],
            [
                'id'    => 22,
                'title' => 'template_access',
            ],
            [
                'id'    => 23,
                'title' => 'page_create',
            ],
            [
                'id'    => 24,
                'title' => 'page_edit',
            ],
            [
                'id'    => 25,
                'title' => 'page_show',
            ],
            [
                'id'    => 26,
                'title' => 'page_delete',
            ],
            [
                'id'    => 27,
                'title' => 'page_access',
            ],
            [
                'id'    => 28,
                'title' => 'section_create',
            ],
            [
                'id'    => 29,
                'title' => 'section_edit',
            ],
            [
                'id'    => 30,
                'title' => 'section_show',
            ],
            [
                'id'    => 31,
                'title' => 'section_delete',
            ],
            [
                'id'    => 32,
                'title' => 'section_access',
            ],
            [
                'id'    => 33,
                'title' => 'value_create',
            ],
            [
                'id'    => 34,
                'title' => 'value_edit',
            ],
            [
                'id'    => 35,
                'title' => 'value_show',
            ],
            [
                'id'    => 36,
                'title' => 'value_delete',
            ],
            [
                'id'    => 37,
                'title' => 'value_access',
            ],
            [
                'id'    => 38,
                'title' => 'site_info_create',
            ],
            [
                'id'    => 39,
                'title' => 'site_info_edit',
            ],
            [
                'id'    => 40,
                'title' => 'site_info_show',
            ],
            [
                'id'    => 41,
                'title' => 'site_info_access',
            ],
            [
                'id'    => 42,
                'title' => 'config_value_create',
            ],
            [
                'id'    => 43,
                'title' => 'config_value_edit',
            ],
            [
                'id'    => 44,
                'title' => 'config_value_show',
            ],
            [
                'id'    => 45,
                'title' => 'config_value_delete',
            ],
            [
                'id'    => 46,
                'title' => 'config_value_access',
            ],
            [
                'id'    => 47,
                'title' => 'dropdown_create',
            ],
            [
                'id'    => 48,
                'title' => 'dropdown_edit',
            ],
            [
                'id'    => 49,
                'title' => 'dropdown_show',
            ],
            [
                'id'    => 50,
                'title' => 'dropdown_delete',
            ],
            [
                'id'    => 51,
                'title' => 'dropdown_access',
            ],
            [
                'id'    => 52,
                'title' => 'site_create',
            ],
            [
                'id'    => 53,
                'title' => 'site_edit',
            ],
            [
                'id'    => 54,
                'title' => 'site_show',
            ],
            [
                'id'    => 55,
                'title' => 'site_delete',
            ],
            [
                'id'    => 56,
                'title' => 'site_access',
            ],
            [
                'id'    => 57,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 58,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 59,
                'title' => 'change_log_create',
            ],
            [
                'id'    => 60,
                'title' => 'change_log_edit',
            ],
            [
                'id'    => 61,
                'title' => 'change_log_show',
            ],
            [
                'id'    => 62,
                'title' => 'change_log_delete',
            ],
            [
                'id'    => 63,
                'title' => 'change_log_access',
            ],
            [
                'id'    => 64,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
