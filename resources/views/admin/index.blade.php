@extends('admin.layout')

@section('title', 'Manajemen Produk')

@section('content')
<div class="bg-[#fdfaf5] min-h-screen p-4 md:p-8">
    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-12">
        <div>
            <h2 class="text-4xl font-black text-[#4A3428] tracking-tighter">Inventory Produk</h2>
            <p class="text-[#4A3428]/50 font-medium mt-1">Kelola stok dan katalog butik Anda dengan mudah.</p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
            <form action="{{ route('dashboard.index') }}" method="GET" class="relative group">
                <input 
                    type="text" 
                    name="keyword"
                    value="{{ request('keyword') }}"
                    placeholder="Cari produk..."
                    class="w-full sm:w-64 pl-12 pr-4 py-3.5 rounded-2xl bg-white border-2 border-[#D9B382]/20 focus:border-[#4A3428] outline-none transition-all shadow-sm font-bold text-[#4A3428]">
                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-[#D9B382]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
            </form>

            <a href="{{ route('dashboard.create') }}" 
               class="flex items-center justify-center gap-2 bg-[#4A3428] text-[#D9B382] px-6 py-3.5 rounded-2xl font-black shadow-xl shadow-[#4A3428]/20 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                TAMBAH PRODUK
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach ($product as $p)
        <div class="bg-white rounded-[2.5rem] shadow-sm border border-[#D9B382]/10 overflow-hidden group hover:shadow-2xl hover:shadow-[#4A3428]/10 transition-all duration-500 flex flex-col relative">
            
            <div class="absolute top-4 left-4 z-10 flex flex-col gap-2">
                <span class="bg-white/90 backdrop-blur-md text-[#4A3428] text-[10px] font-black px-3 py-1.5 rounded-xl shadow-sm uppercase tracking-widest border border-[#D9B382]/20">
                    {{ $p->kategori }}
                </span>
            </div>

            <div class="relative h-72 overflow-hidden bg-[#fdfaf5]">
                @if($p->gambar)
                    <img src="{{ asset('images/' . $p->gambar) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                @else
                    <div class="w-full h-full flex flex-col items-center justify-center text-[#D9B382]/40 gap-2">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span class="text-[10px] font-black uppercase tracking-widest">No Image</span>
                    </div>
                @endif

                @if($p->stok == 0)
                    <div class="absolute inset-0 bg-[#4A3428]/80 backdrop-blur-[2px] flex items-center justify-center">
                        <span class="text-[#D9B382] text-xl font-black tracking-tighter border-2 border-[#D9B382] px-4 py-1 rotate-12">OUT OF STOCK</span>
                    </div>
                @endif
            </div>

            <div class="p-6 flex flex-col flex-1 bg-white">
                <div class="mb-4">
                    <h3 class="text-xl font-black text-[#4A3428] tracking-tighter line-clamp-1 group-hover:text-[#D9B382] transition-colors">
                        {{ $p->nama_produk }}
                    </h3>
                    <p class="text-gray-400 text-xs font-medium mt-2 line-clamp-2 italic">
                        {{ $p->deskripsi ?? 'Tidak ada deskripsi produk.' }}
                    </p>
                </div>

                <div class="flex items-end justify-between mt-auto pt-4 border-t border-gray-50">
                    <div class="flex flex-col">
                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Harga</span>
                        <span class="text-lg font-black text-[#4A3428]">Rp {{ number_format($p->harga, 0, ',', '.') }}</span>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block">Sisa Stok</span>
                        <span class="text-sm font-black {{ $p->stok <= 5 ? 'text-red-500' : 'text-[#D9B382]' }}">
                            {{ $p->stok }} Pcs
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 mt-6">
                    <a href="{{ url('dashboard/edit/' . $p->id) }}"
                       class="flex items-center justify-center gap-2 bg-[#fdfaf5] text-[#4A3428] font-black py-3 rounded-2xl border border-[#D9B382]/30 hover:bg-[#D9B382] hover:text-[#4A3428] transition-all text-xs">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        EDIT
                    </a>

                    <form action="{{ route('dashboard.produk.destroy', $p->id) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Hapus produk ini dari katalog?')"
                            class="w-full flex items-center justify-center gap-2 bg-red-50 text-red-600 font-black py-3 rounded-2xl border border-red-100 hover:bg-red-600 hover:text-white transition-all text-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            HAPUS
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if(count($product) == 0)
    <div class="flex flex-col items-center justify-center py-32 text-[#4A3428]/30">
        <svg class="w-24 h-24 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
        <p class="text-xl font-black uppercase tracking-widest">Produk Kosong</p>
        <p class="text-sm font-medium italic mt-1">Belum ada produk yang cocok dengan pencarian Anda.</p>
    </div>
    @endif
</div>
@endsection