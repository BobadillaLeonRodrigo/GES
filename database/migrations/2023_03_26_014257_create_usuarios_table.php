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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuarios');
            $table->String('nombre_u');
            $table->String('app_u');
            $table->String('apm_u');
            $table->String('email')->unique();
            $table->String('passw');
            $table->Integer('id_roles')->unsigned();
            $table->foreign('id_roles')->references('id_roles')->on('tiposroles');
            $table->timestamps();
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
        Schema::dropIfExists('usuarios');
    }
};
