<?php

namespace App\Services;

use App\Helpers\Common;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($request)
    {
        $data = [
            'first_name' => Common::clearXss($request->first_name),
            'last_name' => Common::clearXss($request->last_name),
            'email' => Common::clearXss($request->email),
            'password' => Common::clearXss($request->password),
        ];

        $data['password'] = Hash::make($data['password']);
        $this->userRepository->create($data);
    }

    public function signin($request)
    {
        $data = [
            'email' => Common::clearXSS($request->email),
            'password' => Common::clearXSS($request->password)
        ];

        if (Auth::attempt($data)) {
            return true;
        } else {
            return false;
        }
    }
}
