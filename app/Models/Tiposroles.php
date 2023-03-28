<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Tiposroles extends Model
{
    use HasFactory,Softdeletes;
    protected $table = 'tiposroles';
        protected $primaryKey ='id_roles';
        protected $fillable = [
            'id_roles',
            'nombre_r'
        ];
}
