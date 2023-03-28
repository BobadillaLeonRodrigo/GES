<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->increments('id_encargado');
            $table->String('nombre_en');
            $table->String('app_en');
            $table->String('apm_en');
            $table->Datetime('entrada');
            $table->Datetime('salida');
            $table->Date('dias');
            $table->Integer('id_usuarios')->unsigned();
            $table->foreign("id_usuarios")->references("id_usuarios")->on("usuarios");
            $table->Softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encargados');
    }
};
