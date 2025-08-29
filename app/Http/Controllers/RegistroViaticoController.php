<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViaticoRequest;
use App\Models\Feriado;
use App\Models\Lugar;
use App\Models\TipoViatico;
use App\Models\Via;
use App\Models\Viatico;
use App\Models\View_Viatico;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\App;

class RegistroViaticoController extends Controller
{
    public function index()
    {
        $viaticos = View_Viatico::where('estado', 3)->whereNull('deleted_at')->get();
        return view('viaticos.lista.index',compact('viaticos'));
    }

    public function create()
    {
        $viatico = new Viatico();
        $vias = Via::where('estado', 1)->orderBy('id', 'asc')->get();
        $lugares = Lugar::where('estado', 1)->orderBy('id', 'asc')->get();
        return view('viaticos.lista.create',compact('viatico', 'vias', 'lugares'));
    }

    public function store(ViaticoRequest $request)
    {
        $viatico = new Viatico();
        $viatico->fecha_registro = $request->fecha_registro;
        $viatico->hoja_ruta = $request->hoja_ruta;
        $viatico->ci = $request->ci;
        $viatico->beneficiario = $request->beneficiarioH;
        $viatico->da = $request->daH;
        $viatico->numero_cuenta = $request->numero_cuentaH;
        $viatico->escala = $request->escalaH;
        $viatico->estado_beneficiario = $request->estadoH;
        $viatico->cargo = $request->cargoH;
        $viatico->origen = $request->origen;
        $viatico->fecha_salida = $request->salida;
        $viatico->hora_salida = $request->hora_salida;
        $viatico->destino = $request->destino;
        $viatico->fecha_retorno = $request->retorno;
        $viatico->hora_retorno = $request->hora_retorno;
        $viatico->total_dia = $request->total_diaH;
        $viatico->fecha_maxima_presentacion = $request->fecha_max_presentacionH;
        $viatico->distancia = $request->distanciaH;
        $viatico->via = $request->via;
        $viatico->descripcion = $request->descripcion;
        $viatico->medio_dia_100 = $request->medio_dia_100H;
        $viatico->dia_entero_100 = $request->dia_entero_100H;
        $viatico->medio_dia_70 = $request->medio_dia_70;
        $viatico->dia_entero_70 = $request->dia_entero_70;
        $viatico->total_viatico = $request->total_viaticoH;
        $viatico->pasaje = $request->pasaje;
        $viatico->retencion_pasaje = $request->retencion_pasaje_16H;
        $viatico->total_pasaje = $request->total_pasajeH;
        $viatico->flete = $request->flete;
        $viatico->retencion_flete = $request->retencion_flete_16H;
        $viatico->total_flete = $request->total_fleteH;
        $viatico->total_viatico_pasaje = $request->total_viatico_pasajeH;
        $viatico->estado = 3;
        $viatico->save();
        Alert::success("Viatico registrado correctamente!");
        return redirect()->route('viaticos.index');
    }

    public function edit(Viatico $viatico)
    {
        $vias = Via::where('estado', 1)->orderBy('id', 'asc')->get();
        $lugares = Lugar::where('estado', 1)->orderBy('id', 'asc')->get();
        return view('viaticos.lista.edit',compact('viatico', 'vias', 'lugares'));
    }

