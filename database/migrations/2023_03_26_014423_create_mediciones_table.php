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
        Schema::create('mediciones', function (Blueprint $table) {
            $table->increments('id_mediciones');
            $table->String('humedad_m');
            $table->Integer('temperatura_m');
            $table->String('medicion');
            $table->Date('fecha_m');
            $table->Datetime('hora_m');
            $table->Integer('id_sensor')->unsigned();
            $table->foreign('id_sensor')->references('id_sensor')->on('sensores');
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
        Schema::dropIfExists('mediciones');
    }
};
