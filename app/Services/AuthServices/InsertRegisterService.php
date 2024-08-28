<?php

namespace App\Services\AuthService;

use App\Http\Requests\InsertRegisterRequest;
use App\Models\User;

class InsertRegisterService
{
    public function handle(InsertRegisterRequest $request)
    {
        $parameter = $request->validated();

        User::create($parameter);
    }
}
