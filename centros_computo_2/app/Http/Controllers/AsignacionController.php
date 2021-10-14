<?php

namespace App\Http\Controllers;

use App\Models\PeriodoModel;
use App\Models\LaboratorioModel;
use App\Models\AsignacionModel;
use App\Models\UsuarioModel;
use App\Models\UsuHoraModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
    public function index(){
    	$periodos = PeriodoModel::all();
    	$laboratorios = LaboratorioModel::all();
    	$asignaciones = AsignacionModel::all();
    	$usuarios = UsuarioModel::all();
    	$usoHora = UsuHoraModel::all();

    	$nombrePag = "Asignación";

    	return view('admin.asignaciones', compact('periodos', 'laboratorios', 'asignaciones', 'usuarios','usoHora','nombrePag'));
   }

	public function store(Request $request){
		request()->validate([
			'dia' => 'required',
			'hora_inicio' => 'required',
			'hora_termino' => 'required',
			'laboratorio_lab_clave' => 'required',
			'periodo_id_periodo' => 'required',
			'id_usuario' => 'required'
		]);
	
		$asignaciones = new AsignacionModel();
		$usuHora = new UsuHoraModel();

		$asignaciones->dia = $request->dia;
		$asignaciones->hora_inicio = $request->hora_inicio;
		$asignaciones->hora_termino = $request->hora_termino;
		$asignaciones->laboratorio_lab_clave = $request->laboratorio_lab_clave;
		$asignaciones->periodo_id_periodo = $request->periodo_id_periodo;
		$asignaciones->save();

		$usuHora->id_usuario = $request->id_usuario;
		$usuHora->id_asignación = $asignaciones->num_asignacion;

		$usuHora->save();
		return redirect()->route('asignacionP');
		//return redirect('/asignaciones')->with('Exitoso', 'Datos guardados');
	}

	public function edit(Request $request){
		request()->validate([
			'fecha' => 'required',
			'hora_inicio' => 'required',
			'hora_termino' => 'required',
			'laboratorio_lab_clave' => 'required',
			'periodo_id_periodo' => 'required',
			'id_usuario' => 'required'
		]);

		$num_asignacion = $request->num_asignacion;
		

		$asignaciones = DB::table('asignacion')->where('num_asignacion', $num_asignacion)->update(
			['fecha' => $request->fecha,
			'hora_inicio' => $request->hora_inicio,
			'hora_termino' => $request->hora_termino,
			'laboratorio_lab_clave' => $request->laboratorio_lab_clave,
			'periodo_id_periodo' => $request->periodo_id_periodo]
		);

		$usuHora = DB::table('usuario_asignacion')->where('id_asignacion', $num_asignacion)->update([
			'id_usuario' =>$request->id_usuario
		]);

		return redirect()->route('asignacionP');
		//return redirect('/asignaciones')->with('Exitoso', 'Datos actualizados');
	}


	public function destroy(Request $request){

		request()->validate([
			'num_asignacion' => 'required'
		]);

		$num_asignacion = $request->num_asignacion;

		$asignaciones = DB::table('asignacion')->where('num_asignacion', $num_asignacion)->delete();
		$usuHora = DB::table('usuario_asignacion')->where('id_asignacion', $num_asignacion)->delete();
        return redirect()->route('asignacionP');
		//return redirect('/asignaciones')->with('Exitoso', 'Datos eliminados'); 

	}
}

