@extends('layouts.app')

@section('title', 'Edit Profil')

@section('content')
<div class="max-w-3xl mx-auto space-y-8">
    <div>
        <h2 class="text-4xl font-black text-[#4A3428] tracking-tighter uppercase">Edit Profil</h2>
        <p class="text-[#4A3428]/50 font-bold text-xs tracking-[0.2em] uppercase mt-2 italic">
            Perbarui data akun pribadi
        </p>
    </div>

    <form action="{{ route('customer.profile.update', $customer->id) }}" method="POST"
          class="bg-white rounded-[2.5rem] p-10 shadow-xl border border-[#D9B382]/20 space-y-6">
        @csrf
        @method('PUT')

        <input type="text" name="username" value="{{ old('username', $customer->username) }}"
               placeholder="Username"
               class="w-full px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">

        <input type="email" name="email" value="{{ old('email', $customer->email) }}"
               placeholder="Email"
               class="w-full px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">

        <input type="text" name="no_hp" value="{{ old('no_hp', $customer->no_hp) }}"
               placeholder="No HP"
               class="w-full px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">

        <textarea name="alamat" placeholder="Alamat"
                  class="w-full px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">{{ old('alamat', $customer->alamat) }}</textarea>

        <div class="border-t pt-6">
            <p class="text-xs italic text-[#4A3428]/50 mb-3">
                Kosongkan password jika tidak ingin mengganti
            </p>

            <input type="password" name="password" placeholder="Password baru"
                   class="w-full mb-3 px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">

            <input type="password" name="password_confirmation" placeholder="Konfirmasi password"
                   class="w-full px-6 py-4 bg-[#F8F5F2] rounded-2xl font-bold">
        </div>

        <div class="flex justify-between pt-6">
            <a href="{{ route('customer.profile') }}"
               class="px-8 py-4 bg-gray-100 rounded-2xl font-black text-xs uppercase">
                BATAL
            </a>

            <button type="submit"
                    class="px-10 py-4 bg-[#D9B382] text-[#4A3428] rounded-2xl font-black text-xs uppercase hover:bg-[#c4a175]">
                SIMPAN
            </button>
        </div>
    </form>
</div>
@endsection
