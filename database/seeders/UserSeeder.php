<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'roles_id'=>1,
            'email'=>'dummy@superadmin.com',
            'password' => 'password',
            'status' => 1
        ]);
        User::create([
            'name' => 'Admin',
            'roles_id'=>2,
            'email'=>'dummy@admin.com',
            'password' => 'password',
            'status' => 1
        ]);
    }
}
