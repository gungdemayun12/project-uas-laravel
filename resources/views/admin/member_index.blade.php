@extends('admin.layout')

@section('title', 'Data Member')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
        <div>
            <h2 class="text-4xl font-black text-[#4A3428] tracking-tighter uppercase">Elite Members</h2>
            <p class="text-[#4A3428]/50 font-bold text-[10px] tracking-[0.2em] uppercase mt-2 italic">Daftar Pelanggan Setia & Akun Customer</p>
        </div>
        <a href="{{ route('dashboard.member.create') }}"
           class="inline-flex items-center gap-3 bg-[#4A3428] text-[#D9B382] px-8 py-4 rounded-2xl shadow-2xl shadow-[#4A3428]/20 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1 active:scale-95 font-black text-xs tracking-widest uppercase">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
            </svg>
            TAMBAH CUSTOMER
        </a>
    </div>

    <div class="bg-white p-4 rounded-[2rem] shadow-sm border border-gray-50">
        <form action="{{ route('dashboard.member.index') }}" method="GET" class="flex flex-col md:flex-row gap-3">
            <div class="relative flex-1 group">
                <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-[#4A3428]/30 group-focus-within:text-[#D9B382] transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="Cari username atau email customer..."  
                       class="w-full pl-12 pr-6 py-4 bg-[#F8F5F2] border-none rounded-2xl focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold placeholder-[#4A3428]/30 shadow-inner">
            </div>

            <button type="submit" 
                    class="px-10 py-4 bg-[#D9B382] text-[#4A3428] rounded-2xl hover:bg-[#c4a175] font-black text-xs tracking-widest uppercase transition-all shadow-lg shadow-[#D9B382]/20">
                CARI DATA
            </button>
        </form>
    </div>

    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-black/[0.03] border border-white overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-[#4A3428] text-[#D9B382]">
                        <th class="py-6 px-8 text-left text-[10px] font-black uppercase tracking-[0.2em]">Customer</th>
                        <th class="py-6 px-8 text-left text-[10px] font-black uppercase tracking-[0.2em]">Kontak</th>
                        <th class="py-6 px-8 text-left text-[10px] font-black uppercase tracking-[0.2em]">Alamat Lengkap</th>
                        <th class="py-6 px-8 text-center text-[10px] font-black uppercase tracking-[0.2em]">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach ($members as $m)
                        <tr class="hover:bg-[#F8F5F2]/50 transition-colors group">
                            <td class="py-6 px-8">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-[#4A3428] flex items-center justify-center text-[#D9B382] font-black text-sm uppercase">
                                        {{ substr($m->username, 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="font-bold text-[#4A3428] text-sm uppercase tracking-tight">{{ $m->username }}</div>
                                        <div class="text-[10px] text-[#D9B382] font-black mt-0.5 tracking-[0.1em]">{{ $m->email }}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="py-6 px-8 text-gray-500 font-medium text-xs">
                                {{ $m->no_hp ?? '-' }}
                            </td>

                            <td class="py-6 px-8">
                                <p class="text-gray-400 text-xs italic line-clamp-1 max-w-[250px]">
                                    {{ $m->alamat ?? 'Belum mengisi alamat' }}
                                </p>
                            </td>

                            <td class="py-6 px-8">
                                <div class="flex justify-center gap-3">
                                    <a href="{{ route('dashboard.member.edit', $m->id) }}"
                                       class="p-3 bg-white border border-gray-100 text-[#4A3428] rounded-xl hover:bg-[#D9B382] hover:text-[#4A3428] transition-all shadow-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    
                                    <form action="{{ route('dashboard.member.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Hapus customer ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="p-3 bg-white border border-gray-100 text-red-400 rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection