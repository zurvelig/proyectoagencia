<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 10)->unique();
            $table->string('num_plaza', 10);
            $table->unsignedInteger('cod_destino'); //creo la clave foranea de destino
            
            $table->unsignedInteger('cod_origen');//creo la clave foranea de origen
            $table->string('precio');
            $table->unsignedInteger('ced_viajero');//creo la clave foranea de viajero
            $table->rememberToken();
            $table->timestamps();
            //indico a donde hace referencia la clave foranea
            $table->foreign('cod_destino')->references('id')->on('destino'); 

            $table->foreign('cod_origen')->references('id')->on('origen'); 

            $table->foreign('ced_viajero')->references('id')->on('viajero'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje');
    }
}
