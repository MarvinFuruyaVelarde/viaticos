<?php

namespace App\Http\Controllers;

use App\Exports\ReportePlanillaImpositivaExport;
use Illuminate\Http\Request;
use App\Models\Reporte;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;

class ReportePlanillaImpositiva extends Controller
{
    public function index()
    {
        return view('reportes.planillaimpositiva.index');
    }

    public function obtieneReporte(Request $request) 
    {
        $dato = Reporte::reportePlanillaImpositiva($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro'));
		return $dato;
	}

    public function show(Request $request)
    {
        $pdf = App::make('dompdf.wrapper');
        $detallePlanillaImpositivas = Reporte::reporteDetalleViatico($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro'));
        $pdf->loadView('reportes.planillaimpositiva.pdf.reportegral',compact('detallePlanillaImpositivas'))->setPaper('a3', 'portrait');
        return $pdf->stream();
    }

    public function export(Request $request)
    {
        return Excel::download(new ReportePlanillaImpositivaExport($request->query('fechaInicioRegistro'), $request->query('fechaFinRegistro')), 'reporte_planilla_impositiva.xlsx');
    }
}
