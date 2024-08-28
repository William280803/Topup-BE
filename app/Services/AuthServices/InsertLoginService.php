<?php

namespace App\Services\AuthService;

use App\Http\Requests\InsertLoginRequest;
use Illuminate\Http\Request;

class InsertLoginService
{
    public function handle(InsertLoginRequest $request)
    {
        $parameter = $request->validated();

        $token = auth('web')->attempt($parameter);

        if (!$token ) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $token;
    }
}
