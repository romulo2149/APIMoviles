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
            $table->enum('entregado', ['si', 'no', 'pendiente']);
            $table->integer('id_repartidor')->unsigned()->nullable();
            $table->string('parentezco', 100)->nullable();
        });
        DB::statement('ALTER TABLE pedidos ADD imagen_paquete  MEDIUMBLOB null');
        DB::statement('ALTER TABLE pedidos ADD firma  MEDIUMBLOB null');
        DB::statement('ALTER TABLE pedidos ADD id_frente  MEDIUMBLOB null');
        DB::statement('ALTER TABLE pedidos ADD id_atras  MEDIUMBLOB null');
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
