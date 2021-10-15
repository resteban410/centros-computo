<?php

namespace App\Http\Controllers;
use App\Models\MateriaUsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriaUsuarioController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'materia_nrc' => 'required',
            'usu_id_usu' => 'required'
        ]);

        $matUsu = new MateriaUsuarioModel(); 
        
        $matUsu->materia_nrc = $request->materia_nrc;
        $matUsu->usu_id_usu= $request->usu_id_usu;
        
        $matUsu->save(); 
        return redirect()->route('materiasP');
        //return redirect('/materias')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){

        request()->validate([
            'materia_nrc' => 'required',
            'usu_id_usu' => 'required'
        ]);

        $clave = $request->clave;

        $equiSoft = DB::table('materia_usuario')->where('clave', $clave)->update(
            ['materia_nrc' => $request->materia_nrc,
            'usu_id_usu' => $request->usu_id_usu]
        );
        return redirect()->route('materiasP');
        //return redirect('/materias')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
   
        $equiSoft = DB::table('materia_usuario')->where('clave', $clave)->delete();
        return redirect()->route('materiasP');
        //return redirect('/materias')->with('Exitoso', 'Datos eliminados'); 
    }

}
