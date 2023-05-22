<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'		    => 'Joshua Villanueva',
            'role'		    => 'super_admin',
            'status'		    => '1',
            'email_verified_at'		    => '2023-05-10 13:29:43',
            'email'		    => 'villanuevajoshua27@gmail.com',
            'password'	    => Hash::make('12345'),
        ]);

        User::create([
            'name'		    => 'LIMS Administrator',
            'email'		    => 'admin@lims.com',
            'password'	    => Hash::make('12345'),
        ]);
    }
}
