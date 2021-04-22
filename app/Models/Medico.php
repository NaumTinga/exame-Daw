<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'apelido', 'dataNascimento', 'especialidade', 'postoMedico'];

    // public function consulta(){
    //     return $this->hasMany(Consulta::class);
     
    // }
}
