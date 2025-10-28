<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function index()
    {
        $pendentes = Formulario::with('animal')
            ->where('status', 'Pendente')
            ->orderBy('created_at', 'desc')
            ->get();

        $aprovados = Formulario::with('animal')
            ->where('status', 'Aprovado')
            ->orderBy('created_at', 'desc')
            ->get();

        $rejeitados = Formulario::with('animal')
            ->where('status', 'Rejeitado')
            ->orderBy('created_at', 'desc')
            ->get();

        $formularioselecionado = $pendentes->first();

        return view('Admin.Formularios.index', compact('pendentes', 'aprovados', 'rejeitados', 'formularioselecionado'));
    }

    public function show($id)
    {
        $pendentes = Formulario::with('animal')
            ->where('status', 'Pendente')
            ->orderBy('created_at', 'desc')
            ->get();

        $aprovados = Formulario::with('animal')
            ->where('status', 'Aprovado')
            ->orderBy('created_at', 'desc')
            ->get();

        $rejeitados = Formulario::with('animal')
            ->where('status', 'Rejeitado')
            ->orderBy('created_at', 'desc')
            ->get();

        $formularioselecionado = Formulario::with('animal')->findOrFail($id);

        return view('Admin.Formularios.index', compact('pendentes', 'aprovados', 'rejeitados', 'formularioselecionado'));
    }

    public function update(Request $request, $id)
    {
        $formulario = Formulario::findOrFail($id);
        $formulario->status = $request->status;
        $formulario->save();

        return redirect()->route('formularios')
            ->with('success', 'Status atualizado com sucesso!');
    }
}
