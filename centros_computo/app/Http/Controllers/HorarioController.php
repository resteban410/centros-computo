<?php

namespace App\Http\Controllers;

use App\Models\PeriodoModel;
use App\Models\LaboratorioModel;
use App\Models\HorarioModel;
use App\Models\UsuarioModel;
use App\Models\UsuHoraModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    public function index(){
    	$periodos = PeriodoModel::all();
    	$laboratorios = LaboratorioModel::all();
    	$horarios = HorarioModel::all();
    	$usuarios = UsuarioModel::all();
    	$usoHora = UsuHoraModel::all();

    	$nombrePag = "Horarios";

    	return view('horarios', compact('periodos', 'laboratorios', 'horarios', 'usuarios','usoHora','nombrePag'));
   }

	public function store(Request $request){
		request()->validate([
			'fecha' => 'required',
			'hora_inicio' => 'required',
			'hora_termino' => 'required',
			'laboratorio_lab_clave' => 'required',
			'periodo_id_periodo' => 'required'
		]);
	
		$horarios = new HorarioModel();

		$horarios->fecha = $request->fecha;
		$horarios->hora_inicio = $request->hora_inicio;
		$horarios->hora_termino = $request->hora_termino;
		$horarios->laboratorio_lab_clave = $request->laboratorio_lab_clave;
		$horarios->periodo_id_periodo = $request->periodo_id_periodo;

		$horarios->save();
		return redirect('/horarios')->with('Exitoso', 'Datos guardados');
	}

	public function edit(Request $request){
		request()->validate([
			'fecha' => 'required',
			'hora_inicio' => 'required',
			'hora_termino' => 'required',
			'laboratorio_lab_clave' => 'required',
			'periodo_id_periodo' => 'required'
		]);

		$num_horario = $request->num_horario;

		$horarios = DB::table('horario')->where('num_horario', $num_horario)->update(
			['fecha' => $request->fecha,
			'hora_inicio' => $request->hora_inicio,
			'hora_termino' => $request->hora_termino,
			'laboratorio_lab_clave' => $request->laboratorio_lab_clave,
			'periodo_id_periodo' => $request->periodo_id_periodo]
		);

		return redirect('/horarios')->with('Exitoso', 'Datos actualizados');
	}


	public function destroy(Request $request){

		request()->validate([
			'num_horario' => 'required'
		]);

		$num_horario = $request->num_horario;

		$horarios = DB::table('horario')->where('num_horario', $num_horario)->delete();

        return redirect('/horarios')->with('Exitoso', 'Datos eliminados'); 

	}
}

