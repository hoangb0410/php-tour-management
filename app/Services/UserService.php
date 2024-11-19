<?php

namespace App\Services;

use App\Helpers\Common;
use App\Repositories\UserRepository;
use Yajra\DataTables\Facades\DataTables;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAjaxUser()
    {
        $userData = $this->userRepository->get();
        return DataTables::of($userData)
            ->addIndexColumn()
            ->addColumn('first_name', function ($userData) {
                return $userData->first_name;
            })
            ->addColumn('last_name', function ($userData) {
                return $userData->last_name;
            })
            ->addColumn('email', function ($userData) {
                return $userData->email;
            })
            ->addColumn('action', function ($userData) {
                return view('admin.elements.action-buttons')->with([
                    'url_edit' => route('user.view-edit', ['id' => $userData->id]),
                    'url_destroy' => route('user.delete', ['id' => $userData->id])
                ]);
            })->make(true);
    }

    public function viewEditUser($id)
    {
        return $this->userRepository->getById($id);
    }

    public function storeUser($request)
    {
        $data = [
            'first_name' => Common::clearXss($request->first_name),
            'last_name' => Common::clearXss($request->last_name),
            'email' => Common::clearXss($request->email),
            'password' => bcrypt($request->password)
        ];

        $existingUser = $this->userRepository->getByEmail($data['email']);
        if ($existingUser && $existingUser->id != $request->id) {
            throw new \Exception('Email already exists.');
        }

        $this->userRepository->updateOrCreate(
            ['id' => $request->id],
            $data
        );
    }

    public function deleteUser($id)
    {
        $this->userRepository->delete($id);
    }
}
