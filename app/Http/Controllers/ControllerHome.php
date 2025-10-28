<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Duvida;
use App\Models\Formulario;
use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index()
    {
        $duvidas = Duvida::get();
        $animais = Animal::orderBy('nome', 'desc')->paginate(10);
        return view('inicio.inicio', compact('duvidas', 'animais'));
    }

    public function adocao()
    {
        $animais = Animal::orderBy('nome', 'desc')->get();
        return view('inicio.adocao', compact('animais'));
    }

    public function formularioadocao($id)
    {
        $animais = Animal::find($id);

        return view('inicio.formulario', compact('animais'));
    }

    public function formulariocrete(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|integer|min:18',
            'renda' => 'required|string|max:100',
            'animal_id' => 'required|integer|exists:animals,id',
            'address' => 'required|string|max:255',
            'residential' => 'required|string|max:100',
            'property' => 'required|string|max:100',
            'petSpace' => 'required|string|max:255',
            'familyAgreement' => 'required|in:sim,nao',
            'hasOtherPets' => 'required|in:sim,nao',
            'otherPets' => 'nullable|string|max:255',
            'otherPetsVaccinated' => 'nullable|in:sim,nao',
            'agreeVaccination' => 'required|in:sim,nao',
            'aceita_termos' => 'accepted',
            'aceita_visitas' => 'accepted',
            'status' => 'nullable|string|max:50',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'Informe um e-mail válido.',
            'age.min' => 'Você precisa ter pelo menos 18 anos para adotar.',
            'aceita_termos.accepted' => 'Você deve aceitar os termos de adoção.',
        ]);
        
        dd($request->all());

        $formulario = new Formulario;

        $formulario->name = $request->name;
        $formulario->email = $request->email;
        $formulario->phone = $request->phone;
        $formulario->age = $request->age;
        $formulario->renda = $request->renda;
        $formulario->animal_id = $request->animal_id;
        $formulario->address = $request->address;
        $formulario->residential = $request->residential;
        $formulario->property = $request->property;
        $formulario->petSpace = $request->petSpace;
        $formulario->familyAgreement = $request->familyAgreement;
        $formulario->hasOtherPets = $request->hasOtherPets;
        $formulario->otherPets = $request->otherPets;
        $formulario->otherPetsVaccinated = $request->otherPetsVaccinated;
        $formulario->agreeVaccination = $request->agreeVaccination;
        $formulario->aceita_termos = $request->aceita_termos;
        $formulario->aceita_visitas = $request->aceita_visitas;
        $formulario->status = $request->status;

        $formulario->save();

        return redirect()->route('adocao')->with('success', 'Formulario enviado com sucesso');
    }
}
