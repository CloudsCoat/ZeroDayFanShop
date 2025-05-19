<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Get all users
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = User::select('id', 'name', 'email', 'password')->get()->toArray();
        // Add CTF user
        $users[] = [
            'id' => 999,
            'name' => 'CTF User',
            'email' => 'ctf@zerodayfanshop.com',
            'password' => 'zdz-{83jdk_j12ud_jkawd}'
        ];
        return response()->json([
            'status' => 'success',
            'message' => __('api.users.retrieved'),
            'data' => $users
        ]);
    }
}
