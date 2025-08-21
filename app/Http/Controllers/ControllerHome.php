<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index(){
        return view('inicio');
    }

    public function adocao() {
        return view('adocao');
    }
}
