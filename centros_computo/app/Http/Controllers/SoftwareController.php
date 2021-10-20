<?php

namespace App\Http\Controllers;
use App\Models\SoftwareModel;
use App\Models\EquipoModel;
use App\Models\EquipoSoftwareModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoftwareController extends Controller
{
    public function index()
    {
        $nombrePag =  "Software - Equipo";
        $softwareS = SoftwareModel::all(); 
        $equipos = EquipoModel::all();

        $data = DB::table('equipo_software')
                ->join('equipo', 'equipo_software.equipo_no_serie', '=', 'equipo.no_serie')
                ->join('software', 'equipo_software.software_clave', '=', 'software.clave')
                ->select('equipo_software.clave', 'equipo.no_serie', 'software.nombre')
                ->get();

        $EquiSoft = EquipoSoftwareModel::all();

        return view('admin.softwares',compact('equipos','softwareS', 'data','nombrePag')); 
        
    }

    public function store(Request $request){
        request()->validate([
            'clave' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $softwareS = new SoftwareModel(); 
        
        
        $softwareS->clave = $request->clave;
        $softwareS->nombre = $request->nombre;
        $softwareS->descripcion= $request->descripcion;
        
        
        $softwareS->save();
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos guardados'); 
    }

    public function edit(Request $request){

        request()->validate([
            'clave' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $clave = $request->clave;

        $softwareS = DB::table('software')->where('clave', $clave)->update(
            ['clave' => $request->clave, 
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion]
        );
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){

        request()->validate([
            'clave' => 'required'
        ]);

        $clave = $request->clave;
        $softwareS = DB::table('software')->where('clave', $clave)->delete();
        return redirect()->route('softwareP');
        //return redirect('/software')->with('Exitoso', 'Datos eliminados'); 
    }
}
