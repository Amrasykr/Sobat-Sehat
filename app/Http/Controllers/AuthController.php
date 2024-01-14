<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function indexRegister(){
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('index.login');
        } else {
            return redirect()->route('index.register');
        }
    }

    public function indexLogin(){
        return view('login');
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
                    return redirect()->route('index.login')->with('warning', 'Registration status is still pending, please wait.');
                } elseif ($validation === 'ditolak') {
                    return redirect()->route('index.login')->with('error', 'Registration status is blocked.');
                } elseif ($validation === 'diterima') {
                    // Jika status diterima, izinkan login
                    $token = $user->createToken('my_token');
                    $data = [
                        'token' => $token->plainTextToken
                    ];
                    // Ubah ini jika ingin mengarahkan ke rute lain setelah login berhasil
                    return redirect()->route('admin.activities')->with('success', 'User logged in successfully.');
                }
            } elseif ($role === 'admin') {
                // Jika rolenya admin, izinkan login
                $token = $user->createToken('my_token');
                $data = [
                    'token' => $token->plainTextToken
                ];
                // Ubah ini jika ingin mengarahkan ke rute lain setelah login berhasil
                return redirect()->route('admin.activities')->with('success', 'User logged in successfully.');
            }
    
            // Default: Tidak ada izin
            return redirect()->route('index.login')->with('error', 'Login failed.');
        } else {
            return redirect()->route('index.login')->with('error', 'Login failed.');
        }
    }
    
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage')->with('success', 'You have been logged out.');
    }
}
