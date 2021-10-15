<?php

namespace App\Http\Controllers;
use App\Models\MarcaModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    public function index(){
        $nombrePag = "Marcas";
        $marcas = MarcaModel::all();

        return view('admin.marcas', compact('nombrePag', 'marcas'));
    }

    public function store(Request $request){
        request()->validate([
            'nombre' => 'required'
        ]);

        $marcas = new MarcaModel();
        $marcas->nombre = $request->nombre;
        $marcas->save();
        return redirect()->route('marcaP');
        //return redirect('/marcas')->with('Exitoso', 'Datos guardados');
    }

    public function edit(Request $request){
        request()->validate([
            'nombre' => 'required'
        ]);

        $id_marca = $request->id_marca;

        $marcas = DB::table('marca')->where('id_marca', $id_marca)->update([
            'nombre' => $request->nombre
        ]);
        return redirect()->route('marcaP');
        //return redirect('/marcas')->with('Exitoso', 'Datos actualizados');
    }

    public function destroy(Request $request){
        request()->validate([
            'id_marca' => 'required'
        ]);

        $id_marca = $request->id_marca;

        $periodos = DB::table('marca')->where('id_marca', $id_marca)->delete();
        return redirect()->route('marcaP');
        //return redirect('/marcas')->with('Exitoso', 'Datos eliminados'); 
    }
}
