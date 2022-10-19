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
            $table->date('instalacion');
            $table->integer('chequeo');
            $table->integer('cambio');
            $table->enum('estado_compra',['Instalada', 'Presupuesto', 'Pedido','Entregada','InstaladaSin'])->default('Instalada');
            $table->string('nota');
            $table->decimal('precio');
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
