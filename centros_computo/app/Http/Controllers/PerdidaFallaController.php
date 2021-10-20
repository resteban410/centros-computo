<?php

namespace App\Http\Controllers;

use App\Models\FallaModel;
use App\Models\EquipoModel;
use App\Models\PerdidaModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerdidaFallaController extends Controller
{
    public function index(){
        $nombrePag =  "Fallas y Perdidas";
        $equipos = EquipoModel::all(); 
    	$fallas = FallaModel::all();
        $perdidas = PerdidaModel::all();

        return view('general.perdidafalla', compact('nombrePag', 'equipos', 'fallas', 'perdidas'));
    }

    public function storeFalla(Request $request){
        $fallas = new FallaModel();

        request()->validate([
            'fecha_reporte' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie' => 'required',
            'usuario_id' => 'required',
        ]);
        $fallas->clave_fallas = $request->clave_fallas;
        $fallas->fecha_reporte = $request->fecha_reporte;        
        $fallas->fecha_atención = $request->fecha_atención;
        $fallas->descripcion = $request->descripcion;
        $fallas->equipo_noserie = $request->equipo_noserie;
        $fallas->usuario_id = $request->usuario_id;

        $fallas->save();
        return redirect()->route('FallaPerdidaG');
    }

    public function storePerdida(Request $request){
        $perdidas = new PerdidaModel(); 

        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie' => 'required',
        ]);

        $perdidas->clave = $request->clave;
        $perdidas->fecha_perdida = $request->fecha_reporte;        
        $perdidas->hora_perdida = $request->hora_perdida;
        $perdidas->observaciones = $request->observaciones;
        $perdidas->equipo_no_serie = $request->equipo_no_serie;

        $perdidas->save(); 
        return redirect()->route('FallaPerdidaG');
    }
}
