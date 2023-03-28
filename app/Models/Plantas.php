<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;


class Plantas extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'plantas';
            protected $primaryKey ='id_plantas';
            protected $fillable = [
                'id_plantas',
                'nombre_p',
                'descripcion',
                'humedad_p',
                'temperatura_p',
                'foto_p',
                'tipoplatas',
                'fecha'
            ];
}
