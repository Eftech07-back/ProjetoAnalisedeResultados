<?php

namespace App\Http\Controllers;
use app\Models\loginusuário;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{ public function store (Request $request)
    {
        loginusuário::create([
             'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha), 
            'data_nascimento' => $request->data_nasc,
            'cpf' => $request->cpf,
        ]);
              
        return redirect()->route('usuarios.listar')->with('sucesso', 'Cadastro feito com sucesso!');
    }
}
