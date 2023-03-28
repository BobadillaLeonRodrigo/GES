<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Mediciones extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'mediciones';
            protected $primaryKey ='id_mediciones';
            protected $fillable = [
                'id_mediciones',
                'humedad_m',
                'temperatura_m',
                'medicion',
                'fecha_m',
                'hora_m',
                'id_sensor'
            ];
}
