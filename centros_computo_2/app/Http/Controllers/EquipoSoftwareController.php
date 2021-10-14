<?php

namespace App\Http\Controllers;
use App\Models\EquipoSoftwareModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipoSoftwareController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'equipo_no_serie' => 'required',
            'software_clave' => 'required'
        ]);

        $equiSoft = new EquipoSoftwareModel(); 
        
        $equiSoft->equipo_no_serie = $request->equipo_no_serie;
        $equiSoft->software_clave= $request->software_clave;
        
        $equiSoft->save(); 
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){

        request()->validate([
            'equipo_no_serie' => 'required',
            'software_clave' => 'required'
        ]);

        $clave = $request->clave;

        $equiSoft = DB::table('equipo_software')->where('clave', $clave)->update(
            ['equipo_no_serie' => $request->equipo_no_serie,
            'software_clave' => $request->software_clave]
        );
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
   
        $equiSoft = DB::table('equipo_software')->where('clave', $clave)->delete();
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos eliminados'); 
    }
}
