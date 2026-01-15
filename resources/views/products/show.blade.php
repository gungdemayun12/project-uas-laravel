@extends('layouts.app')

@section('title', $product->nama_produk . ' - Detail Produk')

@section('content')
<section class="bg-[#fdfaf5] min-h-screen pt-10 pb-20">
    <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32"> 
        <nav class="flex mb-8 text-sm font-bold uppercase tracking-widest" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-400 hover:text-[#4A3428]">Home</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"></path>
                        </svg>
                        <a href="/produk" class="text-gray-400 hover:text-[#4A3428]">Produk</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"></path>
                        </svg>
                        <span class="text-[#4A3428]">{{ $product->nama_produk }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="flex flex-col lg:flex-row gap-16">

            <div class="w-full lg:w-1/2">
                <div class="sticky top-24">
                    <div class="relative overflow-hidden rounded-[3rem] bg-white shadow-2xl border-[10px] border-white rotate-1 hover:rotate-0 transition-transform duration-500">
                        @if($product->gambar)
                            <img src="{{ asset('images/' . $product->gambar) }}" 
                                 alt="{{ $product->nama_produk }}" 
                                 class="w-full object-cover aspect-[3/4]">
                        @else
                            <div class="w-full aspect-[3/4] flex items-center justify-center bg-gray-200 text-gray-400 font-bold">
                                Tidak ada gambar
                            </div>
                        @endif

                        <div class="absolute top-6 left-6 flex flex-col gap-2">
                            <span class="bg-[#4A3428] text-[#D9B382] text-[10px] font-black px-4 py-2 rounded-full uppercase tracking-widest shadow-lg">
                                {{ $product->kategori }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 space-y-10">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="h-[2px] w-12 bg-[#D9B382]"></span>
                        <span class="text-[#D9B382] font-black uppercase tracking-[0.3em] text-sm">
                            In Stock ({{ $product->stok }})
                        </span>
                    </div>

                    <h1 class="text-5xl md:text-6xl font-black text-[#4A3428] leading-tight tracking-tighter">
                        {{ $product->nama_produk }}
                    </h1>

                    <p class="text-3xl font-black text-[#D9B382]">
                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                    </p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-[#4A3428] font-black uppercase tracking-widest text-sm underline decoration-[#D9B382] decoration-4 underline-offset-8">
                        Deskripsi Produk
                    </h3>
                    <div class="text-[#4A3428]/70 leading-relaxed text-lg prose">
                        {!! $product->deskripsi ?? 'Belum ada deskripsi untuk produk ini.' !!}
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 pt-6 border-t border-[#D9B382]/20">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#4A3428] p-2 rounded-xl text-[#D9B382]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-[#4A3428]">Bahan Katun Premium</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="bg-[#4A3428] p-2 rounded-xl text-[#D9B382]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-[#4A3428]">Jahitan Rapih</span>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <div class="flex items-center border-2 border-[#4A3428] rounded-2xl px-4 bg-white">
                        <button class="p-2 text-[#4A3428] hover:text-[#D9B382]">-</button>
                        <input type="number" value="1" class="w-12 text-center bg-transparent font-bold outline-none" min="1">
                        <button class="p-2 text-[#4A3428] hover:text-[#D9B382]">+</button>
                    </div>
                    
                    <a href="{{ url('/pesan/create/' . $product->id) }}" 
                       class="flex-1 bg-[#4A3428] text-[#D9B382] font-black py-5 rounded-2xl shadow-xl shadow-[#4A3428]/20 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1 flex items-center justify-center gap-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        PESAN SEKARANG
                    </a>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-[#D9B382]/20 flex items-center gap-6">
                    <div class="text-4xl">🚚</div>
                    <div>
                        <p class="text-[#4A3428] font-bold">Gratis Ongkir Seluruh Indonesia</p>
                        <p class="text-sm text-gray-400 font-medium">Khusus pembelian di atas Rp 500.000</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
