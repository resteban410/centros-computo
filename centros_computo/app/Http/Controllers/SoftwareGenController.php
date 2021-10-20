<?php

namespace App\Http\Controllers;
use App\Models\SoftwareModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoftwareGenController extends Controller
{
    public function index(){
        $nombrePag =  "Consulta de software";

        $data = DB::table('equipo_software')
                ->join('equipo', 'equipo_software.equipo_no_serie', '=', 'equipo.no_serie')
                ->join('software', 'equipo_software.software_clave', '=', 'software.clave')
                ->join('laboratorio', 'equipo.laboratorio_clave', '=', 'laboratorio.lab_clave')
                ->select('equipo_software.*', 'equipo.no_serie', 'software.nombre', 'laboratorio.lab_clave')
                ->get();

        return view('general.software',compact('nombrePag', 'data')); 
    }
}
