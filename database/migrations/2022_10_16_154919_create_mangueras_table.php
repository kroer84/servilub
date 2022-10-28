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
            $table->string('manguera')->default("");
            $table->string('descripcion')->default("");
            $table->string('fitting1')->default("");
            $table->string('fitting2')->default("");
            $table->integer('longitud')->default(0);
            $table->integer('presion')->default(0);
            $table->enum('proteccion',['SI','No'])->default('NO');
            $table->string('Extra')->default("");
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
