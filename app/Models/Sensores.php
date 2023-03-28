<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Sensores extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'sensores';
            protected $primaryKey ='id_sensor';
            protected $fillable = [
                'id_sensor',
                'tiposensor',
                'descripcion',
                'estatus'
            ];
}
