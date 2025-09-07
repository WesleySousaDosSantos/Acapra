<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function index()
    {
        // $animais = Animal::all();
            $animais = Animal::paginate(5);

        return view('Admin.Animais.index', ['animais' => $animais]);
    }

    public function criar()
    {
        return view('Admin.Animais.create');
    }

    public function animaisstore(Request $request)
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

        return redirect()->route('animais')->with('success', 'Animal criado com sucesso!');
    }
}
