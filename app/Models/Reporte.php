<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Reporte extends Model
{
    use HasFactory;

    // Obtiene Reporte Detalle de Viaticos
    public static function reporteDetalleViatico($fechaInicioRegistro = null, $fechaFinRegistro = null, $ciNit = null, $da = null, $origen = null, $destino = null, $fechaSalida = null, $fechaRetorno = null, $via = null)
    {
        return DB::select('SELECT id, fecha_registro, hoja_ruta, beneficiario, ci, da, cargo, origen, destino, fecha_salida, fecha_retorno, total_dia, distancia, total_viatico, pasaje, retencion_pasaje, total_pasaje, flete, retencion_flete, total_flete, total_viatico_pasaje FROM reporte_detalle_viatico(?, ?, ?, ?, ?, ?, ?, ?, ?)', [$fechaInicioRegistro, $fechaFinRegistro, $ciNit, $da, $origen, $destino, $fechaSalida, $fechaRetorno, $via]);
    }

    // Obtiene Reporte Planilla Impositiva RC-IVA
    public static function reportePlanillaImpositiva($fechaInicioRegistro = null, $fechaFinRegistro = null)
    {
        return DB::select('SELECT id, fecha_registro, beneficiario, ci, da, total_viatico FROM reporte_planilla_impositiva(?, ?)', [$fechaInicioRegistro, $fechaFinRegistro]);
    }
}
