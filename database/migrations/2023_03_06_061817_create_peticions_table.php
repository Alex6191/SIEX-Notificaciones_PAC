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
            $table->string('nifTitular',9)->nullable();
            $table->string('nifDestinatario',9)->nullable();
            $table->text('codigoDestino')->nullable();
            $table->dateTime('fechaDesde',0)->nullable();
            $table->dateTime('fechaHasta',0)->nullable();
            $table->tinyInteger('tipoEnvio')->nullable();
            $table->text('codigoRespuesta')->default('');
            $table->text('descripcionRespuesta')->default('');
            $table->string('nifPeticion',9)->default('');
            $table->boolean('hayMasResultado')->default(false);
            $table->tinyInteger('estado')->default('0');
            $table->text('opcionLocaliza')->default('');
            $table->text('opcionRespuestaLocaliza')->default('');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
