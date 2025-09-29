<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'Username' => 'required|unique:tblUser',
            'Email' => 'required|email|unique:tblUser',
            'Password' => 'required|min:6',
        ]);

        $salt = bin2hex(random_bytes(16));
        $hashedPassword = hash('sha256', $request->Password . $salt);

        $user = User::create([
            'Username' => $request->Username,
            'Email' => $request->Email,
            'PasswordHash' => $hashedPassword,
            'PasswordSalt' => $salt,
            'Role' => 'user',
            'CreatedDate' => now(),
            'ModifiedDate' => now(),
        ]);

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user
        ]);
    }
}

