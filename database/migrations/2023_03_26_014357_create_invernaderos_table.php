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
        Schema::create('invernaderos', function (Blueprint $table) {
            $table->increments('id_invernadero');
            $table->String('nombre_i');
            $table->Integer('lote');
            $table->String('descripcion');
            $table->Integer('id_encargado')->unsigned();
            $table->foreign('id_encargado')->references('id_encargado')->on('encargados');
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
        Schema::dropIfExists('invernaderos');
    }
};
