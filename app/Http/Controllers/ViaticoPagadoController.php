<?php

namespace App\Http\Controllers;

use App\Models\View_Viatico;
use Illuminate\Http\Request;

class ViaticoPagadoController extends Controller
{
    public function index()
    {
        $viaticos = View_Viatico::where('estado', 9)->get();
        return view('viaticos.pagado.index',compact('viaticos'));
    }
}
