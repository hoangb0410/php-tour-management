<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request)
    {
        try {
            $this->authService->register($request);
            return response()->json([
                'alert' => 'success',
                'message' => __('client.register_success')
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function login() {}
}
