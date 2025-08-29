<?php

namespace App\Http\Controllers;

use App\Exports\ReporteDetalleViaticoExport;
use App\Models\Lugar;
use App\Models\Reporte;
use App\Models\Via;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;

class ReporteDetalleViatico extends Controller
{
    public function index()
    {
        $lugares =  Lugar::where('estado', 1)->orderBy('id', 'asc')->get();
        $vias = Via::where('estado', 1)->orderBy('id', 'asc')->get();
        return view('reportes.detalleviatico.index', compact('lugares', 'vias'));
    }

    public function obtieneReporte(Request $request) 
    {
        $dato = Reporte::reporteDetalleViatico($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro'), $request->query('ciNit'), $request->query('da'), $request->query('origen'), $request->query('destino'), $request->query('fechaSalida'), $request->query('fechaRetorno'), $request->query('via'));
		return $dato;
	}

    public function show(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');
        $detalleViaticos = Reporte::reporteDetalleViatico($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro'), $request->query('ciNit'), $request->query('da'), $request->query('origen'), $request->query('destino'), $request->query('fechaSalida'), $request->query('fechaRetorno'), $request->query('via'));
        $pdf->loadView('reportes.detalleviatico.pdf.reportegral',compact('detalleViaticos'))->setPaper('a3', 'landscape');
        return $pdf->stream();
    }

    public function export(Request $request)
    {
        return Excel::download(new ReporteDetalleViaticoExport($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro'), $request->query('ciNit'), $request->query('da'), $request->query('origen'), $request->query('destino'), $request->query('fechaSalida'), $request->query('fechaRetorno'), $request->query('via')), 'reporte_detalle_viatico.xlsx');
    }
}
