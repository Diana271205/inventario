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
            $table->id();
            $table->unsignedBigInteger('id_presentacions');
            $table->foreign('id_presentacions')->references('id')->on('presentacions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_proveedors');
            $table->foreign('id_proveedors')->references('id')->on('proveedors')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_marcas');
            $table->foreign('id_marcas')->references('id')->on('marcas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('descripcion')->nullable();
            $table->integer('precio')->nullable();
            $table->string('stock')->nullable();
            $table->integer('iva')->nullable();
            $table->rememberToken();
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
