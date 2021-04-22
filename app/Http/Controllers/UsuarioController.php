<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index',['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('admin.usuarios.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $data = $request->except('role_id');
        $data['password'] = bcrypt($request->password);   
        $usuario = User::create($data);
        $role = Role::findOrFail($request->role_id);
        $usuario->attachRole($role); 
        
        return redirect('admin/usuarios')->with('success','Utilizador adicionado.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $roles = Role::pluck('name','id');
        
        return view('admin.usuarios.edit',[
            'usuario'  => $usuario,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $data = $request->except('role_id');
        $data['password'] = bcrypt($request->password);   
        $usuario->update($data);
       
        $role = Role::findOrFail($request->role_id);
        $usuario->detachRoles($usuario->roles);
        $usuario->attachRole($role);

        return redirect('admin/usuarios')->with('success','Utilizador actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect('admin/usuarios')->with('success','Utilizador removido.');
    }
}
