<?php

namespace App\Http\Controllers;
use App\Models\LaboratorioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaboratorioController extends Controller
{
    public function index(){
    	$nombrePag =  "Laboratorios";
        $laboratorios = LaboratorioModel::all(); 
        return view('admin.laboratorios',compact('laboratorios', 'nombrePag')); 
        
    }

    public function store(Request $request){
        request()->validate([
            'lab_clave'=>'required',
            'ubicacion'=>'required',
            'nombre_laboratorio'=>'required'
        ]);

        $laboratorios = new LaboratorioModel(); 
        
        
        $laboratorios->lab_clave = $request->lab_clave;
        $laboratorios->ubicacion = $request->ubicacion;
        $laboratorios->nombre_laboratorio = $request->nombre_laboratorio;
        
        
        $laboratorios->save(); 
        return redirect()->route('laboratoriosP');
        //return redirect('/laboratorios')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){ 

        request()->validate([
            'lab_clave'=>'required',
            'ubicacion'=>'required',
            'nombre_laboratorio'=>'required'
        ]);

        $lab_clave = $request->lab_clave;

        $laboratorios = DB::table('laboratorio')->where('lab_clave', $lab_clave)->update(
            ['lab_clave' => $request->lab_clave, 
            'ubicacion' => $request->ubicacion,
            'nombre_laboratorio' => $request->nombre_laboratorio]
        );

        return redirect()->route('laboratoriosP');
        //return redirect('/laboratorios')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'lab_clave'=>'required'
        ]);

        $lab_clave = $request->lab_clave;
   
        $laboratorios = DB::table('laboratorio')->where('lab_clave', $lab_clave)->delete();
        return redirect()->route('laboratoriosP');
        //return redirect('/laboratorios')->with('Exitoso', 'Datos eliminados'); 
    }
}
