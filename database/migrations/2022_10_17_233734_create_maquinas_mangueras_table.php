<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinasManguerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manguera_maquina', function (Blueprint $table) {
            $table->id();
            $table->string('identificador');
            $table->date('instalacion')->nullable(true);
            $table->integer('chequeo')->nullable(true);
            $table->integer('cambio')->nullable(true);
            $table->enum('estado_compra',['Instalada', 'Presupuesto', 'Pedido','Entregada','Almacen','Cambio','Desmontar','Mejora'])->default('Instalada')->nullable(true);
            $table->string('nota')->defaul(' ')->nullable(true);
            $table->decimal('precio')->default(0);
            $table->unsignedBigInteger('maquina_id')->unsigned();
            $table->unsignedBigInteger('manguera_id')->unsigned();

            $table->timestamps();

            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('manguera_id')->references('id')->on('mangueras')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquinas_mangueras');
    }
}
