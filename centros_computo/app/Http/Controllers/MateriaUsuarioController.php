<?php

namespace App\Http\Controllers;
use App\Models\MateriaUsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriaUsuarioController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'materia_clave' => 'required',
            'usu_id_usu' => 'required'
        ]);

        $matUsu = new MateriaUsuarioModel(); 
        
        $matUsu->materia_clave= $request->materia_clave;
        $matUsu->usu_id_usu= $request->usu_id_usu;
        
        $matUsu->save(); 
        return redirect()->route('materiasP');
    }

    public function edit(Request $request){

        request()->validate([
            'materia_clave' => 'required',
            'usu_id_usu' => 'required'
        ]);

        $id_mat_uso = $request->id_mat_uso;

        $equiSoft = DB::table('materia_usuario')->where('id_mat_uso', $id_mat_uso)->update(
            ['materia_clave' => $request->materia_clave,
            'usu_id_usu' => $request->usu_id_usu]
        );
        return redirect()->route('materiasP');
    }

    public function destroy(Request $request){

        request()->validate([
            'id_mat_uso' => 'required'
        ]);

        $id_mat_uso = $request->id_mat_uso;
   
        $equiSoft = DB::table('materia_usuario')->where('id_mat_uso', $id_mat_uso)->delete();
        return redirect()->route('materiasP');
    }

}
