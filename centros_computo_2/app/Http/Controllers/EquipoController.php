<?php

namespace App\Http\Controllers;
use App\Models\EquipoModel;
use App\Models\LaboratorioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EquipoController extends Controller
{
    public function index(){
    	$laboratorios = LaboratorioModel::all();

    	$nombrePag =  "Equipos";
        $equipos = EquipoModel::all(); 
        return view('equipos',compact('equipos', 'nombrePag', 'laboratorios')); 
        
    }

    public function store(Request $request){

        request()->validate([
            'no_serie' => 'required',
            'num_equipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'laboratorio_clave' => 'required'
        ]);

    	$equipos = new EquipoModel(); 
        
        
        $equipos->no_serie = $request->no_serie;
        $equipos->num_equipo = $request->num_equipo;
        $equipos->marca = $request->marca;
        $equipos->modelo = $request->modelo;
        $equipos->laboratorio_clave = $request->laboratorio_clave;

        $equipos->save(); 
        return redirect('/equipos')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'no_serie' => 'required',
            'num_equipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'laboratorio_clave' => 'required'
        ]);

        $no_serie = $request->no_serie;

        $equipos = DB::table('equipo')->where('no_serie', $no_serie)->update([
            'no_serie' => $request->no_serie, 
            'num_equipo' => $request->num_equipo,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'laboratorio_clave' => $request->laboratorio_clave]
        );
        return redirect('/equipos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'no_serie' => 'required',
        ]);

        $no_serie = $request->no_serie;
   
        $equipo = DB::table('equipo')->where('no_serie', $no_serie)->delete();

        return redirect('/equipos')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
