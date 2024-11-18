<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function signin(LoginRequest $request)
    {
        try {
            $loginSuccessful = $this->authService->signin($request);

            if ($loginSuccessful) {
                return response()->json([
                    'alert' => 'success',
                    'message' => __('client.login_success')
                ], 200);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => __('auth.failed')
                ], 401);
            }
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return response()->json([
                'alert' => 'success',
                'message' => __('auth.logout_success')
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
