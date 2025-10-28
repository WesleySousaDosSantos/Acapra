<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Duvida;
use Illuminate\Http\Request;

class DuvidasController extends Controller
{
    public function index()
    {
        $duvidas = Duvida::all();

        return view('Admin.Duvidas.index', ['duvidas' => $duvidas]);
    }

    public function criar()
    {
        return view('Admin.Duvidas.create');
    }

    public function duvidasStore(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:150',
            'descricao' => 'required|string',
        ]);

        $duvidas = new Duvida;

        $duvidas->titulo = $request->titulo;
        $duvidas->descricao = $request->descricao;

        $duvidas->save();

        return redirect()->route('duvidas')->with('success', 'Dúvida criada com sucesso!');
    }

    public function editar($id)
    {
        $duvidas  = Duvida::find($id);
        
        return view('Admin.Duvidas.edit', ['duvidas' => $duvidas]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:150',
            'descricao' => 'required|string',
        ]);

        $duvidas = Duvida::find($request->id);

        $duvidas->titulo = $request->titulo;
        $duvidas->descricao = $request->descricao;

        $duvidas->save();

        return redirect()->route('duvidas')->with('success', 'Dúvida criada com alterada com sucesso!');
    }

        public function delete($id)
    {
        $duvidas = Duvida::find($id);

        if (!$duvidas) {
            return redirect()->route('duvidas', 'Dúvida não encontrada');
        }

        $duvidas->delete();

        return redirect()->route('duvidas', 'Dúvida deletada com sucesso');
    }
}
