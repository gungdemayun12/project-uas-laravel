@extends('admin.layout')

@section('title', 'Edit Profil Customer')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <div class="mb-8">
        <a href="{{ route('dashboard.member.index') }}" 
           class="group inline-flex items-center gap-2 text-[#4A3428]/60 hover:text-[#4A3428] font-bold text-xs uppercase tracking-widest transition-all">
            <div class="p-2 rounded-full bg-white shadow-sm group-hover:shadow-md transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            Kembali ke Daftar
        </a>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-black/[0.03] border border-white p-10 relative overflow-hidden">
        <div class="relative z-10">
            <div class="mb-10">
                <h2 class="text-3xl font-black text-[#4A3428] tracking-tighter uppercase text-center">Edit Profil Member</h2>
                <div class="w-16 h-1 bg-[#D9B382] mx-auto mt-4 rounded-full"></div>
                <p class="text-[#4A3428]/40 text-[10px] font-black tracking-[0.3em] uppercase mt-4 italic text-center">Username: {{ $member->username }}</p>
            </div>

            <form action="{{ route('dashboard.member.update', $member->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-[10px] font-black text-[#4A3428]/60 uppercase tracking-widest ml-1 mb-2">Username</label>
                        <input type="text" name="username" value="{{ $member->username }}" required
                               class="w-full bg-[#F8F5F2] border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold shadow-inner">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black text-[#4A3428]/60 uppercase tracking-widest ml-1 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ $member->email }}" required
                               class="w-full bg-[#F8F5F2] border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold shadow-inner">
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-black text-[#4A3428]/60 uppercase tracking-widest ml-1 mb-2">Nomor WhatsApp/HP</label>
                    <input type="text" name="no_hp" value="{{ $member->no_hp }}"
                           class="w-full bg-[#F8F5F2] border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold shadow-inner">
                </div>

                <div>
                    <label class="block text-[10px] font-black text-[#4A3428]/60 uppercase tracking-widest ml-1 mb-2">Alamat Domisili</label>
                    <textarea name="alamat" rows="3"
                              class="w-full bg-[#F8F5F2] border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold shadow-inner resize-none">{{ $member->alamat }}</textarea>
                </div>

                <div class="pt-6">
                    <button type="submit"
                            class="w-full bg-[#D9B382] text-[#4A3428] font-black text-xs tracking-[0.3em] uppercase py-5 rounded-2xl shadow-xl shadow-[#D9B382]/20 hover:bg-[#c4a175] transform hover:-translate-y-1 transition-all">
                        Simpan Perubahan Profil
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection