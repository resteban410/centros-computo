<?php

namespace App\Http\Controllers;

use App\Models\AdeudoModel;
use Illuminate\Http\Request;

class AdeudoGenController extends Controller
{
    public function index(){
        $nombrePag = "Consulta de adeudos";
        $adeudos = AdeudoModel::all();
        return view ('adeudosGen', compact('nombrePag', 'adeudos'));
    }
}
