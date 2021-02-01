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
            'user.create',
            'user.index',
            'user.edit',
            'user.delete',
            'role.index',
            'role.create',
            'role.edit',
            'role.delete',
            'permission.index',
            'permission.create',
            'permission.edit',
            'permission.delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
