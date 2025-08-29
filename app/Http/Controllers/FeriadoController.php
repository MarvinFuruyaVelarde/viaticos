<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeriadoRequest;
use App\Models\Estado;
use App\Models\Feriado;
use App\Models\View_Feriado;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FeriadoController extends Controller
{
    public function index()
    {
        $feriados = View_Feriado::where('id','>',0)->whereNull('deleted_at')->get();
        return view('parametricas.feriados.index', compact('feriados')); 
    }

    public function create()
    {
        $estados = Estado::whereIn('id', [1, 2])->orderBy('id', 'asc')->get();
        $feriado=new Feriado();
        return view('parametricas.feriados.create',compact('feriado', 'estados'));
    }

    public function store(FeriadoRequest $request)
    {
        
        $feriado=new Feriado();

        $feriado->descripcion = $request->descripcion;
        $feriado->fecha = $request->fecha;
        $feriado->estado = $request->estado;

        $feriado->save();
        Alert::success("Feriado registrado correctamente!");
        return redirect()->route('feriados.index');
    }

    public function edit(Feriado $feriado)
    {
        $estados = Estado::whereIn('id', [1, 2])->orderBy('id', 'asc')->get();
        return view('parametricas.feriados.edit',compact('feriado', 'estados'));
    }

    public function update(Request $request, Feriado $feriado)
    {
        $request->validate( [
            'descripcion'=>'required',
            'fecha'=>'required',
            'estado'=>'required',
        ],[
                    'descripcion.required' => 'El campo es de ingreso obligatorio.',
                    'fecha.required' => 'El campo es de ingreso obligatorio.',
                    'estado.required' => 'El campo es de ingreso obligatorio.',
            ]
        );
        
        $feriado->descripcion=$request->descripcion;
        $feriado->fecha=$request->fecha;
        $feriado->estado = $request->estado;

        $feriado->save();

        //actualice los roles
        return redirect()->route('feriados.index');
    }

    public function destroy(Feriado $feriado)
    {
        $feriado->delete();
        
        Alert::success('Feriado eliminado correctamente!');
        return redirect()->route('feriados.index');
    }
}
