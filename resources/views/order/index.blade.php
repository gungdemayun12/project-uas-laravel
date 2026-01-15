@extends('layouts.app')

@section('title', 'Daftar Pesanan Saya')

@section('content')
<section class="bg-[#fdfaf5] min-h-screen py-12">
    <div class="container mx-auto px-6 md:px-16 lg:px-24 xl:px-32">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <div>
                <h1 class="text-4xl font-black text-[#4A3428] tracking-tighter">Pesanan Saya</h1>
                <p class="text-[#4A3428]/50 font-medium">Pantau semua pesanan fashion Anda di sini.</p>
            </div>
        </div>

     
        <div class="grid grid-cols-1 gap-6">
            @foreach($orders as $order)
            <div class="bg-white rounded-[2rem] p-6 md:p-8 border border-[#D9B382]/20 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="flex flex-col lg:flex-row justify-between gap-8">
                    <div class="flex gap-6 lg:w-1/3">
                        <div class="w-24 h-32 flex-shrink-0 rounded-2xl overflow-hidden bg-[#fdfaf5] border border-[#D9B382]/10">
                            <img src="{{ asset('images/' . $order->gambar) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em]">
                                Pesanan #{{ $order->id + 1000 }}
                            </span>
                            <h3 class="text-xl font-black text-[#4A3428] leading-tight">
                                {{ $order->nama_produk }}
                            </h3>
                            <div class="flex items-center gap-2 pt-2">
                                <span class="px-3 py-1 bg-[#4A3428] text-[#D9B382] text-[10px] font-bold rounded-lg uppercase italic">
                                    Size {{ $order->ukuran }}
                                </span>
                                <span class="text-sm font-bold text-[#4A3428]/40">
                                    {{ $order->jumlah }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/3 grid grid-cols-2 lg:grid-cols-1 gap-4 py-6 lg:py-0 border-y lg:border-y-0 lg:border-x border-[#D9B382]/10 lg:px-8">
                        <div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Pemesan</p>
                            <p class="text-[#4A3428] font-bold">{{ $order->nama_pemesan }}</p>
                            <p class="text-[#4A3428]/50 text-xs">{{ $order->no_hp }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Alamat</p>
                            <p class="text-[#4A3428] text-sm font-medium line-clamp-2">
                                {{ $order->alamat }}
                            </p>
                        </div>
                    </div>

                    <div class="lg:w-1/4 flex flex-col justify-between items-end gap-4">
                        <div class="text-right">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Total Bayar</p>
                            <p class="text-2xl font-black text-[#4A3428]">
                                Rp {{ number_format($order->total_harga, 0, ',', '.') }}
                            </p>
                        </div>
                       <div class="flex items-center gap-3">
                            <div class="flex flex-col items-end">
                                <span class="text-[9px] font-black uppercase tracking-tighter text-gray-400">
                                    Status
                                </span>

                                <span class="text-sm font-black
                                    @if($order->status == 'pending') text-red-500
                                    @elseif($order->status == 'proses') text-amber-500
                                    @elseif($order->status == 'selesai') text-green-600
                                    @endif">
                                    {{ ($order->status) }}
                                </span>
                            </div>
                        </div>


                        <div class="flex flex-col items-end">
                            <span class="text-[9px] font-black uppercase tracking-tighter text-gray-400">
                                Metode Bayar
                            </span>

                            <span class="text-sm font-black text-[#4A3428] uppercase">
                                {{ $order->metode_pembayaran }}
                            </span>
                        </div>


                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                @if($order->catatan)
                <div class="mt-6 pt-4 border-t border-dashed border-[#D9B382]/30">
                    <p class="text-xs italic text-[#4A3428]/60 uppercase tracking-widest">
                        <span class="font-black not-italic text-[#D9B382]">Catatan:</span>
                        "{{ $order->catatan }}"
                    </p>
                </div>
                @endif

                <div class="mt-4 text-right">
                    <a href="{{ route('orders.receipt', $order->id) }}"
                    class="px-5 py-2 bg-[#D9B382] text-[#4A3428] font-bold rounded-2xl hover:bg-[#C9A770] transition-all">
                        Lihat Struk
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection