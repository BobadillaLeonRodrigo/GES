<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Usuarios extends Model
{
    use HasFactory,Softdeletes;
        protected $table = 'usuarios';
            protected $primaryKey ='id_usuarios';
            protected $fillable = [
                'id_usuarios',
                'nombre_u',
                'app_u',
                'apm_u',
                'email',
                'passw',
                'id_roles'
            ];
}
