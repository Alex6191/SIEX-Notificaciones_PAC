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
        Schema::create('acuses', function (Blueprint $table) {
            $table->id();
            $table->string('codigoRespuesta',4)->default('');
            $table->string('descripcionRespuesta',100)->default('');
            $table->text('opcionConsultaAcusePdf')->nullable();
            $table->text('opcionRespuestaConsultaAcusePdf')->nullable();
            $table->unsignedBigInteger('envio_id');
            $table->unsignedBigInteger('identificador_acuse_pdf_id')->unique();

            $table->foreign('envio_id')->references('id')->on('envios')->onDelete('cascade');
            $table->foreign('identificador_acuse_pdf_id')->references('id')->on('identificador_acuse_pdfs')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('acuses');
    }
};
