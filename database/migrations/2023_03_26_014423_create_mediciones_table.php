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
            $table->float('humedad_m');
            $table->float('temperatura_m');
            $table->String('medicion');
            $table->Date('fecha_m');
            $table->time('hora_m');
            $table->Integer('id_sensor')->unsigned();
            $table->foreign('id_sensor')->references('id_sensor')->on('sensores');
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
        Schema::dropIfExists('mediciones');
    }
};
