<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Contato;
use App\Models\Formulario;
use Illuminate\Http\Request;
use Carbon\Carbon;

class dashboardController extends Controller
{
    public function index()
    {
        $animais = Animal::Paginate(7);

        $mesagemhoje = Contato::whereDate('created_at', Carbon::today())->count();

        $pendentes = Formulario::with('animal')
            ->where('status', 'Pendente')
            ->orderBy('created_at', 'desc')
            ->get();

        $formularioselecionado = $pendentes->first();

        $mensagens = Contato::orderBy('created_at', 'desc')->get();
        $formulariopendetes = Formulario::where('status', 'Pendente')->count();
        $animaldisponivel = Animal::where('status', 'disponivel')->count();

        $mensagemSelecionada = $mensagens->first();

        return view('Admin.Dashboard.index', compact(
            'animais', 
            'pendentes', 
            'formularioselecionado', 
            'mensagens', 
            'mensagemSelecionada', 
            'mesagemhoje',
            'formulariopendetes',
            'animaldisponivel'
        ));
    }

    public function formularioshow($id)
    {
        $animais = Animal::paginate(7);

        $pendentes = Formulario::with('animal')
            ->where('status', 'Pendente')
            ->orderBy('created_at', 'desc')
            ->get();

        $formularioselecionado = Formulario::with('animal')->findOrFail($id);

        return view('Admin.Dashboard.index', compact('animais', 'pendentes', 'formularioselecionado'));
    }


    public function contatoshow($id)
    {
        $animais = Animal::paginate(7);

        $pendentes = Formulario::with('animal')
            ->where('status', 'Pendente')
            ->orderBy('created_at', 'desc')
            ->get();

        $formularioselecionado = $pendentes->first();

        $mensagens = Contato::orderBy('created_at', 'desc')->get();
        $mensagemSelecionada = Contato::findOrFail($id);

        return view('Admin.Dashboard.index', compact(
            'animais',
            'pendentes',
            'formularioselecionado',
            'mensagens',
            'mensagemSelecionada'
        ));
    }



    public function animalcreate()
    {
        return view('Admin.Dashboard.animalCrete');
    }

    public function animalStore(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'especie' => 'required|string|in:cao,gato,coelho,passaro,outro',
            'raca' => 'nullable|string',
            'idade' => 'required|string',
            'peso' => 'nullable|numeric',
            'genero' => 'required|string|in:macho,femea',
            'porte' => 'nullable|string|in:pequeno,medio,grande',
            'cor' => 'nullable|string',
            'vacinado' => 'required|string|in:sim,parcial,nao',
            'castrado' => 'required|string|in:sim,nao',
            'vermifugado' => 'nullable|string|in:sim,nao',
            'microchip' => 'nullable|string|in:sim,nao',
            'observacoes_saude' => 'nullable|string',
            'imagem' => 'nullable|image|max:2048',
            'historia' => 'nullable|string',
            'descricao' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'status' => 'required|string|in:disponivel,processo-adoção,adotado',
        ]);

        $animal   = new Animal;

        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->raca = $request->raca;
        $animal->idade = $request->idade;
        $animal->peso = $request->peso;
        $animal->genero = $request->genero;
        $animal->porte = $request->porte;
        $animal->cor = $request->cor;
        $animal->vacinado = $request->vacinado;
        $animal->castrado = $request->castrado;
        $animal->vermifugado = $request->vermifugado;
        $animal->microchip = $request->microchip;
        $animal->observacoes_saude = $request->observacoes_saude;
        $animal->historia = $request->historia;
        $animal->descricao = $request->descricao;
        $animal->observacoes = $request->observacoes;
        $animal->status = $request->status;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->file('imagem');
            $extension = $requestImagem->extension();
            $imageName = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('Imagem_animal'), $imageName);
            $animal->imagem = $imageName;
        }

        $animal->save();

        return redirect()->route('dashboard')->with('success', 'Animal criado com sucesso!');
    }

    public function animalEditar($id)
    {
        $animal = Animal::find($id);

        return view('Admin.Dashboard.animaledit', ['animal' => $animal]);
    }

    public function animalupdate(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'especie' => 'required|string|in:cao,gato,coelho,passaro,outro',
            'raca' => 'nullable|string',
            'idade' => 'required|string',
            'peso' => 'nullable|numeric',
            'genero' => 'required|string|in:macho,femea',
            'porte' => 'nullable|string|in:pequeno,medio,grande',
            'cor' => 'nullable|string',
            'vacinado' => 'required|string|in:sim,parcial,nao',
            'castrado' => 'required|string|in:sim,nao',
            'vermifugado' => 'nullable|string|in:sim,nao',
            'microchip' => 'nullable|string|in:sim,nao',
            'observacoes_saude' => 'nullable|string',
            'imagem' => 'nullable|image|max:2048',
            'historia' => 'nullable|string',
            'descricao' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'status' => 'required|string|in:disponivel,processo-adoção,adotado',
        ]);

        $animal = Animal::find($request->id);

        $animal->nome = $request->nome;
        $animal->especie = $request->especie;
        $animal->raca = $request->raca;
        $animal->idade = $request->idade;
        $animal->peso = $request->peso;
        $animal->genero = $request->genero;
        $animal->porte = $request->porte;
        $animal->cor = $request->cor;
        $animal->vacinado = $request->vacinado;
        $animal->castrado = $request->castrado;
        $animal->vermifugado = $request->vermifugado;
        $animal->microchip = $request->microchip;
        $animal->observacoes_saude = $request->observacoes_saude;
        $animal->historia = $request->historia;
        $animal->descricao = $request->descricao;
        $animal->observacoes = $request->observacoes;
        $animal->status = $request->status;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImagem = $request->file('imagem');
            $extension = $requestImagem->extension();
            $imageName = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImagem->move(public_path('Imagem_animal'), $imageName);
            $animal->imagem = $imageName;
        }

        $animal->save();

        return redirect()->route('dashboard')->with('success', 'Animal editado com sucesso!');
    }

    public function animalDelete($id)
    {
        $animais = Animal::find($id);

        if (!$animais) {
            return redirect()->route('dashboard')->with('error', 'Animal não encontrado!');
        }

        $animais->delete();

        return redirect()->route('dashboard')->with('success', 'Animal deletado com sucesso!');
    }

    public function contato() {}
}
