<?php

namespace App\Http\Controllers;
use App\Models\AdeudoModel;
use App\Models\EquipoModel;
use App\Models\AlumnoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdeudoController extends Controller
{
    public function index(){
    	$equipos = EquipoModel::all(); 
        $alumnos = AlumnoModel::all(); 

    	$nombrePag =  "Adeudos";
    	$adeudos = AdeudoModel::all();
        return view('adeudos',compact('nombrePag','equipos','alumnos','adeudos'));
	}

	public function store(Request $request){
    	$adeudos = new AdeudoModel(); 

        request()->validate([
            'fecha' => 'required',
            'descripcion' => 'required|min:10',
            'estatus' => 'required',
            'matricula_alumno_alumno' => 'required',
            'noserie_equipo' => 'required',
        ]);

        $adeudos->folio = $request->folio;
        $adeudos->fecha = $request->fecha;        
        $adeudos->hora = $request->hora;
        $adeudos->descripcion = $request->descripcion;
        $adeudos->estatus = $request->estatus;        
        $adeudos->matricula_alumno_alumno = $request->matricula_alumno_alumno;
		$adeudos->noserie_equipo = $request->noserie_equipo;


        $adeudos->save(); 
        return redirect('/adeudos')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 
        request()->validate([
            'fecha' => 'required',
            'descripcion' => 'required|min:10',
            'estatus' => 'required',
            'matricula_alumno_alumno' => 'required',
            'noserie_equipo' => 'required',
        ]);

        $folio = $request->folio;

        $adeudo = DB::table('adeudo')->where('folio', $folio)->update(
            ['folio' => $request->folio, 
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'descripcion' => $request->descripcion,
        	'estatus' => $request->estatus,
			'matricula_alumno_alumno' => $request->matricula_alumno_alumno,
            'noserie_equipo' => $request->noserie_equipo]
        );
        return redirect('/adeudos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'folio' => 'required'
        ]);

        $folio = $request->folio;
   
        $adeudo = DB::table('adeudo')->where('folio', $folio)->delete();

        return redirect('/adeudos')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
