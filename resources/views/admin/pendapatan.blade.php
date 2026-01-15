@extends('admin.layout')

@section('title', 'Laporan Pendapatan')

@section('content')

<div class="space-y-8">

    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
        <div>
            <h2 class="text-4xl font-black text-[#4A3428] tracking-tighter uppercase">Revenue Report</h2>
            <p class="text-[#4A3428]/50 font-bold text-[10px] tracking-[0.2em] uppercase mt-2 italic">Analisis Transaksi & Akumulasi Pendapatan Efektif</p>
        </div>

        <a href="{{ route('pendapatan.export.excel') }}"
           class="inline-flex items-center gap-3 bg-emerald-600 text-white px-8 py-4 rounded-2xl shadow-xl shadow-emerald-900/20 hover:bg-emerald-700 transition-all transform hover:-translate-y-1 active:scale-95 font-black text-xs tracking-widest uppercase">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            EXPORT SPREADSHEET
        </a>
    </div>

    @if(count($pendapatan) > 0)

        <div class="relative overflow-hidden bg-[#4A3428] rounded-[2.5rem] p-10 shadow-2xl shadow-[#4A3428]/30">
            <div class="absolute right-0 top-0 w-64 h-64 bg-[#D9B382]/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                <div>
                    <span class="text-[10px] uppercase tracking-[0.4em] text-[#D9B382] font-black italic">
                        Gross Profit Accumulation
                    </span>
                    <h3 class="text-5xl font-black text-white mt-2 tracking-tighter">
                        Rp {{ number_format($totalPendapatan, 0, ',', '.') }}
                    </h3>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/10 px-6 py-4 rounded-2xl">
                    <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest">Periode Laporan</p>
                    <p class="text-[#D9B382] font-black text-sm uppercase mt-1 italic">Real-time Data</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-black/[0.03] border border-white overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-[#F8F5F2] border-b border-gray-100">
                            <th class="py-6 px-8 text-left text-[10px] font-black text-[#4A3428]/60 uppercase tracking-[0.2em]">Katalog Produk</th>
                            <th class="py-6 px-8 text-center text-[10px] font-black text-[#4A3428]/60 uppercase tracking-[0.2em]">Volume Terjual</th>
                            <th class="py-6 px-8 text-right text-[10px] font-black text-[#4A3428]/60 uppercase tracking-[0.2em]">Nilai Satuan</th>
                            <th class="py-6 px-8 text-right text-[10px] font-black text-[#4A3428]/60 uppercase tracking-[0.2em]">Akumulasi (IDR)</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-50">
                        @foreach($pendapatan as $item)
                        <tr class="hover:bg-[#F8F5F2]/50 transition-colors group">
                            <td class="py-6 px-8">
                                <div class="font-bold text-[#4A3428] text-sm uppercase tracking-tight">{{ $item->nama_produk }}</div>
                                <div class="text-[10px] text-[#D9B382] font-black mt-0.5 tracking-[0.1em]">PREMIUM COLLECTION</div>
                            </td>

                            <td class="py-6 px-8 text-center">
                                <span class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-[#4A3428]/5 text-[#4A3428] font-black text-sm border border-[#4A3428]/10 group-hover:bg-[#4A3428] group-hover:text-[#D9B382] transition-all">
                                    {{ $item->jumlah }}
                                </span>
                            </td>

                            <td class="py-6 px-8 text-right text-[#4A3428]/60 font-bold text-xs">
                                Rp {{ number_format($item->harga_satuan, 0, ',', '.') }}
                            </td>

                            <td class="py-6 px-8 text-right">
                                <span class="text-[#4A3428] font-black text-sm tracking-tighter">
                                    Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="bg-[#F8F5F2]/50 p-6 text-center border-t border-gray-50">
                <p class="text-[#4A3428]/30 text-[9px] font-bold uppercase tracking-[0.3em]">Data ini dihasilkan secara otomatis oleh sistem manajemen inventaris</p>
            </div>
        </div>

    @else
        <div class="bg-white rounded-[3rem] shadow-2xl shadow-black/[0.03] p-20 text-center border border-white">
            <div class="w-24 h-24 bg-[#F8F5F2] rounded-full flex items-center justify-center mx-auto mb-8 border border-gray-50">
                <svg class="w-10 h-10 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h3 class="text-[#4A3428] font-black text-xl uppercase tracking-tighter">Belum Ada Arus Kas</h3>
            <p class="text-[#4A3428]/40 text-xs font-bold mt-2 uppercase tracking-widest">Data pendapatan akan muncul setelah transaksi diselesaikan</p>
        </div>

    @endif

</div>

@endsection