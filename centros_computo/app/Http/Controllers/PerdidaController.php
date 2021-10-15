<?php

namespace App\Http\Controllers;
use App\Models\EquipoModel;
use App\Models\PerdidaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PerdidaController extends Controller
{
    public function index(){
    	$equipos = EquipoModel::all(); 

    	$nombrePag =  "Perdidas";
    	$perdidas = PerdidaModel::all();
        return view('admin.perdidas',compact('nombrePag','equipos','perdidas'));
	}

	public function store(Request $request){
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
        return redirect()->route('perdidaP');
        //return redirect('/perdidas')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

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
        return redirect()->route('perdidaP');
        //return redirect('/perdidas')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
   
        $perdidas = DB::table('perdida')->where('clave', $clave)->delete();
        return redirect()->route('perdidaP');
        //return redirect('/perdidas')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
