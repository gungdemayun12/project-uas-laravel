@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <div class="mb-10">
        <h2 class="text-4xl md:text-5xl font-black text-[#4A3428] tracking-tighter uppercase">Profil Saya</h2>
        <div class="flex items-center gap-3 mt-2">
            <span class="h-[2px] w-12 bg-[#D9B382]"></span>
            <p class="text-[#4A3428]/60 font-bold text-xs tracking-[0.2em] uppercase italic">
                Data akun pribadi pelanggan
            </p>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-8 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 px-6 py-4 rounded-r-2xl font-bold shadow-sm animate-bounce-short">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col lg:flex-row gap-8 items-start">
        
        <div class="w-full lg:w-1/3 group">
            <div class="bg-[#4A3428] rounded-[2.5rem] p-10 shadow-2xl text-center transform transition-transform duration-500 group-hover:-translate-y-2">
                <div class="relative inline-block">
                    <div class="w-32 h-32 md:w-40 md:h-40 bg-[#D9B382] rounded-full mx-auto flex items-center justify-center border-4 border-white/20 shadow-inner">
                        <span class="text-[#4A3428] text-5xl font-black uppercase">
                            {{ substr($customer->username, 0, 1) }}
                        </span>
                    </div>
                    <div class="absolute bottom-2 right-2 w-6 h-6 bg-emerald-500 border-4 border-[#4A3428] rounded-full"></div>
                </div>
                
                <h3 class="mt-6 text-2xl font-black text-[#D9B382] tracking-tight">{{ $customer->username }}</h3>
                <p class="text-[#D9B382]/60 text-sm font-medium tracking-widest uppercase mt-1">Pelanggan Setia</p>
                
                <div class="mt-8 pt-8 border-t border-white/10">
                    <div class="flex justify-around">
                        <div class="text-center">
                            <p class="text-[#D9B382] font-black text-lg">Active</p>
                            <p class="text-[#D9B382]/40 text-[10px] uppercase font-bold tracking-tighter">Status</p>
                        </div>
                        <div class="w-[1px] bg-white/10"></div>
                        <div class="text-center">
                            <p class="text-[#D9B382] font-black text-lg">Gold</p>
                            <p class="text-[#D9B382]/40 text-[10px] uppercase font-bold tracking-tighter">Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-2/3 bg-white rounded-[2.5rem] p-8 md:p-12 shadow-xl border border-[#D9B382]/20 relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#D9B382]/5 rounded-full"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 relative">
                <div class="space-y-1">
                    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-[#4A3428]/40">Username</p>
                    <div class="flex items-center gap-3">
                        <p class="text-xl font-black text-[#4A3428]">{{ $customer->username }}</p>
                    </div>
                </div>

                <div class="space-y-1">
                    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-[#4A3428]/40">Alamat Email</p>
                    <p class="text-xl font-bold text-[#4A3428] break-all">{{ $customer->email }}</p>
                </div>

                <div class="space-y-1">
                    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-[#4A3428]/40">Nomor Telepon</p>
                    <p class="text-xl font-bold text-[#4A3428]">{{ $customer->no_hp ?? '-' }}</p>
                </div>

                <div class="space-y-1 md:col-span-2">
                    <p class="text-[10px] font-black uppercase tracking-[0.3em] text-[#4A3428]/40">Alamat Lengkap</p>
                    <p class="text-xl font-bold text-[#4A3428] leading-relaxed italic">
                        {{ $customer->alamat ?? 'Alamat belum dilengkapi' }}
                    </p>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-[#D9B382]/20 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('customer.profile.edit') }}"
                   class="group inline-flex items-center justify-center gap-3 bg-[#4A3428] text-[#D9B382] px-10 py-4 rounded-2xl font-black text-xs tracking-[0.2em] uppercase hover:bg-[#3D2B21] hover:shadow-lg transition-all duration-300">
                    Edit Profil
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                
                <p class="text-[10px] text-[#4A3428]/40 italic font-medium flex items-center">
                    Terakhir diperbarui: {{ now()->format('d M Y') }}
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes bounce-short {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-4px); }
    }
    .animate-bounce-short {
        animation: bounce-short 2s ease-in-out infinite;
    }
</style>
@endsection