<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::findByName('administrator');
        $permissions = new Permission();

        $admin->syncPermissions($permissions->get());

        $general = Role::findByName('general');
        $general->givePermissionTo($permissions->findByName('dashboard'));

        // assign role to user
        $administrator = User::where('email', 'admin@admin.com')->first();
        $administrator->assignRole(['administrator']);

        $generalUsers = User::where('email', '!=', 'admin@admin.com')->get();
        foreach($generalUsers as $general) {
            $general->assignRole(['general']);
        }
    }
}
