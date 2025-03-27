<?php

namespace App\Services;

use App\Models\User;
use Exception;

class AuthService {

    public function auth(array $dados): array
    {
        try {
            $user = User::where('username', $dados['username'])->first();
            if(!$user) {
                return $this->createResponse(false, 'Usuário ou senha incorreta');
            } 

            if(!password_verify($dados['password'], $user->password)) {
            return $this->createResponse(false, 'Usuário ou senha incorreta');
            }
            
            return $this->createResponse(true, 'Login realizado', $user->id);
        } catch(Exception $e) {
            error_log($e->getMessage());
            return $this->createResponse(false, 'Não foi possível realizar o login. Contate o administrador!');
        }
    }


    private function createResponse(bool $status, String $message, $data = null): array
    {
        return [
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ];
    }
}