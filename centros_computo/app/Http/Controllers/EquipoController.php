<?php

namespace App\Http\Controllers;
use App\Models\EquipoModel;
use App\Models\MarcaModel;
use App\Models\LaboratorioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EquipoController extends Controller
{
    public function index(){
    	$laboratorios = LaboratorioModel::all();
        $marcas = MarcaModel::all();

    	$nombrePag =  "Equipos";
<<<<<<< HEAD
        $equipos = DB::table('equipo')
            ->join('laboratorio', 'equipo.laboratorio_clave', '=', 'laboratorio.lab_clave')
            ->join('marca', 'equipo.marca_id', '=', 'marca.id_marca')
            ->select('equipo.*', 'laboratorio.nombre', 'marca.nombre_marca')
            ->get();
=======
        $equipos = EquipoModel::all();   
>>>>>>> origin/master

        return view('admin.equipos',compact('equipos', 'nombrePag', 'laboratorios', 'marcas')); 
        
    }

    public function store(Request $request){

        request()->validate([
            'no_serie' => 'required',
            'num_equipo' => 'required',
            'modelo' => 'required',
            'laboratorio_clave' => 'required',
            'marca_id' => 'required'
        ]);

    	$equipos = new EquipoModel(); 
        
        
        $equipos->no_serie = $request->no_serie;
        $equipos->num_equipo = $request->num_equipo;
        $equipos->modelo = $request->modelo;
        $equipos->laboratorio_clave = $request->laboratorio_clave;
        $equipos->marca_id = $request->marca_id;


        $equipos->save();
        return redirect()->route('equiposP');
        //return redirect('/equipos')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'no_serie' => 'required',
            'num_equipo' => 'required',
            'modelo' => 'required',
            'laboratorio_clave' => 'required',
            'marca_id' => 'required',
        ]);

        $no_serie = $request->no_serie;

        $equipos = DB::table('equipo')->where('no_serie', $no_serie)->update([
            'no_serie' => $request->no_serie, 
            'num_equipo' => $request->num_equipo,
            'modelo' => $request->modelo,
            'laboratorio_clave' => $request->laboratorio_clave,
            'marca_id' => $request->marca_id,
            ]
        );
        return redirect()->route('equiposP');
        //return redirect('/equipos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'no_serie' => 'required',
        ]);

        $no_serie = $request->no_serie;
   
        $equipo = DB::table('equipo')->where('no_serie', $no_serie)->delete();
        
        return redirect()->route('equiposP');
        //return redirect('/equipos')->with('Exitoso', 'Datos eliminados'); 
    
    }
}
