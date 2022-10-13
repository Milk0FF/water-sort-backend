<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login(Request $request)
    {
        $this->authService->login($request);
    }

    public function register(RegisterRequest $request)
    {
        $this->authService->register($request);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $this->authService->resetPassword($request);
    }
}
