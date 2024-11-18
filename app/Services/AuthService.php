<?php

namespace App\Services;

use App\Helpers\Common;
use App\Jobs\SendResetLinkEmail;
use App\Jobs\SendResetLinkEmailJob;
use App\Repositories\PasswordResetTokenRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthService
{
    protected $userRepository;
    protected $passwordResetTokenRepository;

    public function __construct(UserRepository $userRepository, PasswordResetTokenRepository $passwordResetTokenRepository)
    {
        $this->userRepository = $userRepository;
        $this->passwordResetTokenRepository = $passwordResetTokenRepository;
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

    public function sendResetLink($request)
    {

        $email = $request->email;

        $token = Str::random(60);

        $this->passwordResetTokenRepository->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => now()
        ]);
        SendResetLinkEmailJob::dispatch($email, $token);
    }

    public function resetPassword($request)
    {
        $passwordReset = $this->passwordResetTokenRepository->getByToken($request->token);

        $user = $this->userRepository->getByEmail($passwordReset->email);
        $user->password = Hash::make($request->password);
        $user->save();

        $this->passwordResetTokenRepository->delete($passwordReset->email);
    }
}
