<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return $this->responseSuccess($user, 'User successfully registered.', 201);
        } else {
            return $this->responseError('Registration failed.');
        }
    }

    public function login(Request $request)
    {
        $input = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($input)) {
            $token = $request->user()->createToken('my_token');

            $data = [
                'token' => $token->plainTextToken
            ];        

            return $this->responseSuccess($data, 'User logged in successfully.', 200);
        } else {
            return $this->responseUnauthorized('Login failed.');
        }
    }
}
