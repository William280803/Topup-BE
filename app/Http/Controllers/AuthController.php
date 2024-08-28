<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertLoginRequest;
use App\Http\Requests\InsertRegisterRequest;
use App\Services\AuthService\InsertLoginService;
use App\Services\AuthService\InsertRegisterService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Handle Login
     * @param InsertLoginService $service
     * @param InsertLoginRequest $request
     */
    public function InsertLogin(InsertLoginService $service, InsertLoginRequest $request)
    {
        $service->handle($request);
    }

    /**
     * Handle Register
     * @param InsertRegisterService $service
     * @param InsertRegisterRequest $request
     */
    public function InsertRegister(InsertRegisterService $service, InsertRegisterRequest $request)
    {
        $service->handle($request);
    }
}
