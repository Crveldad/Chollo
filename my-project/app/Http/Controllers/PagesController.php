<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function chollos()
    {
        $chollos = Chollo::all();
        return view('chollos', compact('chollos'));
    }

    public function detalle($id)
    {
        $chollo = Chollo::findOrFail($id);

        return view('chollo.detalle', compact('chollo'));
    }

    public function formulario(){
        return view('crear');
    }

    public function crear(Request $request){
        $cholloNuevo = new Chollo;

        $cholloNuevo -> nombre = $request -> nombre;
        $cholloNuevo -> descripcion = $request -> descripcion;

        $cholloNuevo -> save();

        return back() -> with('mensaje', 'Chollo creado, loco');

    }
    
}
