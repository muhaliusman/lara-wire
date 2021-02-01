<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'id' => 'c40df7b1-459d-4b97-ae82-0c10eba0f292',
                'name' => 'Dashboard',
                'parent_id' => null,
                'livewire_component' => 'dashboard.index',
                'icon' => 'fas fa-home',
                'order_index' => 1,
                'permission_id' => Permission::findByName('dashboard')->id,
                'published' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 'f241d04b-2fcf-4a18-af86-7fc8d742df10',
                'name' => 'User Management',
                'parent_id' => null,
                'livewire_component' => null,
                'icon' => 'fas fa-users',
                'order_index' => 2,
                'permission_id' => Permission::findByName('user.index')->id,
                'published' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '306cdeb3-f6c6-470b-b9a0-a9b6789672af',
                'name' => 'User',
                'parent_id' => 'f241d04b-2fcf-4a18-af86-7fc8d742df10',
                'livewire_component' => 'users.index',
                'icon' => null,
                'order_index' => 3,
                'permission_id' => Permission::findByName('user.index')->id,
                'published' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '6f3f9d1a-788e-4a22-a723-eca61f4f03c1',
                'name' => 'Role',
                'parent_id' => 'f241d04b-2fcf-4a18-af86-7fc8d742df10',
                'livewire_component' => 'roles.index',
                'icon' => null,
                'order_index' => 4,
                'permission_id' => Permission::findByName('role.index')->id,
                'published' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '88785427-37cc-4beb-8acc-76556e77268a',
                'name' => 'Permission',
                'parent_id' => 'f241d04b-2fcf-4a18-af86-7fc8d742df10',
                'livewire_component' => 'permissions.index',
                'icon' => null,
                'order_index' => 5,
                'permission_id' => Permission::findByName('permission.index')->id,
                'published' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        Schema::disableForeignKeyConstraints();
        DB::table('menus')->insert($menus);
        Schema::enableForeignKeyConstraints();
    }
}
