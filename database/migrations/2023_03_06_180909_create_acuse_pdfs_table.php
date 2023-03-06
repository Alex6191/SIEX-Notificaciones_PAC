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
        Schema::create('acuse_pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->nullable();
            $table->text('contenido')->nullable();
            $table->text('mimeType')->nullable();
            $table->text('metadato')->nullable();
            $table->unsignedBigInteger('acuse_id');

            $table->foreign('acuse_id')->references('id')->on('acuses')->onDelete('cascade');

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
        Schema::dropIfExists('acuse_pdfs');
    }
};
