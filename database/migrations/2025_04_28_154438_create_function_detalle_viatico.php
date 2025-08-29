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
        CREATE OR REPLACE FUNCTION reporte_detalle_viatico(
            p_fecha_inicio_registro date DEFAULT NULL::date,
	        p_fecha_fin_registro    date DEFAULT NULL::date,
            p_ci                    VARCHAR DEFAULT NULL,
            p_da                    INTEGER DEFAULT NULL,
            p_origen                INTEGER DEFAULT NULL,
            p_destino               INTEGER DEFAULT NULL,
            p_fecha_salida          DATE DEFAULT NULL,
            p_fecha_retorno         DATE DEFAULT NULL,
            p_distancia             VARCHAR DEFAULT NULL
        )
        RETURNS TABLE (
            ID INTEGER,
            FECHA_REGISTRO text,
            HOJA_RUTA character varying,
            BENEFICIARIO character varying,
            CI character varying,
            DA INTEGER,
            CARGO character varying,
            ID_ORIGEN INTEGER,
            ORIGEN character varying,
            ID_DESTINO INTEGER,
            DESTINO character varying,
            FECHA_SALIDA text,
            FECHA_RETORNO text,
            TOTAL_DIA INTEGER,
            DISTANCIA character varying,
            TOTAL_VIATICO NUMERIC,
            PASAJE NUMERIC,
            RETENCION_PASAJE NUMERIC,
            TOTAL_PASAJE NUMERIC,
            FLETE NUMERIC,
            RETENCION_FLETE NUMERIC,
            TOTAL_FLETE NUMERIC,
            TOTAL_VIATICO_PASAJE NUMERIC
        ) AS $$
        BEGIN
            RETURN QUERY
            SELECT 
                V.ID,
                TO_CHAR(DATE(V.FECHA_REGISTRO), 'DD/MM/YYYY') AS FECHA_REGISTRO,
                V.HOJA_RUTA,
                V.BENEFICIARIO,
                V.CI,
                V.DA,
                V.CARGO,
                V.ORIGEN AS ID_ORIGEN,
                L1.DESCRIPCION AS ORIGEN,
                V.DESTINO AS ID_DESTINO,
                L2.DESCRIPCION AS DESTINO,
                TO_CHAR(DATE(V.FECHA_SALIDA), 'DD/MM/YYYY') AS FECHA_SALIDA,
                TO_CHAR(DATE(V.FECHA_RETORNO), 'DD/MM/YYYY') AS FECHA_RETORNO,	
                V.TOTAL_DIA,
                V.DISTANCIA,
                V.TOTAL_VIATICO,
                V.PASAJE,
                V.RETENCION_PASAJE,
                V.TOTAL_PASAJE,
                V.FLETE,
                V.RETENCION_FLETE,
                V.TOTAL_FLETE,
                V.TOTAL_VIATICO_PASAJE
            FROM VIATICO V
            LEFT JOIN LUGAR L1 ON L1.id = V.origen
            LEFT JOIN LUGAR L2 ON L2.id = V.destino
            WHERE 
                (p_fecha_inicio_registro IS NULL OR p_fecha_fin_registro IS NULL OR V.FECHA_REGISTRO BETWEEN p_fecha_inicio_registro AND p_fecha_fin_registro) AND
                (p_ci IS NULL OR V.CI = p_ci) AND
                (p_da IS NULL OR V.DA = p_da) AND
                (p_origen IS NULL OR V.ORIGEN = p_origen) AND
                (p_destino IS NULL OR V.DESTINO = p_destino) AND
                (p_fecha_salida IS NULL OR V.FECHA_SALIDA = p_fecha_salida) AND
                (p_fecha_retorno IS NULL OR V.FECHA_RETORNO = p_fecha_retorno) AND
                (p_distancia IS NULL OR V.DISTANCIA = p_distancia)
            ORDER BY V.ID DESC;
        END;
        $$ LANGUAGE plpgsql;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('function_detalle_viatico');
    }
};
