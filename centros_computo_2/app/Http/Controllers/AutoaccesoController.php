<?php

namespace App\Http\Controllers;
use App\Models\AutoaccesoModel;
use App\Models\EquipoModel;
use App\Models\UsuarioModel;
use App\Models\AlumnoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AutoaccesoController extends Controller
{
    public function index(){
    	$usuarios = UsuarioModel::all();
    	$equipos = EquipoModel::all(); 
        $alumnos = AlumnoModel::all(); 


    	$nombrePag =  "Autoacceso";
        $autoaccesos = AutoaccesoModel::all(); 
        return view('autoacceso',compact('autoaccesos', 'nombrePag', 'usuarios', 'equipos', 'alumnos'));
    }

    public function store(Request $request){
    	
        request()->validate([
            'hora_inicio' => 'required',
            'hora_termino' => 'required',
            'fecha' => 'required',
            'actividad' => 'required',
            'equipo_noserie' => 'required', 
            'usuario_id' => 'required',
            'matricula_alumno' => 'required'
        ]);

        $autoacceso = new AutoaccesoModel(); 
        
        $autoacceso->folio = $request->folio;
        $autoacceso->hora_inicio = $request->hora_inicio;
        $autoacceso->hora_termino = $request->hora_termino;
        $autoacceso->fecha = $request->fecha;
        $autoacceso->actividad = $request->actividad;
        $autoacceso->equipo_noserie = $request->equipo_noserie;
        $autoacceso->usuario_id = $request->usuario_id;
        $autoacceso->matricula_alumno = $request->matricula_alumno;

        $autoacceso->save(); 
        return redirect('/autoaccesos')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'hora_inicio' => 'required',
            'hora_termino' => 'required',
            'fecha' => 'required',
            'actividad' => 'required',
            'equipo_noserie' => 'required', 
            'usuario_id' => 'required',
            'matricula_alumno' => 'required'
        ]);


        $folio = $request->folio;

        $autoacceso = DB::table('autoacceso')->where('folio', $folio)->update(
            ['folio' => $request->folio, 
            'hora_inicio' => $request->hora_inicio,
            'hora_termino' => $request->hora_termino,
            'fecha' => $request->fecha,
            'actividad' => $request->actividad,
        	'equipo_noserie' => $request->equipo_noserie,
			'usuario_id' => $request->usuario_id,
            'matricula_alumno' => $request->matricula_alumno]
        );
        return redirect('/autoaccesos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){
        
        request()->validate([
            'folio' => 'required'
        ]);

        $folio = $request->folio;
   
        $autoacceso = DB::table('autoacceso')->where('folio', $folio)->delete();

        return redirect('/autoaccesos')->with('Exitoso', 'Datos eliminados'); 
    
    }

}
