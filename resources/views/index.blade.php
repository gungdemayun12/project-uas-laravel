@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative min-h-[85vh] lg:min-h-[90vh] w-full flex items-center overflow-hidden bg-[#fdfaf5]">
        <div class="absolute top-0 right-0 w-full lg:w-1/2 h-full bg-[#4A3428] hidden lg:block" style="clip-path: polygon(15% 0%, 100% 0%, 100% 100%, 0% 100%);"></div>
        
        <div class="absolute top-10 -left-20 w-64 h-64 bg-[#D9B382]/20 rounded-full blur-3xl animate-pulse"></div>

        <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-8">
                
                <div class="w-full lg:w-1/2 space-y-8 md:space-y-8 animate-fade-in-left text-center lg:text-left pt-6 md:pt-10 lg:pt-0">
                    <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-[#4A3428]/5 border border-[#4A3428]/10 text-[#4A3428] font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase mx-auto lg:mx-0">
                        <span class="w-6 md:w-8 h-[1px] bg-[#4A3428]"></span>
                        Koleksi Eksklusif 2026
                    </div>

                    <h1 class="text-6xl md:text-7xl lg:text-8xl font-black text-[#4A3428] leading-[0.85] tracking-tighter">
                        Tampil <br>
                        <span class="text-[#D9B382] italic serif">Elegan.</span>
                    </h1>

                    <p class="text-base md:text-lg text-[#4A3428]/70 leading-relaxed max-w-md mx-auto lg:mx-0 font-medium px-2 md:px-0">
                        Temukan definisi baru dalam berpakaian. Koleksi pakaian premium yang dirancang untuk kenyamanan maksimal dan kepercayaan diri Anda.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start px-2 md:px-0">
                        <a href="/produk" class="group px-10 py-5 bg-[#4A3428] hover:bg-[#3D2B21] text-[#D9B382] font-black rounded-2xl md:rounded-full shadow-xl shadow-[#4A3428]/30 transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-4">
                            BELANJA SEKARANG
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        </a>
                        <a href="#koleksi" class="px-10 py-5 border-2 border-[#4A3428] text-[#4A3428] font-black rounded-2xl md:rounded-full hover:bg-[#4A3428] hover:text-[#D9B382] transition-all duration-300 text-center">
                            LIHAT KATALOG
                        </a>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 pt-4">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-md" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-md" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=100" alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover shadow-md" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100" alt="">
                        </div>
                        <div class="text-[10px] md:text-sm font-bold text-[#4A3428]/60 uppercase tracking-widest leading-tight">
                            <span class="text-[#4A3428] block text-base font-black italic">10k+ Pelanggan</span>
                            Telah Bergabung
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative animate-fade-in-right pb-10 lg:pb-0 px-4 md:px-0 hidden lg:block">
                    <div class="relative z-10 w-full max-w-[450px] mx-auto aspect-[4/5] rounded-t-[10rem] rounded-b-3xl overflow-hidden shadow-[0_50px_100px_-20px_rgba(74,52,40,0.3)] border-[12px] border-white transform lg:rotate-2 hover:rotate-0 transition-all duration-700">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000&auto=format&fit=crop" 
                             alt="Fashion Model" 
                             class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-1000">
                    </div>
                    
                    <div class="absolute top-1/2 -right-8 z-20 bg-white/95 backdrop-blur-md p-6 rounded-3xl shadow-2xl animate-bounce-slow">
                        <p class="text-[#D9B382] text-[10px] font-black uppercase tracking-widest mb-1">New Arrival</p>
                        <p class="text-xl font-black text-[#4A3428]">Blazer Premium</p>
                        <p class="text-sm font-bold text-[#4A3428]/50">Mulai dari Rp 499k</p>
                    </div>

                    <div class="absolute -bottom-8 -left-8 z-20 bg-[#D9B382] w-32 h-32 rounded-full flex flex-col items-center justify-center shadow-2xl animate-float border-4 border-white">
                        <span class="text-[#4A3428] font-black text-3xl leading-none">30%</span>
                        <span class="text-[#4A3428] font-bold text-[10px] uppercase tracking-tighter">OFF NOW</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="koleksi" class="py-16 md:py-24 bg-[#F3E5D8]">
        <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">
            <div class="mb-10 md:mb-12 flex justify-center lg:justify-end">
                <form action="{{ route('home') }}" method="GET" class="flex w-full max-w-xl gap-2">

            <select name="kategori"
                class="px-4 py-4 rounded-2xl bg-white font-medium text-[#4A3428] shadow-sm
                    focus:ring-2 focus:ring-[#D9B382]">
                <option value="">Semua Kategori</option>
                <option value="jaket" {{ request('kategori') == 'jaket' ? 'selected' : '' }}>Jaket</option>
                <option value="kaos" {{ request('kategori') == 'kaos' ? 'selected' : '' }}>Kaos</option>
                <option value="hoodie" {{ request('kategori') == 'hoodie' ? 'selected' : '' }}>Hoodie</option>
                <option value="kemeja" {{ request('kategori') == 'kemeja' ? 'selected' : '' }}>Kemeja</option>
            </select>

            <input type="text" name="keyword" placeholder="Cari produk..."
                value="{{ request('keyword') }}"
                class="flex-1 px-5 py-4 rounded-2xl border-none bg-white
                    focus:ring-2 focus:ring-[#D9B382] font-medium text-[#4A3428]
                    placeholder:text-gray-400 shadow-sm">

            <button type="submit"
                class="p-4 bg-[#4A3428] text-[#D9B382] font-bold rounded-2xl
                    hover:bg-[#3D2B21] transition-all shadow-lg active:scale-95">
                🔍
            </button>
        </form>

            </div>

            <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-12 md:mb-16 gap-6 text-center md:text-left">
                <div class="space-y-2">
                    <div class="flex items-center justify-center md:justify-start gap-2 text-[#D9B382] font-bold text-sm uppercase tracking-[0.3em]">
                        <span class="w-8 h-[2px] bg-[#D9B382]"></span>
                        Koleksi Terbaru
                    </div>
                    <h2 class="text-[#4A3428] text-4xl md:text-5xl font-black tracking-tighter leading-tight">
                        Produk <span class="text-[#D9B382] italic serif font-medium">Terbaik</span>
                    </h2>
                </div>
                <a href="/produk" class="px-6 py-3 bg-white/50 backdrop-blur-sm rounded-xl text-[#4A3428] font-bold text-xs uppercase tracking-widest hover:bg-[#4A3428] hover:text-[#D9B382] transition-all">
                    Lihat Semua
                </a>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-10 md:gap-x-8 md:gap-y-16">
                @foreach($products as $item)
                  <div class="group" data-aos="fade-up" data-aos-duration="800">
                        <div class="relative aspect-[4/5] md:aspect-[3/4] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden bg-white shadow-md mb-4 md:mb-6">
                            @if($item->gambar)
                                <img src="{{ asset('images/' . $item->gambar) }}" 
                                     alt="{{ $item->nama_produk }}"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100 text-gray-400 text-xs font-bold uppercase tracking-widest text-center px-4">
                                    No Image
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 hidden md:flex items-center justify-center gap-3">
                                <a href="{{ route('produk.show', $item->id) }}" 
                                   class="p-4 bg-white text-[#4A3428] rounded-2xl hover:bg-[#D9B382] transition-all transform translate-y-8 group-hover:translate-y-0 duration-500 shadow-xl">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>
                            </div>
                            
                            <a href="{{ route('produk.show', $item->id) }}" class="absolute inset-0 md:hidden z-10"></a>

                            @if($item->stok < 5)
                                <div class="absolute top-3 left-3 md:top-5 md:right-5 bg-red-500 text-white text-[8px] md:text-[10px] font-black px-2 md:px-3 py-1 rounded-full uppercase tracking-tighter shadow-lg z-20">
                                    Stok Tipis Cuy
                                </div>
                            @endif
                        </div>

                        <div class="space-y-1.5 md:space-y-2 px-2">
                            <h3 class="text-sm md:text-xl font-bold text-[#4A3428] leading-tight group-hover:text-[#D9B382] transition-colors truncate">
                                {{ $item->nama_produk }}
                            </h3>
                            <div class="flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                                <span class="text-base md:text-2xl font-black text-[#4A3428]">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </span>
                                <span class="text-[9px] md:text-xs font-bold text-gray-400 uppercase tracking-widest truncate">
                                    {{ $item->stok }} In Stock
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 md:mt-20 flex justify-center">
                {{ $products->links() }}
            </div>
        </div>
    </section>

    <style>
        @keyframes fade-in-left { from { opacity: 0; transform: translateX(-40px); } to { opacity: 1; transform: translateX(0); } }
        @keyframes fade-in-right { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes float { 0%, 100% { transform: translateY(0) rotate(0); } 50% { transform: translateY(-20px) rotate(5deg); } }
        @keyframes bounce-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
        
        .animate-fade-in-left { animation: fade-in-left 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-fade-in-right { animation: fade-in-right 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-bounce-slow { animation: bounce-slow 4s ease-in-out infinite; }

        .pagination { display: flex; gap: 0.5rem; flex-wrap: wrap; justify-content: center; }
        .page-item.active .page-link { background-color: #4A3428; border-color: #4A3428; color: #D9B382; }
        .page-link { border-radius: 0.75rem; color: #4A3428; font-weight: bold; padding: 0.5rem 1rem; }
        
        @media (max-width: 768px) {
            .page-link { padding: 0.4rem 0.8rem; font-size: 0.8rem; }
        }
    </style>

    @include('layouts.section')
@endsection