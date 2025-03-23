<?php

namespace App\Services;

use App\Models\User;
use Exception;
use GuzzleHttp\Psr7\Request;

class AuthService {

    public function auth(array $dados): array
    {
        try {
            $user = User::where('username', $dados['username'])->first();
            error_log(json_encode($user));
            if(!$user) {
                return [
                    'status' => false,
                    'msg' => 'Usuário ou senha incorreta',
                    'data' => null
                ];
            } 

            if(!password_verify($dados['password'], $user->password)) {
                return [
                    'status' => false,
                    'msg' => 'Usuário ou senha incorreta',
                    'data' => null
                ];
            }

            return [
                'status' => true,
                'msg' => 'Login realizado',
                'data' => $user
            ];
        } catch(Exception $e) {
            error_log($e->getMessage());
            return [
                'status' => false,
                'msg' => 'Não foi possível realizar o login. Contate o administrador!',
                'data' => null
            ];
        }
    }
}