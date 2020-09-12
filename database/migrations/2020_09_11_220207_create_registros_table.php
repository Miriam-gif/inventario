<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();            
            $table->string("num_codigo");
            $table->integer("gestion"); 
            $table->string("area_unidad"); 
            $table->string("titulo_proceso"); 
            $table->string("formato"); 
            $table->integer("tomo"); 
            $table->string("total_tomo"); 
            $table->string("total_fojas"); 
            $table->integer("num_estantes"); 
            $table->string("bandeja_alfabetica"); 
            $table->string("prioridad_1"); 
            $table->string("tipologia");  
            $table->string("cod_detalle"); 
            $table->string("descripcion_adjunta"); 
            $table->integer("hoja_ruta"); 
            $table->string("fech_inicio"); 
            $table->integer("fojas");           
            $table->string("original"); 
            $table->string("copia"); 
            $table->string("legalizado"); 
            $table->string("fotocopia"); 
            $table->string("observacion"); 
            
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
