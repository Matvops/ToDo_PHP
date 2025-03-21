<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    private AuthService $service;

    function __construct()
    {
        $service = new AuthService;
    }

    public function login(): View
    {
        return view('login');
    }

    public function authLogin(Request $request): void
    {
        $request->validate(
            [
                'username' => 'required|min:4|max:12',
                'password' => 'required|min:6|max:16',
            ],
            [
                'username.required' => 'Usuário obrigatório',
                'username.min' => 'Minimo: :min caracteres',
                'username.max' => 'Máximo: :máx caracteres',
                'password.required' => 'Senha obrigatório',
                'password.min' => 'Minimo: :min caracteres',
                'password.max' => 'Máximo: :máx caracteres',
            ]
        );

        $dadosLogin = [
            "username" => $request->input('uesrname'),
            "password" => $request->input('password'),
        ];

        $result = $this->service->auth($dadosLogin);
    }
}
