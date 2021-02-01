<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'dashboard',
            'user_create',
            'user_index',
            'user_edit',
            'user_delete',
            'role_index',
            'role_create',
            'role_edit',
            'role_delete',
            'permission_index',
            'permission_create',
            'permission_edit',
            'permission_delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
