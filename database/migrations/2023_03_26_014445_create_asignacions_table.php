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
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments('id_asignacion');
            $table->Integer('id_mediciones')->unsigned();
            $table->Integer('id_plantas')->unsigned();
            $table->Integer('id_invernadero')->unsigned();
            $table->foreign('id_mediciones')->references('id_mediciones')->on('mediciones');
            $table->foreign('id_plantas')->references('id_plantas')->on('plantas');
            $table->foreign('id_invernadero')->references('id_invernadero')->on('invernaderos');
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
        Schema::dropIfExists('asignacions');
    }
};
