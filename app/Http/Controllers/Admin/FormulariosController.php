<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function index()
    {
        return view('Admin.Formularios.index');
    }
}
