<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Via;
use App\Models\Viatico;
use App\Models\View_Viatico;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class RegistroPagoViaticoController extends Controller
{
    public function index()
    {
        $viaticos = View_Viatico::where('estado', 4)->get();
        return view('viaticos.registropago.index',compact('viaticos'));
    }

    public function edit(Viatico $viatico)
    {
        $vias = Via::where('estado', 1)->orderBy('id', 'asc')->get();
        $lugares = Lugar::where('estado', 1)->orderBy('id', 'asc')->get();
        return view('viaticos.registropago.edit',compact('viatico', 'vias', 'lugares'));
    }

    public function update(Request $request, Viatico $viatico)
    {   
        $viatico->sip = $request->sip; 
        $viatico->cip = $request->cip; 
        $viatico->save();
        Alert::success("Registro Pago de Viatico correcto");
        return redirect()->route('registrarpagoviaticos.index');
    }

    public function send(Viatico $viatico)
    {        
        // Actualiza estado de Contrato a Pendiente
        $viatico->estado = 9; 
        $viatico->save();

        Alert::success('Viatico finalizado correctamente');
        return redirect()->route('registrarpagoviaticos.index');
    }
}
