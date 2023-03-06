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
        Schema::create('peticion_accesos', function (Blueprint $table) {
            $table->id();
            $table->text('identificador')->default('');
            $table->integer('codigoOrigen');
            $table->string('nifReceptor',9)->default('');
            $table->string('nombreReceptor',45)->default('');
            $table->tinyInteger('evento')->default('1');
            $table->string('concepto',255)->default('');
            $table->string('codigoRespuesta',4)->default('');
            $table->string('descripcionRespuesta',100)->default('');
            $table->dateTime('fechaEvento',0);
            $table->text('opcionPeticionAcceso')->default('');
            $table->text('opcionRespuestaPeticionAcceso')->default('');
            $table->unsignedBigInteger('envio_id');

            $table->foreign('envio_id')->references('id')->on('envios')->onDelete('cascade');
            
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
        Schema::dropIfExists('peticion_accesos');
    }
};
