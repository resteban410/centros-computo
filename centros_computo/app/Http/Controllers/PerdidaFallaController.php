<?php

namespace App\Http\Controllers;

use App\Models\FallaModel;
use App\Models\EquipoModel;
use App\Models\PerdidaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerdidaFallaController extends Controller
{
    public function index(){
        $nombrePag = "Fallas y perdidas";
        $equipos = EquipoModel::all(); 
        $usuarios = DB::table('users')
            ->select('users.*')
            ->get();
        $fallas = FallaModel::all();
        $perdidas = PerdidaModel::all();
        return view('general.perdidafalla', compact('nombrePag', 'fallas', 'perdidas', 'equipos', 'usuarios'));
    }


    public function storeFalla(Request $request){
        $fallas = new FallaModel(); 

        request()->validate([
            'fecha_reporte' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie_equipo' => 'required',
            'usuario_id_usuario' => 'required',
        ]);

        $fallas->clave_fallas = $request->clave_fallas;
        $fallas->fecha_reporte = $request->fecha_reporte;        
        $fallas->fecha_atencion = $request->fecha_atencion;
        $fallas->descripcion = $request->descripcion;
        $fallas->equipo_noserie_equipo = $request->equipo_noserie_equipo;
        $fallas->usuario_id_usuario = $request->usuario_id_usuario;

        $fallas->save();
        return redirect()->route('FallaPerdida');
    }

    public function storePerdida(Request $request){
        $perdidas = new PerdidaModel(); 

        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie_equipo' => 'required',
        ]);

        $perdidas->clave = $request->clave;
        $perdidas->fecha_perdida = $request->fecha_perdida;        
        $perdidas->hora_perdida = $request->hora_perdida;
        $perdidas->observaciones = $request->observaciones;
        $perdidas->equipo_no_serie_equipo = $request->equipo_no_serie_equipo;

        $perdidas->save();
        return redirect()->route('FallaPerdida');
    }

    public function editFalla(Request $request){
        request()->validate([
            'fecha_reporte' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie_equipo' => 'required',
            'usuario_id_usuario' => 'required',
        ]);

        $clave_fallas = $request->clave_fallas;

        $fallas = DB::table('fallas')->where('clave_fallas', $clave_fallas)->update(
            ['clave_fallas' => $request->clave_fallas, 
            'fecha_reporte' => $request->fecha_reporte,
            'fecha_atencion' => $request->fecha_atencion,
            'descripcion' => $request->descripcion,
        	'equipo_noserie_equipo' => $request->equipo_noserie_equipo,
			'usuario_id_usuario' => $request->usuario_id_usuario
		]);
        return redirect()->route('FallaPerdida');
    }

    public function editPerdida(Request $request){
        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie_equipo' => 'required',
        ]);

        $clave = $request->clave;

        $perdidas = DB::table('perdida')->where('clave', $clave)->update(
            ['clave' => $request->clave, 
            'fecha_perdida' => $request->fecha_perdida,
            'hora_perdida' => $request->hora_perdida,
            'observaciones' => $request->observaciones,
        	'equipo_no_serie_equipo' => $request->equipo_no_serie_equipo
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