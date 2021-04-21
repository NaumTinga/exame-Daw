<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\Permission;

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $criarUsuario = Permission::create([
            'name' => 'criar-usuario',
            'display_name' => 'Criar Usuario'
        ]);

        $editarUsuario = Permission::create([
            'name' => 'editar-usuario',
            'display_name' => 'Editar Usuario'
        ]);

        $removerUsuario = Permission::create([
            'name' => 'remover-usuario',
            'display_name' => 'Remover Usuario'
        ]);

        $criarPaciente = Permission::create([
            'name' => 'criar-paciente',
            'display_name' => 'Criar Usuario'
        ]);

        $editarPaciente = Permission::create([
            'name' => 'editar-paciente',
            'display_name' => 'Editar Usuario'
        ]);

        $removerPaciente = Permission::create([
            'name' => 'remover-paciente',
            'display_name' => 'Remover Usuario'
        ]);
        
        $criarMedico = Permission::create([
            'name' => 'criar-medico',
            'display_name' => 'Criar Medico'
        ]);

        $editarMedico = Permission::create([
            'name' => 'editar-medico',
            'display_name' => 'Editar Medico'
        ]);

        $removerMedico = Permission::create([
            'name' => 'remover-medico',
            'display_name' => 'Remover Medico'
        ]);

        $admin = Role::where('name','admin')->first();
        $chefePosto = Role::where('name','chefePosto')->first();
        $recepcionista = Role::where('name','recepcionista')->first();

        $admin->syncPermissions([
           $criarUsuario,
           $editarUsuario,
           $removerUsuario,
           $criarMedico,
           $editarMedico,
           $removerMedico,
           $criarPaciente,
           $editarPaciente,
           $removerPaciente
        ]);

        $chefePosto->syncPermissions([
            $editarMedico,
            $removerMedico,
            $editarPaciente,
            $removerPaciente
        ]);

        $recepcionista->syncPermissions([
            $criarMedico,
            $criarPaciente,
        ]);
    }
}
