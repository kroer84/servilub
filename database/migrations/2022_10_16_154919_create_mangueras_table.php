<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManguerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangueras', function (Blueprint $table) {
            $table->id();
            $table->string('identificador');
            $table->string('manguera')->default("");
            $table->string('descripcion');
            $table->string('fitting1');
            $table->string('fitting2');
            $table->decimal('longitud');
            $table->decimal('presion');
            $table->enum('proteccion',['SI','No'])->default('NO');
            $table->string('Extra')->default("pendiente");
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
        Schema::dropIfExists('mangueras');
    }
}
