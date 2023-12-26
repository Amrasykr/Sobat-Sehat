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
    
        // Cek apakah user terautentikasi
        if (Auth::attempt($input)) {
            $user = $request->user();
            $role = $user->role;
            $validation = $user->validation;
    
            // Jika rolenya kontributor
            if ($role === 'kontributor') {
                if ($validation === 'pending') {
                    return $this->responseUnauthorized('Registration status is still pending, please wait.');
                } elseif ($validation === 'ditolak') {
                    return $this->responseUnauthorized('Registration status is blocked.');
                } elseif ($validation === 'diterima') {
                    // Jika status diterima, izinkan login
                    $token = $user->createToken('my_token');
                    $data = [
                        'token' => $token->plainTextToken
                    ];        
    
                    return $this->responseSuccess($data, 'User logged in successfully.', 200);
                }
            } elseif ($role === 'admin') {
                // Jika rolenya admin, izinkan login
                $token = $user->createToken('my_token');
                $data = [
                    'token' => $token->plainTextToken
                ];        
    
                return $this->responseSuccess($data, 'User logged in successfully.', 200);
            }
    
            // Default: Tidak ada izin
            return $this->responseUnauthorized('Login failed.');
        } else {
            return $this->responseUnauthorized('Login failed.');
        }
    }
    
    
}
