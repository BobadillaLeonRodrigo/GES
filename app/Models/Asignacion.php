<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Asignacion extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'asignacions';
            protected $primaryKey ='id_asignacion';
            protected $fillable = [
                'id_asignacion',
                'id_mediciones',
                'id_plantas',
                'id_invernadero'
            ];
}
