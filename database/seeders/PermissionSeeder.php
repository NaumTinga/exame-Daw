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

        $listarUsuario = Permission::create([
            'name' => 'listar-usuario',
            'display_name' => 'Listar Usuario'
        ]);

        $criarConsulta = Permission::create([
            'name' => 'criar-consulta',
            'display_name' => 'Criar Consulta'
        ]);

        $editarConsulta = Permission::create([
            'name' => 'editar-consulta',
            'display_name' => 'Editar Consulta'
        ]);

        $removerConsulta = Permission::create([
            'name' => 'remover-consulta',
            'display_name' => 'Remover Consulta'
        ]);

        $listarConsulta = Permission::create([
            'name' => 'listar-consulta',
            'display_name' => 'Listar Consulta'
        ]);

        $criarPaciente = Permission::create([
            'name' => 'criar-paciente',
            'display_name' => 'Criar Paciente'
        ]);

        $editarPaciente = Permission::create([
            'name' => 'editar-paciente',
            'display_name' => 'Editar Paciente'
        ]);

        $removerPaciente = Permission::create([
            'name' => 'remover-paciente',
            'display_name' => 'Remover Usuario'
        ]);
        
        $listarPaciente = Permission::create([
            'name' => 'listar-paciente',
            'display_name' => 'Listar Paciente'
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

        $listarMedico = Permission::create([
            'name' => 'listar-medico',
            'display_name' => 'Listar Medico'
        ]);

        $admin = Role::where('name','admin')->first();
        $chefePosto = Role::where('name','chefePosto')->first();
        $recepcionista = Role::where('name','recepcionista')->first();

        $admin->syncPermissions([
           $criarUsuario,
           $editarUsuario,
           $removerUsuario,
           $listarUsuario,
           $criarMedico,
           $editarMedico,
           $removerMedico,
           $listarMedico,
           $criarPaciente,
           $editarPaciente,
           $removerPaciente,
           $listarPaciente,
           $criarConsulta,
           $editarConsulta,
           $listarConsulta
        ]);

        $chefePosto->syncPermissions([
            $editarMedico,
            $removerMedico,
            $listarMedico,
            $editarPaciente,
            $removerPaciente,
            $listarPaciente,
            $criarConsulta,
            $editarConsulta,
            $listarConsulta

        ]);

        $recepcionista->syncPermissions([
            $criarMedico,
            $criarPaciente,
        ]);
    }
}
