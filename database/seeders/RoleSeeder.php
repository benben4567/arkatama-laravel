<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        Role::create([
            'name' => 'Admin',
        ]);

        //Staff
        Role::create([
            'name' => 'Staff',
        ]);

        //User
        Role::create([
            'name' => 'User',
        ]);
    }
}
