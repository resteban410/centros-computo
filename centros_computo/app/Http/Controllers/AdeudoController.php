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
        return view('admin.adeudos',compact('nombrePag','equipos','alumnos','adeudos'));
	}

	public function store(Request $request){
    	$adeudos = new AdeudoModel(); 

        request()->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'required|min:10',
            'estado' => 'required',
            'matricula_alumno_matricula' => 'required',
            'noserie_equipo' => 'required',
        ]);

        $adeudos->folio = $request->folio;
        $adeudos->fecha = $request->fecha;        
        $adeudos->hora = $request->hora;
        $adeudos->descripcion = $request->descripcion;
        $adeudos->estado = $request->estado;        
        $adeudos->matricula_alumno_matricula = $request->matricula_alumno_matricula;
		$adeudos->noserie_equipo = $request->noserie_equipo;


        $adeudos->save(); 
        return redirect()->route('adeudoP');
        //return redirect('/adeudos')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 
        request()->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'required|min:10',
            'estado' => 'required',
            'matricula_alumno_matricula' => 'required',
            'noserie_equipo' => 'required',
        ]);

        $folio = $request->folio;

        $adeudo = DB::table('adeudo')->where('folio', $folio)->update(
            ['folio' => $request->folio, 
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'descripcion' => $request->descripcion,
        	'estado' => $request->estado,
			'matricula_alumno_matricula' => $request->matricula_alumno_matricula,
            'noserie_equipo' => $request->noserie_equipo]
        );
        return redirect()->route('adeudoP');
        //return redirect('/adeudos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'folio' => 'required'
        ]);

        $folio = $request->folio;
   
        $adeudo = DB::table('adeudo')->where('folio', $folio)->delete();

        return redirect()->route('adeudoP');
        //return redirect('/adeudos')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
