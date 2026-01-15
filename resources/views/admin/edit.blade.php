@extends('admin.layout')

@section('title', 'Edit Produk: ' . $product->nama_produk)

@section('content')
<div class="bg-[#fdfaf5] min-h-screen py-8 px-4 md:px-8">
    <div class="max-w-5xl mx-auto">
        
        <a href="{{ route('dashboard.index') }}" 
           class="inline-flex items-center gap-3 mb-8 text-[#4A3428]/60 hover:text-[#4A3428] font-bold text-xs tracking-[0.2em] transition-all group">
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:shadow-md border border-[#D9B382]/20 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </div>
            KEMBALI KE DASHBOARD
        </a>

        <div class="bg-white rounded-[3rem] shadow-2xl shadow-[#4A3428]/5 border border-[#D9B382]/10 overflow-hidden">
            
            <div class="bg-gradient-to-r from-[#4A3428] to-[#2D1F18] p-10 md:p-14 relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-64 h-64 bg-[#D9B382]/10 rounded-full blur-3xl"></div>

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 relative z-10">
                    <div class="flex items-center gap-6">
                        <div class="w-20 h-20 bg-white/10 backdrop-blur-md border border-white/20 rounded-[2rem] flex items-center justify-center text-[#D9B382] shadow-2xl">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-4xl font-black text-white tracking-tighter uppercase leading-none">Edit Produk</h2>
                            <p class="text-[#D9B382]/70 font-bold text-sm tracking-[0.3em] uppercase mt-3 italic">ID Produk: #{{ $product->id }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('dashboard.update', $product->id) }}" method="POST" class="p-8 md:p-14 space-y-12">
                @csrf

                @if (session('success'))
                    <div class="p-5 bg-green-50 border-l-8 border-green-500 text-green-800 rounded-xl font-bold flex items-center gap-4">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    
                    <div class="space-y-8">
                        <div class="group">
                            <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" 
                                class="w-full px-8 py-5 rounded-[2rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner group-hover:shadow-md">
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="group">
                                <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Kategori</label>
                                <input type="text" name="kategori" value="{{ $product->kategori }}" 
                                    class="w-full px-8 py-5 rounded-[2rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                            </div>
                            <div class="group">
                                <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Stok Unit</label>
                                <input type="number" name="stok" value="{{ $product->stok }}" 
                                    class="w-full px-8 py-5 rounded-[2rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                            </div>
                        </div>

                        <div class="group">
                            <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Harga Retail (Rp)</label>
                            <input type="number" name="harga" value="{{ $product->harga }}" 
                                class="w-full px-8 py-5 rounded-[2rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                        </div>
                        
                        <div class="group">
                            <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Nama File Gambar</label>
                            <div class="flex items-center gap-4">
                                <input type="text" name="gambar" value="{{ $product->gambar }}" 
                                    class="flex-1 px-8 py-5 rounded-[2rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="group">
                            <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Deskripsi Singkat</label>
                            <textarea name="deskripsi" rows="3"
                                class="w-full px-8 py-6 rounded-[2.5rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-medium text-[#4A3428] shadow-inner resize-none leading-relaxed">{{ $product->deskripsi }}</textarea>
                        </div>

                        <div class="group">
                            <label class="text-[11px] font-black text-[#4A3428] uppercase tracking-[0.25em] ml-3 mb-2 block">Deskripsi Lengkap</label>
                            <textarea name="deskripsi_lengkap" rows="8"
                                class="w-full px-8 py-6 rounded-[2.5rem] bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-medium text-[#4A3428] shadow-inner resize-none leading-relaxed">{{ $product->deskripsi_lengkap }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="pt-10 border-t border-gray-100 flex flex-col lg:flex-row items-center justify-between gap-8">
                    
                    <button type="submit"
                        class="w-full lg:w-auto bg-[#4A3428] text-[#D9B382] font-black px-16 py-6 rounded-2xl shadow-2xl shadow-[#4A3428]/30 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-2 active:scale-95 flex items-center justify-center gap-4 tracking-[0.3em] text-sm">
                        UPDATE KOLEKSI
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection