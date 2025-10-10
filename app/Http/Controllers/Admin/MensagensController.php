<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class MensagensController extends Controller
{

    public function index()
    {
        $mensagens = Contato::orderBy('created_at', 'desc')->get();
        $mensagemSelecionada = $mensagens->first();
        return view('Admin.Mensagens.index', compact('mensagens', 'mensagemSelecionada'));
    }

    public function show($id)
    {
        $mensagens = Contato::orderBy('created_at', 'desc')->get();
        $mensagemSelecionada = Contato::findOrFail($id);
        return view('Admin.Mensagens.index', compact('mensagens', 'mensagemSelecionada'));
    }

    public function create(Request $request)
    {
        $contato = new Contato();

        $contato->name = $request->name;
        $contato->email = $request->email;
        $contato->phone = $request->phone;
        $contato->subject = $request->subject;
        $contato->message = $request->message;

        $contato->save();

        return redirect()->route('index', 'Mensagem enviada com sucesso!');
    }

    public function delete($id)
    {
        $mensagem = Contato::find($id);

        if (!$mensagem) {
            return redirect()->route('mensagens', 'Mensagem não encontrada');
        }

        $mensagem->delete();

        return redirect()->route('mensagens', 'mensagem deletada com sucesso');
    }
}
