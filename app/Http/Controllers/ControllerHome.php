<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Configuracoe;
use App\Models\Duvida;
use App\Models\Formulario;
use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index()
    {
        $duvidas = Duvida::get();
        $animais = Animal::orderBy('nome', 'desc')->paginate(10);
        $configuracoes = Configuracoe::get();
        return view('inicio.inicio', compact('duvidas', 'animais', 'configuracoes'));
    }

    public function adocao()
    {
        $animais = Animal::orderBy('nome', 'desc')->where('status', 'disponivel')->get();
        return view('inicio.adocao', compact('animais'));
    }

    public function formularioadocao($id)
    {
        $animais = Animal::find($id);

        return view('inicio.formulario', compact('animais'));
    }

    public function formulariocrete(Request $request)
    {
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

        if ($request->hasFile('rgPhoto') && $request->file('rgPhoto')->isValid()) {
            $file = $request->file('rgPhoto');
            $imageName = md5($file->getClientOriginalName() . time()) . '.' . $file->extension();
            $file->move(public_path('Imagens_formulario'), $imageName);
            $formulario->rgPhoto = $imageName;
        }

        if ($request->hasFile('incomeProof') && $request->file('incomeProof')->isValid()) {
            $file = $request->file('incomeProof');
            $imageName = md5($file->getClientOriginalName() . time()) . '.' . $file->extension();
            $file->move(public_path('Imagens_formulario'), $imageName);
            $formulario->incomeProof = $imageName;
        }

        if ($request->hasFile('locationPhoto') && $request->file('locationPhoto')->isValid()) {
            $file = $request->file('locationPhoto');
            $imageName = md5($file->getClientOriginalName() . time()) . '.' . $file->extension();
            $file->move(public_path('Imagens_formulario'), $imageName);
            $formulario->locationPhoto = $imageName;
        }

        if ($request->hasFile('otherPetsPhotos')) {
            $photoNames = [];
            foreach ($request->file('otherPetsPhotos') as $file) {
                if ($file->isValid()) {
                    $imageName = md5($file->getClientOriginalName() . time()) . '.' . $file->extension();
                    $file->move(public_path('Imagens_outros_animais'), $imageName);
                    $photoNames[] = $imageName;
                }
            }
            $formulario->otherPetsPhotos = json_encode($photoNames);
        }

        $formulario->fencePhoto = null;

        if ($request->hasFile('fencePhoto')) {
            $fenceNames = [];
            foreach ($request->file('fencePhoto') as $file) {
                if ($file->isValid()) {
                    $imageName = md5($file->getClientOriginalName() . time()) . '.' . $file->extension();
                    $file->move(public_path('Imagens_cercas'), $imageName);
                    $fenceNames[] = $imageName;
                }
            }
            $formulario->fencePhoto = json_encode($fenceNames);
        }

        $formulario->save();

        return redirect()->route('adocao')->with('success', 'Formulário enviado com sucesso!');
    }
}
