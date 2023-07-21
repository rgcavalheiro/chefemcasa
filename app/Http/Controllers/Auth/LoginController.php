<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/'; // Redireciona o usuário para a página inicial após o login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Você também pode adicionar métodos personalizados aqui, se necessário
}
