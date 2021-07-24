<?php

namespace App\Http\Controllers;
use App\Models\EquipoModel;
use App\Models\FaltaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FaltaController extends Controller
{
    public function index(){
    	$equipos = EquipoModel::all(); 

    	$nombrePag =  "Faltas";
    	$faltas = FaltaModel::all();
        return view('faltas',compact('nombrePag','equipos','faltas'));
	}

	public function store(Request $request){
    	$faltas = new FaltaModel(); 

        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie' => 'required',
        ]);

        $faltas->clave = $request->clave;
        $faltas->fecha_perdida = $request->fecha_reporte;        
        $faltas->hora_perdida = $request->hora_perdida;
        $faltas->observaciones = $request->observaciones;
        $faltas->equipo_no_serie = $request->equipo_no_serie;

        $faltas->save(); 
        return redirect('/faltas')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'fecha_perdida' => 'required',
            'hora_perdida' => 'required',
            'observaciones' => 'required|min:10',
            'equipo_no_serie' => 'required',
        ]);

        $clave = $request->clave;

        $faltas = DB::table('faltas')->where('clave', $clave)->update(
            ['clave' => $request->clave, 
            'fecha_perdida' => $request->fecha_perdida,
            'hora_perdida' => $request->hora_perdida,
            'observaciones' => $request->observaciones,
        	'equipo_no_serie' => $request->equipo_no_serie
		]);
        return redirect('/faltas')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
   
        $faltas = DB::table('faltas')->where('clave', $clave)->delete();

        return redirect('/faltas')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
