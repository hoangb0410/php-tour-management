<?php

namespace App\Repositories;

use App\Models\PasswordResetToken;

class PasswordResetTokenRepository
{
    protected $passwordResetToken;
    public function __construct(PasswordResetToken $passwordResetToken)
    {
        $this->passwordResetToken = $passwordResetToken;
    }

    public function insert($data)
    {
        return $this->passwordResetToken->insert($data);
    }

    public function getByToken($token)
    {
        return $this->passwordResetToken->where('token', $token)->first();
    }

    public function delete($email)
    {
        $this->passwordResetToken->where('email', $email)->delete();
    }
}
