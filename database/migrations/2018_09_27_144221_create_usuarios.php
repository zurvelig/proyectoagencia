<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // crea la tabla
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->integer('cedula')->unique();//No se especifica la longitu de un entero, //porque automaticamente coloca el valor de 11, de igual manera se //debe realizar la valicadión en el formulario 
            $table->string('correo', 50)->unique();
            $table->string('empresa',100);
            $table->integer('telefono'); //No se especifica la longitu de un entero
            $table->string('nombre_usu', 50)->unique();
            $table->string('clave', 255);
            $table->string('repetir_clave', 255);
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
        //elimina la tabla
        Schema::dropIfExists('usuario');
    }
}
