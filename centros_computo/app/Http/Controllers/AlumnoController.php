<?php

namespace App\Http\Controllers;
use App\Models\AlumnoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function alumShow(){
        $nombrePag = "Alumnos";       
        $alumnos = AlumnoModel::all(); //Recupera todos los registros de la tabla alumnos
        return view('alumnos',compact('alumnos', 'nombrePag')); //Retorna la vista principal de alumnos y le pasa la variable 
        //en la que estan los datos para mostrarla en la tabla
    }
    public function store(Request $request){
        
        request()->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'carrera' => 'required',
            'correo_electronico' => 'required|email',
        ]);

        $alumno = new AlumnoModel(); //Crea un nuevo objeto del modelo alumno
        
        //Relaciona los campos de nuestra tabla con los del formulario
        $alumno->matricula = $request->matricula;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->carrera = $request->carrera;
        $alumno->correo_electronico = $request->correo_electronico;
        
        
        $alumno->save(); //Guarda los datos del formulario
        return redirect('/alumnos')->with('Exitoso', 'Datos guardados'); //Mensajes de confirmacion
    }

    public function edit(Request $request){ 
        request()->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'carrera' => 'required',
            'correo_electronico' => 'required|email',
        ]);

        $matricula = $request->matricula; 

        $alumno = DB::table('alumno')->where('matricula', $matricula)->update(
            ['matricula' => $request->matricula, 
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'carrera' => $request->carrera,
            'correo_electronico' => $request->correo_electronico]
        );
        return redirect('/alumnos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'matricula' => 'required'
        ]);

        $matricula = $request->matricula;
   
        $alumno = DB::table('alumno')->where('matricula', $matricula)->delete();

        return redirect('/alumnos')->with('Exitoso', 'Datos eliminados'); 
    }

}
