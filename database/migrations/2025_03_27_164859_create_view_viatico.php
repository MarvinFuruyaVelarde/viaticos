<?php
use Illuminate\Support\Facades\DB;
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
        DB::statement("
            CREATE OR REPLACE VIEW public.view_viatico
            AS
            SELECT v.id,
                TO_CHAR(DATE(v.fecha_registro), 'DD/MM/YYYY') AS fecha_registro,
                v.hoja_ruta,
                v.beneficiario,
                v.ci,
                v.da,
                v.cargo,
                l1.descripcion AS origen,
                l2.descripcion AS destino,
                TO_CHAR(DATE(v.fecha_salida), 'DD/MM/YYYY') AS fecha_salida,
                TO_CHAR(DATE(v.fecha_retorno), 'DD/MM/YYYY') AS fecha_retorno,
                v.total_viatico_pasaje,
                v.estado,
                v.deleted_at
            FROM viatico v
                LEFT JOIN lugar l1 ON l1.id = v.origen
                LEFT JOIN lugar l2 ON l2.id = v.destino
            ORDER BY v.id DESC; 
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_viatico');
    }
};
