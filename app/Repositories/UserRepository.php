<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function updateOrCreate($id, $data)
    {
        return $this->model->updateOrCreate(
            ['id' => $id],
            $data
        );
    }

    public function getByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }
}
