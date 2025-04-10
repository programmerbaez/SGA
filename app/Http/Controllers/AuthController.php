<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Registro de usuario
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'document_type' => 'required|string',
            'document_number' => 'required|unique:users,document_number',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    // Login de usuario
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'document_number' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('document_number', $request->document_number)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['message' => 'Credenciales inválidas']);
    }

    // Logout de usuario
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
