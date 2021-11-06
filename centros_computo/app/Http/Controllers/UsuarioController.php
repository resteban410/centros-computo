<?php

namespace App\Http\Controllers;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function index(){
    	$nombrePag =  "Usuarios";
        $usuarios = DB::table('usuario')
            ->select('usuario.*')
            ->get();
        return view('admin.usuarios',compact('usuarios', 'nombrePag')); 
        
    }

    public function store(Request $request){

        request()->validate([
            'id' => 'required',
            'nombre_usuario' => 'required',
            'apellido' => 'required',
            'contraseña' => 'required',
            'correo_electronico' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required',
            'tipo' => 'required'
        ]);

        $usuarios = new UsuarioModel(); 
        
        
        $usuarios->id = $request->id;
        $usuarios->nombre_usuario = $request->nombre_usuario;
        $usuarios->apellido = $request->apellido;
        $usuarios->contraseña = $request->contraseña;
        $usuarios->correo_electronico = $request->correo_electronico;
        $usuarios->direccion = $request->direccion;
        $usuarios->telefono = $request->telefono;
        $usuarios->tipo = $request->tipo;

        $usuarios->save();
        return redirect()->route('usuariosP');
        //return redirect('/usuarios')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'id' => 'required',
            'nombre_usuario' => 'required',
            'apellido' => 'required',
            'contraseña' => 'required',
            'correo_electronico' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required',
            'tipo' => 'required'
        ]);


        $id = $request->id;

        $usuarios = DB::table('usuario')->where('id', $id)->update(
            ['id' => $request->id, 
            'nombre_usuario' => $request->nombre_usuario,
            'apellido' => $request->apellido,
            'contraseña' => $request->contraseña,
            'correo_electronico' => $request->correo_electronico,
        	'direccion' => $request->direccion,
        	'telefono' => $request->telefono,
        	'tipo' => $request->tipo]
        );
        return redirect()->route('usuariosP');
        //return redirect('/usuarios')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'id' => 'required'
        ]);


        $id = $request->id;
   
        $usuario = DB::table('usuario')->where('id', $id)->delete();
        return redirect()->route('usuariosP');
        //return redirect('/usuarios')->with('Exitoso', 'Datos eliminados'); 
    }
}
