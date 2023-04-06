<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Encargado extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'encargados';
            protected $primaryKey ='id_encargado';
            protected $fillable = [
                'id_encargado',
                'nombre_e',
                'app_e',
                'apm_e',
                'entrada',
                'salida',
                'dias',
                'id_usuarios'
            ];
}