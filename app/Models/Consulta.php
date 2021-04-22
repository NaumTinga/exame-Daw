<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = ['dataConsulta','paciente_id', 'medico_id'];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
     
    }

    public function medico(){
        return $this->belongsTo(Medico::class);
     
    }

    // public function medico()
    // {
    //     return $this->belongsTo(\App\Models\Medico::class);
    // }

    // public function paciente()
    // {
    //     return $this->belongsTo(\App\Models\Paciente::class);
    // }
}
