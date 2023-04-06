<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Invernadero extends Model
{
    use HasFactory,Softdeletes;
    protected $table = 'invernaderos';
        protected $primaryKey ='id_invernadero';
        protected $fillable = ['
            id_invernadero',
            'nombre_i',
            'lote',
            'descripcion',
            'id_encargado'
        ];
}
