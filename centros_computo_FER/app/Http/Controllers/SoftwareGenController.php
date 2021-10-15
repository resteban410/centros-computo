<?php

namespace App\Http\Controllers;
use App\Models\SoftwareModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoftwareGenController extends Controller
{
    public function index(){
        $nombrePag =  "Consulta de software";
        return view('general.software',compact('nombrePag')); 
    }
}
