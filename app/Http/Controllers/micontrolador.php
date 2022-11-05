<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\juegos;

class micontrolador extends Controller
{
    public function registrarjuegos()
    {
        return view('registrarjuegos');
    }
    public function guardarjuegos(Request $request)
    {
        $juegos = new juegos;
        $juegos->NOMBRE=$request->input('NOMBRE');
        $juegos->EMPRESA=$request->input('EMPRESA');
        $juegos->TIPO=$request->input('TIPO');
        $juegos->save();

        return redirect()->route('registrarjuegos');
    }

    public function consultajuegos(){
        $juegos = juegos::all();
        return view('consulta', compact('juegos'));
    }

    public function eliminarJuego($id){
        $juegos=juegos::find($id);
        $juegos->delete();
        return redirect()->route('consultajuegos');
    }

    public function muestrajuego($id){
        $juegos=juegos::find($id);
        return view('muestrajuego', compact('juegos'));
    }
    
    public function editajuego(Request $request, $id){
        $juegos=juegos::find($id);
        
        $juegos->NOMBRE=$request->input('NOMBRE');
        $juegos->EMPRESA=$request->input('EMPRESA');
        $juegos->TIPO=$request->input('TIPO');
        $juegos->save();
        return redirect()->route('consultajuegos');
    }
}


