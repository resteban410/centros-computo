<?php

namespace App\Http\Controllers;
use App\Models\PeriodoModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    public function index(){
    	$nombrePag = "Periodos";
    	$periodos = PeriodoModel::all();

    	return view('admin.periodos', compact('nombrePag', 'periodos'));
    }

    public function store(Request $request){
    	request()->validate([
    		'nombre' => 'required',
    		'fecha_inicio' => 'required',
    		'fecha_termino' => 'required'
    	]);

    	$periodos = new PeriodoModel();

    	$periodos->nombre = $request->nombre;
    	$periodos->fecha_inicio = $request->fecha_inicio;
    	$periodos->fecha_termino = $request->fecha_termino;

    	$periodos->save();
		return redirect()->route('periodoP');
    	//return redirect('/periodos')->with('Exitoso', 'Datos guardados');
    }

    public function edit(Request $request){
    	request()->validate([
    		'nombre' => 'required',
    		'fecha_inicio' => 'required',
    		'fecha_termino' => 'required'
    	]);

    	$id_periodo = $request->id_periodo;

    	$periodos = DB::table('periodo')->where('id_periodo', $id_periodo)->update([
    		'nombre' => $request->nombre,
    		'fecha_inicio' => $request->fecha_inicio,
    		'fecha_termino' => $request->fecha_termino 
    	]);
		return redirect()->route('periodoP');
    	//return redirect('/periodos')->with('Exitoso', 'Datos actualizados'); 
    }

    public function destroy(Request $request){
    	request()->validate([
            'id_periodo' => 'required'
        ]);

        $id_periodo = $request->id_periodo;

        $periodos = DB::table('periodo')->where('id_periodo', $id_periodo)->delete();
		return redirect()->route('periodoP');
        //return redirect('/periodos')->with('Exitoso', 'Datos eliminados'); 
    }
}
