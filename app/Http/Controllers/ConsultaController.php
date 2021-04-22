<?php

namespace App\Http\Controllers;


use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = Consulta::all();
        return view('admin.consultas.index',[
            'consultas' => $consultas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::pluck('nome','id'); 
        $medicos = Medico::pluck('nome','id');
        return view('admin.consultas.create',[
            'pacientes' => $pacientes,
            'medicos' => $medicos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Consulta::create($request->all());
        return redirect('/admin/consultas')->with('success','Consulta adicionada.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consulta = Consulta::findOrFail($id);
        return view('admin.consultas.edit',[
            'consulta'=>$consulta
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
        $consulta = Consulta::findOrFail($id);
        $consulta->update($request->all());
        return redirect('/admin/consultas')->with('success','consulta actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta->delete();
        return redirect('/admin/consultas')->with('success','Consulta removida.');
    }
}
