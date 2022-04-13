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

        $adminRole = Role::create([
            'name' => 'Administrator',
        ]);
        $role = Role::create([
            'name' => 'User',
        ]);

        $adminRole->givePermissionTo($permission);
    }
}
