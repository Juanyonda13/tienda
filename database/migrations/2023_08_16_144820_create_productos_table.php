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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('producto_id');
            $table->unsignedBigInteger('detalle_producto_id');
            $table->foreign('detalle_producto_id')->references('id')->on('detalle_productos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('categoriaProdcuto_id');
            $table->foreign('categoriaProdcuto_id')->references('id')->on('categoria_productos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('provedorProducto_id');
            $table->foreign('provedorProducto_id')->references('id')->on('provedor_productos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('productos');
    }
};
