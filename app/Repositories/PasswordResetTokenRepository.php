<?php

namespace App\Repositories;

use App\Models\PasswordResetToken;

class PasswordResetTokenRepository extends BaseRepository
{
    public function __construct(PasswordResetToken $passwordResetToken)
    {
        parent::__construct($passwordResetToken);
    }

    public function insert($data)
    {
        return $this->model->insert($data);
    }

    public function getByToken($token)
    {
        return $this->model->where('token', $token)->first();
    }

    public function delete($email)
    {
        $this->model->where('email', $email)->delete();
    }
}
