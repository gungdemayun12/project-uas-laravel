<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerAuthController extends Controller 
{
    public function showLogin() {
        return view('customer.auth.login');
    }

  public function loginCustomer(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }



    public function showRegister() {
        return view('customer.auth.register');
    }


    public function register(Request $request) {
        $request->validate([
            'username' => 'required|max:255',
            'email'    => 'required|email|unique:customers,email',
            'password' => 'required|min:6|confirmed',
            'no_hp'    => 'nullable|string|max:15',
            'alamat'   => 'nullable|string',
        ]);

        DB::table('customers')->insert([
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password), 
            'no_hp'      => $request->no_hp,
            'alamat'     => $request->alamat,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('customer.login')->with('success', 'Registrasi berhasil! Silahkan login.');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/customer/login');
    }
}