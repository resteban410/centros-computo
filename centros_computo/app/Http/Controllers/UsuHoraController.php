<?php

namespace App\Http\Controllers;

use App\Models\UsuHoraModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuHoraController extends Controller
{
    public function store(Request $request){
    	request()->validate([
    		'num_horario_fk' => 'required',
    		'id_usuario_fk' => 'required'
    	]);

    	$usuHora = new UsuHoraModel();

    	$usuHora->num_horario_fk = $request->num_horario_fk;
    	$usuHora->id_usuario_fk = $request->id_usuario_fk;

    	$usuHora->save();

    	return redirect('/horarios')->with('Exitoso', 'Datos guardados');
    }

/*    public function edit(Request $request){

    	request()->validate([
    		'num_horario_fk' => 'required',
    		'id_usuario_fk' => 'required'
    	]);

    	$clave = $request->clave;

    	$usuarioHorario = DB::table('usuario_horario')->where('clave', $clave)->update(
            ['num_horario_fk' => $request->num_horario_fk,
            'id_usuario_fk' => $request->id_usuario_fk]
        );
    	return redirect('/horarios')->with('Exitoso', 'Datos actualizados');  
    }
*/
    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
   
        $equiSoft = DB::table('usuario_horario')->where('clave', $clave)->delete();

        return redirect('/horarios')->with('Exitoso', 'Datos eliminados'); 
    }
}
