<?php

namespace App\Http\Controllers;
use App\Models\FallaModel;
use App\Models\EquipoModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FallaController extends Controller
{
    public function index(){
    	$equipos = EquipoModel::all(); 
        $usuarios = UsuarioModel::all(); 

    	$nombrePag =  "Fallas";
    	$fallas = FallaModel::all();

        return view('admin.fallas',compact('nombrePag','equipos','usuarios','fallas'));
	}

	public function store(Request $request){
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
        return redirect()->route('fallaP');
        //return redirect('/fallas')->with('Exitoso', 'Datos guardados'); 
    }


    public function edit(Request $request){ 
        request()->validate([
            'fecha_reporte' => 'required',
            'descripcion' => 'required|min:10',
            'equipo_noserie' => 'required',
            'usuario_id' => 'required',
        ]);

        $clave_fallas = $request->clave_fallas;

        $fallas = DB::table('fallas')->where('clave_fallas', $clave_fallas)->update(
            ['clave_fallas' => $request->clave_fallas, 
            'fecha_reporte' => $request->fecha_reporte,
            'fecha_atención' => $request->fecha_atención,
            'descripcion' => $request->descripcion,
        	'equipo_noserie' => $request->equipo_noserie,
			'usuario_id' => $request->usuario_id
		]);
        return redirect()->route('fallaP');
        //return redirect('/fallas')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave_fallas' => 'required'
        ]);

        $clave_fallas = $request->clave_fallas;
   
        $fallas = DB::table('fallas')->where('clave_fallas', $clave_fallas)->delete();
        return redirect()->route('fallaP');
        //return redirect('/fallas')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
