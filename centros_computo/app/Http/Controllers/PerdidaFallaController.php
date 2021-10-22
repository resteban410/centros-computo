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
        $nombrePag = "Fallas y perdidas";
        $equipos = EquipoModel::all(); 
        $usuarios = UsuarioModel::all(); 
        $fallas = FallaModel::all();
        $perdidas = PerdidaModel::all();
        return view('general.perdidafalla', compact('nombrePag', 'fallas', 'perdidas', 'equipos', 'usuarios'));
    }


    public function storeFalla(Request $request){
        $fallas = new FallaModel(); 

        request()->validate([
            'fecha_perdida' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie' => 'required',
            'usuario_id' => 'required',
        ]);

        $fallas->clave_fallas = $request->clave_fallas;
        $fallas->fecha_perdida = $request->fecha_perdida;        
        $fallas->fecha_atencion = $request->fecha_atencion;
        $fallas->descripcion = $request->descripcion;
        $fallas->equipo_noserie = $request->equipo_noserie;
        $fallas->usuario_id = $request->usuario_id;

        $fallas->save();
        return redirect()->route('FallaPerdida');
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
        $perdidas->fecha_perdida = $request->fecha_perdida;        
        $perdidas->hora_perdida = $request->hora_perdida;
        $perdidas->observaciones = $request->observaciones;
        $perdidas->equipo_no_serie = $request->equipo_no_serie;

        $perdidas->save();
        return redirect()->route('FallaPerdida');
    }

    public function editFalla(Request $request){
        request()->validate([
            'fecha_perdida' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie' => 'required',
            'usuario_id' => 'required',
        ]);

        $clave_fallas = $request->clave_fallas;

        $fallas = DB::table('fallas')->where('clave_fallas', $clave_fallas)->update(
            ['clave_fallas' => $request->clave_fallas, 
            'fecha_perdida' => $request->fecha_perdida,
            'fecha_atencion' => $request->fecha_atencion,
            'descripcion' => $request->descripcion,
        	'equipo_noserie' => $request->equipo_noserie,
			'usuario_id' => $request->usuario_id
		]);
        return redirect()->route('FallaPerdida');
    }

    public function editPerdida(Request $request){
        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie' => 'required',
        ]);

        $clave = $request->clave;

        $perdidas = DB::table('perdida')->where('clave', $clave)->update(
            ['clave' => $request->clave, 
            'fecha_perdida' => $request->fecha_perdida,
            'hora_perdida' => $request->hora_perdida,
            'observaciones' => $request->observaciones,
        	'equipo_no_serie' => $request->equipo_no_serie
		]);
        return redirect()->route('FallaPerdida');
    }

    public function destroyFalla(Request $request){
        request()->validate([
            'clave_fallas' => 'required'
        ]);
        $clave_fallas = $request->clave_fallas;
        $fallas = DB::table('fallas')->where('clave_fallas', $clave_fallas)->delete();
        return redirect()->route('FallaPerdida');
    }

    public function destroyPerdida(Request $request){
        request()->validate([
            'clave' => 'required'
        ]);
        $clave = $request->clave;
        $perdidas = DB::table('perdida')->where('clave', $clave)->delete();
        return redirect()->route('FallaPerdida');
    }
}