<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleUser;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create([
            'roles_id' => 1,
            'users_id' => 1
        ]);
        RoleUser::create([
            'roles_id' => 2,
            'users_id' => 2
        ]);
    }
}
