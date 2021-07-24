<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeGenController extends Controller
{
    public function __invoke(){
        return view('/general/index'); 
    }
}
