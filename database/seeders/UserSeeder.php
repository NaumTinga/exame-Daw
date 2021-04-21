<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('12345678'),
            //'is_active' => 1,
            'created_at'=> now(),
            'updated_at'=> now()
        ]
    );
    $admin = Role::where('name','admin')->first();
    $user->attachRole($admin);
    }
}
