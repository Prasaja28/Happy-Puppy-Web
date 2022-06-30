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
            'id' => 1,
            'name' => 'Super Admin',
            'email'=>'dummy@superadmin.com',
            'password' => bcrypt('password'),
            'status' => 1
        ]);
        User::create([
            'id' => 2,
            'name' => 'Admin',
            'email'=>'dummy@admin.com',
            'password' => bcrypt('password'),
            'status' => 1
        ]);
    }
}
