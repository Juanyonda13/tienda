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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCliente',191);
            $table->string('cedula',191);
            $table->string('apellidos',191);
            $table->string('correo',191);
            $table->string('telefono',191);
            $table->string('direccion',191);
            $table->unsignedBigInteger('tipoDocumento_id');
            $table->foreign('tipoDocumento_id')->references('id')->on('tipo_documentos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('clientes');
    }
};
