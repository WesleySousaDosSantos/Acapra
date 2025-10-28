<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class AuthController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }

    public function loginUpdate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email ou senha inválidos.'
        ])->withInput();
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function reset()
    {
        return view('Admin.Auth.forgot');
    }

public function sendResetLink(Request $request)
{
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        return redirect()->route('login')->with('status', 'Link de redefinição de senha enviado para seu e-mail!');
    }

    return back()->withErrors(['email' => __($status)]);
}


    public function showNewPasswordForm($token)
    {
        return view('Admin.Auth.reset', ['token' => $token]);
    }

    public function updatePassoword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function usuario()
    {
        $usuarios = User::all()->map(function ($user) {
            $user->data_cadastro = Carbon::parse($user->created_at)->format('d/m/Y');
            return $user;
        });

        return view('Admin.Usuario.index', compact('usuarios'));
    }

    public function usuarioStore(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:120',
            'email' => 'required|email|unique:usuarios,email',
            'phone' => 'required|string',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->data_criacao = now();

        $user->save();

        return redirect()->route('usuario')->with('success', 'Usuário criado com sucesso!');
    }


    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return response()->json($usuario);
    }


    public function usuarioDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usuario')->with('success', 'Usuário excluído com sucesso!');
    }
}
