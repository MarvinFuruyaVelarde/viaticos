<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('viatico', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_registro');
            $table->string('hoja_ruta');
            $table->string('ci');
            $table->string('beneficiario');
            $table->integer('da');
            $table->string('numero_cuenta')->nullable();;
            $table->integer('escala');
            $table->integer('estado_beneficiario');
            $table->string('cargo');
            $table->integer('origen');
            $table->date('fecha_salida');
            $table->string('hora_salida');
            $table->integer('destino');
            $table->date('fecha_retorno');
            $table->string('hora_retorno');
            $table->integer('total_dia');
            $table->date('fecha_maxima_presentacion');
            $table->string('distancia');
            $table->integer('via');
            $table->string('descripcion');
            $table->integer('medio_dia_100');
            $table->integer('dia_entero_100');
            $table->integer('medio_dia_70')->nullable();
            $table->integer('dia_entero_70')->nullable();
            $table->decimal('total_viatico');
            $table->decimal('pasaje')->nullable();
            $table->decimal('retencion_pasaje')->nullable();
            $table->decimal('total_pasaje')->nullable();
            $table->decimal('flete')->nullable();
            $table->decimal('retencion_flete')->nullable();
            $table->decimal('total_flete')->nullable();
            $table->decimal('total_viatico_pasaje');
            $table->integer('estado');
            $table->integer('sip')->nullable();
            $table->integer('cip')->nullable();
            $table->foreign('estado')->references('id')->on('estado');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viatico');
    }
};
