<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion',200);
            $table->string('descripcion', 200);
            $table->date('fecha_entrega');
            $table->binary('imagen_paquete')->nullable();
            $table->binary('firma')->nullable();
            $table->binary('id_frente')->nullable();
            $table->binary('id_atras')->nullable();
            $table->boolean('entregado')->default(0)->change();
            $table->integer('id_repartidor')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
