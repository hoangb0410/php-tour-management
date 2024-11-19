<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEditUserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function index()
    {
        return view('user.index');
    }

    public function listUsers()
    {
        return $this->userService->getAjaxUser();
    }

    public function viewEditUser($id)
    {
        $user = $this->userService->viewEditUser($id);
        return response()->json([
            'user' => $user
        ]);
    }

    public function storeUser(CreateEditUserRequest $request)
    {
        try {
            $this->userService->storeUser($request);
            return response()->json([
                'alert' => 'success',
                'message' => $request->id ? __('admin.update_success', ['model' => 'user']) : __('admin.create_success', ['model' => 'user'])
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function deleteUser($id)
    {
        try {
            $this->userService->deleteUser($id);

            return response()->json([
                'alert' => 'success',
                'message' => 'Delete successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
