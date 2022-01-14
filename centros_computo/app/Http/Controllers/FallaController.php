<?php

namespace App\Http\Controllers;
use App\Models\FallaModel;
use App\Models\EquipoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FallaController extends Controller
{
    public function index(){
    	$equipos = EquipoModel::all(); 
        $usuarios = DB::table('users')
            ->select('users.*')
            ->get();
    	$nombrePag =  "Fallas";
    	$fallas = FallaModel::all();

        return view('admin.fallas',compact('nombrePag','equipos','usuarios','fallas'));
	}

	public function store(Request $request){
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
        return redirect()->route('fallaP');
        //return redirect('/fallas')->with('Exitoso', 'Datos guardados'); 
    }


    public function edit(Request $request){ 
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
