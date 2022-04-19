<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = Permission::create([
            'name' => 'view_system_tables',
        ]);
        $customersPermission = Permission::create([
            'name' => 'customers.*',
        ]);
        $productPermission = Permission::create([
            'name' => 'products.*',
        ]);

        $adminRole = Role::create([
            'name' => 'Administrator',
        ]);
        $role = Role::create([
            'name' => 'User',
        ]);

        $adminRole->givePermissionTo($permission);
        $adminRole->givePermissionTo($customersPermission);
        $adminRole->givePermissionTo($productPermission);

        $role->givePermissionTo($customersPermission);
        $role->givePermissionTo($productPermission);
    }
}
