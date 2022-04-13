<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user')
        ]);
        $admin->assignRole('Administrator');
        $user->assignRole('User');

    }
}
