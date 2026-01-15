@extends('layouts.app')

@section('title', 'Daftar Pesanan Saya')

@section('content')
<section class="bg-[#fdfaf5] min-h-screen py-12">
    <div class="container mx-auto px-6 max-w-6xl">
        
        <div class="mb-12">
            <h1 class="text-4xl font-black text-[#4A3428] tracking-tighter">Pesanan Saya</h1>
            <p class="text-[#4A3428]/50 font-medium">Pantau semua pesanan fashion Anda di sini.</p>
        </div>

        <div class="grid grid-cols-1 gap-8">
            @foreach($orders as $order)
            <div class="bg-white rounded-[2.5rem] p-6 md:p-8 border border-[#D9B382]/20 shadow-sm hover:shadow-xl transition-all duration-300 group overflow-hidden relative">
                
                <div class="flex flex-col lg:flex-row gap-8 items-start lg:items-stretch">
                    
                    <div class="flex gap-6 w-full lg:w-1/3">
                        <div class="w-28 h-36 flex-shrink-0 rounded-2xl overflow-hidden bg-[#fdfaf5] border border-[#D9B382]/10">
                            <img src="{{ asset('images/' . $order->gambar) }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex flex-col justify-center">
                            <span class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] mb-1">
                                Pesanan #{{ $order->id + 1000 }}
                            </span>
                            <h3 class="text-xl font-black text-[#4A3428] leading-tight mb-2">
                                {{ $order->nama_produk }}
                            </h3>
                            <div class="flex items-center gap-2">
                                <span class="px-3 py-1 bg-[#4A3428] text-[#D9B382] text-[10px] font-bold rounded-lg uppercase italic">
                                    Size {{ $order->ukuran }}
                                </span>
                                <span class="text-sm font-bold text-[#4A3428]/40">
                                    {{ $order->jumlah }} Pcs
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3 flex flex-col justify-center lg:border-l lg:border-[#D9B382]/20 lg:pl-8 py-4 lg:py-0">
                        <div class="mb-4">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Penerima</p>
                            <p class="text-[#4A3428] font-bold">{{ $order->nama_pemesan }}</p>
                            <p class="text-[#4A3428]/50 text-xs">{{ $order->no_hp }}</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Alamat Tujuan</p>
                            <p class="text-[#4A3428] text-sm font-medium leading-relaxed">
                                {{ $order->alamat }}
                            </p>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3 flex flex-col justify-between items-end bg-[#fdfaf5]/50 lg:bg-transparent p-4 lg:p-0 rounded-2xl">
                        <div class="text-right">
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Total Pembayaran</p>
                            <p class="text-3xl font-black text-[#4A3428]">
                                Rp {{ number_format($order->total_harga, 0, ',', '.') }}
                            </p>
                        </div>

                        <div class="flex flex-col items-end gap-1 mt-4">
                            <span class="text-[9px] font-black uppercase tracking-tighter text-gray-400">Status & Metode Pembayaran</span>
                            <div class="flex items-center gap-3">
                                <span class="text-sm font-black uppercase italic
                                    @if($order->status == 'pending') text-red-500
                                    @elseif($order->status == 'proses') text-amber-500
                                    @elseif($order->status == 'selesai') text-green-600
                                    @endif">
                                    {{ $order->status }}
                                </span>
                                <span class="text-xs font-bold text-white bg-[#4A3428] px-2 py-0.5 rounded">
                                    {{ $order->metode_pembayaran }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-dashed border-[#D9B382]/30 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="w-full md:w-2/3">
                        @if($order->catatan)
                        <p class="text-xs italic text-[#4A3428]/60 uppercase tracking-widest">
                            <span class="font-black not-italic text-[#D9B382]">Catatan:</span>
                            "{{ $order->catatan }}"
                        </p>
                        @endif
                    </div>
                    <div class="w-full md:w-auto">
                        <a href="{{ route('orders.receipt', $order->id) }}"
                        class="block text-center px-8 py-3 bg-[#D9B382] text-[#4A3428] font-black text-xs uppercase tracking-widest rounded-xl hover:bg-[#4A3428] hover:text-[#D9B382] transition-all duration-300 shadow-md hover:shadow-lg">
                            Lihat Struk
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection