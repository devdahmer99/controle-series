<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\NovoUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);

        $usuarios = User::all();
        foreach($usuarios as $usuario) {
            $email = new NovoUsuario(
                $request->name,
                $request->email,
                $request->password
            );
            $email->subject = 'Dados de Acesso';
            Mail::to($usuario)->send($email);

        }

        Auth::login($user);

        return redirect()->route('listar_series');
    }
}
