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
    	$usoHora = UsuHoraModel::all();
		$usuarios = DB::table('usuario')
            ->select('usuario.*')
            ->get();
		$data = DB::table('usuario_asignacion')
			->join('asignacion', 'usuario_asignacion.id_asignacion', '=', 'asignacion.num_asignacion')
			->join('usuario', 'usuario_asignacion.id_usuario', '=', 'usuario.id')
			->join('laboratorio', 'asignacion.laboratorio_lab_clave', '=', 'laboratorio.lab_clave')
			->join('periodo', 'asignacion.periodo_id_periodo', '=', 'periodo.id_periodo')
			->select('asignacion.*', 'usuario.nombre_usuario', 'laboratorio.nombre_laboratorio', 'periodo.nombre_periodo')
			->get();

    	$nombrePag = "Asignación";

    	return view('admin.asignaciones', compact('periodos', 'laboratorios', 'asignaciones', 'usuarios','usoHora','nombrePag', 'data'));
   }


	public function store(Request $request){
		request()->validate([
			'hora_inicio' => 'required',
			'hora_termino' => 'required',
			'laboratorio_lab_clave' => 'required',
			'periodo_id_periodo' => 'required',
			'id_usuario' => 'required'
		]);
		$periodos = DB::table('periodo')
				->where('periodo.id_periodo', '=', $request->periodo_id_periodo)
				->select('periodo.fecha_inicio', 'periodo.fecha_termino')
				->get();
		foreach($periodos as $periodo){
			$fecha_inicio = $periodo->fecha_inicio;
			$fecha_termino = $periodo->fecha_termino;
		}
		$days = $request->dia;
		$days = intval($days);
		$fecha = date("Y-m-d",strtotime($fecha_inicio."+" .$days ."days"));
		while ($fecha <= $fecha_termino){
			$asignaciones = new AsignacionModel();
			$asignaciones->fecha = $fecha;
			$asignaciones->hora_inicio = $request->hora_inicio;
			$asignaciones->hora_termino = $request->hora_termino;
			$asignaciones->laboratorio_lab_clave = $request->laboratorio_lab_clave;
			$asignaciones->periodo_id_periodo = $request->periodo_id_periodo;
			$asignaciones->save();
			$step = 7;
			$fecha = date("Y-m-d",strtotime($fecha."+" .$step ."days"));

            $data = new UsuHoraModel();

            $usuHora = DB::table('asignacion')
                ->orderBy('num_asignacion', 'desc')
				->limit(1)
                ->get();
            
            foreach($usuHora as $usuH){
                $data->id_asignacion = $usuH->num_asignacion;
                $data->id_usuario = $request->id_usuario;
                $data->save();
		    }
		}
		return redirect()->route('asignacionP');
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

		$usuHora = DB::table('usuario_asignacion')->where('id_asignacion', $num_asignacion)->delete();
		$asignaciones = DB::table('asignacion')->where('num_asignacion', $num_asignacion)->delete();
        return redirect()->route('asignacionP');

	}
}

