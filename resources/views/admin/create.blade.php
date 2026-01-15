@extends('admin.layout')

@section('title', 'Tambah Produk Baru')

@section('content')
<div class="bg-[#fdfaf5] min-h-screen py-12 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">
        
        <a href="{{ route('dashboard.index') }}" 
           class="inline-flex items-center gap-2 mb-8 text-[#4A3428]/60 hover:text-[#4A3428] font-bold text-sm transition-colors group">
            <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm group-hover:shadow-md transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
            </div>
            KEMBALI KE DASHBOARD
        </a>

        <div class="bg-white rounded-[3rem] shadow-2xl shadow-[#4A3428]/5 border border-[#D9B382]/20 overflow-hidden">
            <div class="bg-[#4A3428] p-8 md:p-12">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-[#D9B382] rounded-2xl flex items-center justify-center text-[#4A3428] shadow-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h2 class="text-3xl font-black text-white tracking-tighter uppercase">Tambah Koleksi Baru</h2>
                        <p class="text-[#D9B382]/60 font-medium text-sm tracking-widest uppercase">Lengkapi detail produk untuk katalog butik</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('dashboard.store') }}" method="POST" class="p-8 md:p-12 space-y-10">
                @csrf

                @if (session('success'))
                    <div class="p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-r-xl font-bold flex items-center gap-3">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" placeholder="Contoh: Silk Minimalist Dress"
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] placeholder:text-gray-300 shadow-inner">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Kategori</label>
                            <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Contoh: Outerwear"
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] placeholder:text-gray-300 shadow-inner">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Harga (Rp)</label>
                                <input type="number" name="harga" value="{{ old('harga') }}" placeholder="0"
                                    class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Stok Unit</label>
                                <input type="number" name="stok" value="{{ old('stok') }}" placeholder="0"
                                    class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] shadow-inner">
                            </div>
                        </div>
                        
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Link/Path Gambar</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-5 text-[#D9B382]">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </span>
                                <input type="text" name="gambar" value="{{ old('gambar') }}" placeholder="namafile.jpg"
                                    class="w-full pl-14 pr-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] placeholder:text-gray-300 shadow-inner">
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Deskripsi Singkat</label>
                            <textarea name="deskripsi" rows="3" placeholder="Jelaskan produk dalam 1 kalimat..."
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-medium text-[#4A3428] placeholder:text-gray-300 shadow-inner resize-none">{{ old('deskripsi') }}</textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Deskripsi Lengkap</label>
                            <textarea name="deskripsi_lengkap" rows="7" placeholder="Detail bahan, cara perawatan, dll..."
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-medium text-[#4A3428] placeholder:text-gray-300 shadow-inner resize-none">{{ old('deskripsi_lengkap') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-100 flex flex-col md:flex-row items-center justify-between gap-6">
                    <p class="text-xs font-bold text-gray-400 italic">Pastikan semua data sudah benar sebelum menyimpan.</p>
                    <button type="submit"
                        class="w-full md:w-auto bg-[#4A3428] text-[#D9B382] font-black px-12 py-5 rounded-2xl shadow-2xl shadow-[#4A3428]/30 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3 tracking-[0.1em]">
                        SIMPAN PRODUK
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection