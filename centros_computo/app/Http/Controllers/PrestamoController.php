<?php

namespace App\Http\Controllers;

use App\Models\PrestamoModel;
use App\Models\LaboratorioModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
   public function index(){
	   	$laboratorios = LaboratorioModel::all();
	   	$prestamos = PrestamoModel::all();

	   	$nombrePag = "Préstamos";
	   	return view('admin.prestamos', compact('laboratorios', 'prestamos', 'nombrePag'));

   }

   public function show(){
	   	$data['prestamoss'] = PrestamoModel::all();
	   	return response()->json($data['prestamoss']);
   }

   public function store(Request $request){
	   	$prestamos = new PrestamoModel();

	   	request()->validate([
	   		'hora_inicio' => 'required',
	        'hora_termino' => 'required',
	        'fecha_prestamo' => 'required',
	        'tipo' => 'required',
	        'laboratorio_lab_clave' => 'required'
	   	]);


	   	$prestamos->hora_inicio = $request->hora_inicio;
	   	$prestamos->hora_termino = $request->hora_termino;
	   	$prestamos->fecha_prestamo = $request->fecha_prestamo;
	   	$prestamos->tipo = $request->tipo;
	   	$prestamos->laboratorio_lab_clave = $request->laboratorio_lab_clave;

	   	$prestamos->save();
		return redirect()->route('prestamosP');
	   	//return redirect('/prestamos')->with('Exito', 'Datos guardados');

   }

   public function edit(Request $request){
	   	request()->validate([
	   		'hora_inicio' => 'required',
	        'hora_termino' => 'required',
	        'fecha_prestamo' => 'required',
	        'tipo' => 'required',
	        'laboratorio_lab_clave' => 'required'
	   	]);


		$num_prestamo = $request->num_prestamo;

		$prestamos = DB::table('prestamo')->where('num_prestamo', $num_prestamo)->update([
			'hora_inicio' => $request->hora_inicio,
			'hora_termino' => $request->hora_termino,
			'fecha_prestamo' => $request->fecha_prestamo,
			'tipo' => $request->tipo, 
			'laboratorio_lab_clave' => $request->laboratorio_lab_clave
		]);
		return redirect()->route('prestamosP');
		//return redirect('/prestamos')->with('Exitoso', 'Datos actualizados');
   }

   public function destroy(Request $request){

   		request()->validate([
            'num_prestamo' => 'required'
        ]);

   		$num_prestamo = $request->num_prestamo;

   		$prestamos = DB::table('prestamo')->where('num_prestamo', $num_prestamo)->delete();
		return redirect()->route('prestamosP');
   		//return redirect('/prestamos')->with('Exitoso', 'Datos eliminados');

   }
}
