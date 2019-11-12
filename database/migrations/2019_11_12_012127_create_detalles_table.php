<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('idVenta');
            $table->unsignedBigInteger('idProducto');
            $table->integer('cantidad');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

            $table->foreign('idVenta')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idProducto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
}
