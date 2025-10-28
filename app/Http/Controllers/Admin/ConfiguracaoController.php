<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracoe;
use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    public function index()
    {
        $Configuracoe = Configuracoe::first();
        return view('admin.configuracao.index', compact('Configuracoe'));
    }

    public function update(Request $request)
    {
        $config = Configuracoe::first();

        $config->update($request->only([
            'orgName' => $request->orgName,
            'orgEmail' => $request->orgEmail,
            'orgPhone' => $request->orgPhone,
            'orgAddress' => $request->orgAddress,
            'socialFacebook' => $request->socialFacebook ?: null,
            'socialInstagram' => $request->socialInstagram ?: null,
            'socialTwitter' => $request->socialTwitter ?: null,
            'socialWhatsapp' => $request->socialWhatsapp ?: null,
        ]));


        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $requestLogo = $request->file('logo');
            $extension = $requestLogo->extension();
            $logoName = md5($requestLogo->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestLogo->move(public_path('logos'), $logoName);
            $config->logo = $logoName;
            $config->save();
        }

        return redirect()->route('configuracao')->with('success', 'Configurações atualizadas com sucesso!');
    }
}
