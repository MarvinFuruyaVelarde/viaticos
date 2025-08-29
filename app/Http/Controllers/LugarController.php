<?php

namespace App\Http\Controllers;

use App\Http\Requests\LugarRequest;
use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Lugar;
use App\Models\View_Lugar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LugarController extends Controller
{
    public function index()
    {
        $lugares = View_Lugar::where('id','>',0)->whereNull('deleted_at')->get();
        return view('parametricas.lugares.index', compact('lugares')); 
    }

    public function create()
    {
        $ciudades = Ciudad::where('id', '>', 0)->orderBy('id', 'asc')->get();
        $estados = Estado::whereIn('id', [1, 2])->orderBy('id', 'asc')->get();
        $lugar=new Lugar();
        return view('parametricas.lugares.create',compact('lugar', 'ciudades', 'estados'));
    }

    public function store(LugarRequest $request)
    {
        
        $lugar=new Lugar();

        $lugar->descripcion = $request->descripcion;
        $lugar->ciudad = $request->ciudad;
        $lugar->frontera = $request->frontera;
        $lugar->estado = $request->estado;

        $lugar->save();
        Alert::success("Lugar registrado correctamente!");
        return redirect()->route('lugares.index');
    }

    public function edit(Lugar $lugar)
    {
        $ciudades = Ciudad::where('id', '>', 0)->orderBy('id', 'asc')->get();
        $estados = Estado::whereIn('id', [1, 2])->orderBy('id', 'asc')->get();
        return view('parametricas.lugares.edit',compact('lugar', 'ciudades', 'estados'));
    }

    public function update(Request $request, Lugar $lugar)
    {
        $request->validate( [
            'descripcion'=>'required',
            'ciudad'=>'required',
            'frontera'=>'required',
            'estado'=>'required',
        ],[
                    'descripcion.required' => 'El campo es de ingreso obligatorio.',
                    'ciudad.required' => 'El campo es de ingreso obligatorio.',
                    'frontera.required' => 'El campo es de ingreso obligatorio.',
                    'estado.required' => 'El campo es de ingreso obligatorio.',
            ]
        );
        
        $lugar->descripcion=$request->descripcion;
        $lugar->ciudad=$request->ciudad;
        $lugar->frontera=$request->frontera;
        $lugar->estado = $request->estado;

        $lugar->save();

        //actualice los roles
        return redirect()->route('lugares.index');
    }

    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        
        Alert::success('Lugar eliminado correctamente!');
        return redirect()->route('lugares.index');
    }
}
