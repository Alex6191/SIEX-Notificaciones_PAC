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
        Schema::create('peticions', function (Blueprint $table) {
            $table->id();
            $table->string('codigoDestino')->default('');
            $table->date('fechaDesde');
            $table->date('fechaHasta');
            $table->tinyInteger('tipoEnvio')->default(0);
            $table->string('codigoRespuesta')->default('');
            $table->string('descripcionRespuesta')->default('');
            $table->boolean('hayMasResultado');
            $table->boolean('estado');
            $table->tinyInteger('vinculo')->default(0);
            $table->string('nifPeticion')->default('');
            $table->string('nifTitular')->default('');
            $table->string('nifDestinatario')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticions');
    }
};
