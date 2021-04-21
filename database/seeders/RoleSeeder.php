<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $admin = Role::create([
            'name'=>'admin',
            'display_name' => 'Administrador'
        ]);

        $chefePosto = Role::create([
            'name'=>'chefePosto',
            'display_name' => 'Chefe do Posto'
        ]);

        $recepcionista = Role::create([
            'name'=>'recepcionista',
            'display_name' => 'Recepcionista'
        ]);
    }
}
