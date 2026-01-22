<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerProfilController extends Controller
{

    public function index()
    {
        $customerId = Auth::guard('customer')->id();

        $customer = DB::table('customers')->where('id', $customerId)->first();

        return view('customer.profile.index', compact('customer'));
    }


    public function edit()
    {
        $customerId = Auth::guard('customer')->id();

        $customer = DB::table('customers')->where('id', $customerId)->first();

        return view('customer.profile.edit', compact('customer'));
    }


    public function memberUpdate(Request $request, $id)
    {
        

        $request->validate([
            'username' => 'required|string|max:100',
            'email'    => 'required|email',
            'no_hp'    => 'nullable|string|max:20',
            'alamat'   => 'nullable|string|max:255',
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'username'   => $request->username,
            'email'      => $request->email,
            'no_hp'      => $request->no_hp,
            'alamat'     => $request->alamat,
            'updated_at' => now(),
        ];


        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        DB::table('customers')->where('id', $id)->update($data);

        return redirect()->route('customer.profile')->with('success', 'Profil berhasil diperbarui ');
    }
}
