<?php

namespace App\Http\Controllers;
use App\Models\MateriaModel;
use App\Models\MateriaUsuarioModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
{
    
    public function index()
    {
        $nombrePag =  "Materias";
        $materias = MateriaModel::all(); 
        $matUso = MateriaUsuarioModel::all();
        $usuarios = UsuarioModel::all();
        return view('materias',compact('materias', 'nombrePag', 'matUso', 'usuarios')); 
    }

    public function store(Request $request){
        request()->validate([
            'nrc' => 'required',
            'nombre' => 'required',
            'carrera' => 'required'
        ]);

        $materias = new MateriaModel(); 
        
        
        $materias->nrc = $request->nrc;
        $materias->nombre = $request->nombre;
        $materias->carrera= $request->carrera;
        
        
        $materias->save(); 
        return redirect('/materias')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){

        request()->validate([
            'nrc' => 'required',
            'nombre' => 'required',
            'carrera' => 'required'
        ]);

        $nrc = $request->nrc;

        $materias = DB::table('materia')->where('nrc', $nrc)->update(
            ['nrc' => $request->nrc, 
            'nombre' => $request->nombre,
            'carrera' => $request->carrera]
        );
        return redirect('/materias')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'nrc' => 'required'
        ]);

        $nrc = $request->nrc;
   
        $materias = DB::table('materia')->where('nrc', $nrc)->delete();

        return redirect('/materias')->with('Exitoso', 'Datos eliminados'); 
    }
}
