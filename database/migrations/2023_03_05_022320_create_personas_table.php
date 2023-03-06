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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('tipo')->default(0);
            $table->text('nombreTitular')->default('');
            $table->string('nifTitular',9)->nullable();
            $table->string('codigoDIR3',9)->nullable();
            $table->text('codigoDIRe')->nullable();
            $table->text('descripcionEntidad')->nullable();
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
        Schema::dropIfExists('personas');
    }
};