    public function update(Request $request, Viatico $viatico)
    {
        /*$request->validate( [
            'descripcion'=>'required',
            'estado'=>'required',
        ],[
                    'descripcion.required' => 'El campo es de ingreso obligatorio.',
                    'estado.required' => 'El campo es de ingreso obligatorio.',
            ]
        );*/
        $viatico->fecha_registro = $request->fecha_registro;
        $viatico->hoja_ruta = $request->hoja_ruta;
        $viatico->ci = $request->ci;
        $viatico->beneficiario = $request->beneficiarioH;
        $viatico->da = $request->daH;
        $viatico->numero_cuenta = $request->numero_cuentaH;
        $viatico->escala = $request->escalaH;
        $viatico->estado_beneficiario = $request->estadoH;
        $viatico->cargo = $request->cargoH;
        $viatico->origen = $request->origen;
        $viatico->fecha_salida = $request->salida;
        $viatico->hora_salida = $request->hora_salida;
        $viatico->destino = $request->destino;
        $viatico->fecha_retorno = $request->retorno;
        $viatico->hora_retorno = $request->hora_retorno;
        $viatico->total_dia = $request->total_diaH;
        $viatico->fecha_maxima_presentacion = $request->fecha_max_presentacionH;
        $viatico->distancia = $request->distanciaH;
        $viatico->via = $request->via;
        $viatico->descripcion = $request->descripcion;
        $viatico->medio_dia_100 = $request->medio_dia_100;
        $viatico->dia_entero_100 = $request->dia_entero_100;
        $viatico->medio_dia_70 = $request->medio_dia_70;
        $viatico->dia_entero_70 = $request->dia_entero_70;
        $viatico->total_viatico = $request->total_viaticoH;
        $viatico->pasaje = $request->pasaje;
        $viatico->retencion_pasaje = $request->retencion_pasaje_16H;
        $viatico->total_pasaje = $request->total_pasajeH;
        $viatico->flete = $request->flete;
        $viatico->retencion_flete = $request->retencion_flete_16H;
        $viatico->total_flete = $request->total_fleteH;
        $viatico->total_viatico_pasaje = $request->total_viatico_pasajeH;
        $viatico->save();

        //actualice los roles
        Alert::success("Viatico modificado correctamente!");
        return redirect()->route('viaticos.index');
    }

    public function obtieneMontoViatico(Request $request)
    {
        $escala = $request->query('escala');
        $tipoViatico = $request->query('tipoViatico');
        $monto = TipoViatico::where('descripcion', 'LIKE', $tipoViatico)->where('escala', $escala)->value('monto');
        return response()->json(['success' => true, 'monto' => $monto]);
    }

    public function obtieneNroDiaFeriado(Request $request)
    {
        // Limpiamos el texto extra
        $fechaInicialString = preg_replace('/\s*\(.*\)$/', '', $request->fechaInicial);
        $fechaFinalString = preg_replace('/\s*\(.*\)$/', '', $request->fechaFinal);

        // Parseamos normalmente con Carbon
        $fechaInicial = Carbon::parse($fechaInicialString)->format('Y-m-d');
        $fechaFinal = Carbon::parse($fechaFinalString)->format('Y-m-d');

        $nroDiaFeriado = Feriado::whereBetween('fecha', [$fechaInicial, $fechaFinal])->count();

        return response()->json(['success' => true, 'nroDiaFeriado' => $nroDiaFeriado]);
    }

    public function destroy(Viatico $viatico)
    {
        $viatico->delete();   
        Alert::success('Viatico eliminado correctamente!');
        return redirect()->route('viaticos.index');
    }

    public function send(Viatico $viatico)
    {        

        // Actualiza estado de Contrato a Pendiente
        $viatico->estado = 4; 
        $viatico->save();

        Alert::success('Viatico enviado para Aprobar');
        return redirect()->route('viaticos.index');
    }

    public function showBoletaLiq($id)
    {
        $viatico = Viatico::find($id);
        $lugarO = Lugar::find($viatico->origen);
        $origen = $lugarO->descripcion;
        $lugarD = Lugar::find($viatico->destino);
        $destino = $lugarD->descripcion;
        $viaR = Via::find($viatico->via);
        $via = $viaR->descripcion;
        $pdf = App::make('dompdf.wrapper');
        $fechaImpresion = Carbon::now()->format('Y-m-d H:i:s');
        $pdf->loadView('viaticos.pdf.boleta',compact('viatico', 'fechaImpresion', 'origen', 'destino', 'via'));
        return $pdf->stream();
    }

}
