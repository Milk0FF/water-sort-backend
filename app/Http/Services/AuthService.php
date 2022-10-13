<?php

namespace App\Http\Services;

use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use Illuminate\Http\Request;

class AuthService extends Service
{
    public function login(Request $request)
    {
        return $this->success('super');
    }

    public function register(RegisterRequest $request)
    {
        return $this->success('super');
    }


    public function resetPassword(ResetPasswordRequest $request)
    {
        return $this->success('super');
    }


}
