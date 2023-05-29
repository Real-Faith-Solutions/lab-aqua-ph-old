<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create([
            'role'		    => 'Super admin',
        ]);
        Role::create([
            'role'		    => 'Admin Asstistant',
        ]);
        Role::create([
            'role'		    => 'Laboratory Asstistant',
        ]);
        Role::create([
            'role'		    => 'Service Coordinator',
        ]);
        Role::create([
            'role'		    => 'Marketing Manager',
        ]);
        Role::create([
            'role'		    => 'Sales Manager',
        ]);
        Role::create([
            'role'		    => 'Pchem Manager',
        ]);
        Role::create([
            'role'		    => 'Pchem Analyst',
        ]);
        Role::create([
            'role'		    => 'Micro Manager',
        ]);
        Role::create([
            'role'		    => 'Micro Analyst',
        ]);



    }
}
