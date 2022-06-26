<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'Super Admin',
            'status' => 1
        ]);
        
        Role::create([
            'id' => 2,
            'name' => 'Admin',
            'status' => 1
        ]);
        Role::create([
            'id' => 3,
            'name' => 'Admin_News',
            'status' => 1
        ]);
        Role::create([
            'id' => 4,
            'name' => 'Admin_Song',
            'status' => 1
        ]);
        Role::create([
            'id' => 5,
            'name' => 'Admin_Artist',
            'status' => 1
        ]);
        Role::create([
            'id' => 6,
            'name' => 'Admin_Outlet',
            'status' => 1
        ]);
        Role::create([
            'id' => 7,
            'name' => 'Admin_Profil',
            'status' => 1
        ]);
        Role::create([
            'id' => 8,
            'name' => 'Admin_Kontak',
            'status' => 1
        ]);
        Role::create([
            'id' => 9,
            'name' => 'Admin_Keluhan',
            'status' => 1
        ]);
        Role::create([
            'id' => 10,
            'name' => 'Admin_Request',
            'status' => 1
        ]);
        Role::create([
            'id' => 11,
            'name' => 'Admin_Karir',
            'status' => 1
        ]);
        Role::create([
            'id' => 12,
            'name' => 'Admin_Jobvacancy',
            'status' => 1
        ]);
        Role::create([
            'id' => 13,
            'name' => 'Admin_waralaba',
            'status' => 1
        ]);
        Role::create([
            'id' => 14,
            'name' => 'Admin_settings',
            'status' => 1
        ]);
    }
}
