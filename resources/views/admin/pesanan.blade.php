@extends('admin.layout')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
        <div>
            <h2 class="text-4xl font-black text-[#4A3428] tracking-tighter uppercase">Koleksi Pesanan</h2>
            <p class="text-[#4A3428]/50 font-bold text-xs tracking-[0.2em] uppercase mt-2 italic">Monitoring eksklusif transaksi pelanggan</p>
        </div>
        <a href="{{ route('dashboard.pesanan.create') }}"
           class="inline-flex items-center gap-3 bg-[#4A3428] text-[#D9B382] px-8 py-4 rounded-2xl shadow-2xl shadow-[#4A3428]/20 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1 active:scale-95 font-black text-xs tracking-widest uppercase">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
            </svg>
            TAMBAH DATA BARU
        </a>
    </div>

     <div class="bg-white p-4 rounded-[2rem] shadow-sm border border-gray-50">
        <form action="{{ route('dashboard.pesanan') }}" method="GET" class="flex flex-col md:flex-row gap-3">
            <div class="relative flex-1 group">
                <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-[#4A3428]/30 group-focus-within:text-[#D9B382] transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>

                <input type="text"
                    name="keyword"
                    value="{{ request('keyword') }}"
                    placeholder="Cari nama pemesan..."
                    class="w-full pl-12 pr-6 py-4 bg-[#F8F5F2] border-none rounded-2xl focus:ring-2 focus:ring-[#D9B382] transition-all text-[#4A3428] font-bold placeholder-[#4A3428]/30 shadow-inner">
            </div>

            <button type="submit"
                    class="px-10 py-4 bg-[#D9B382] text-[#4A3428] rounded-2xl hover:bg-[#c4a175] font-black text-xs tracking-widest uppercase transition-all shadow-lg shadow-[#D9B382]/20">
                CARI PESANAN
            </button>
        </form>
    </div>

    @if(count($orders) > 0)
    <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-black/[0.03] border border-white overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-[#4A3428] text-[#D9B382]">
                        <th class="py-6 px-6 text-left text-[10px] font-black uppercase tracking-[0.2em]">Pelanggan</th>
                        <th class="py-6 px-6 text-left text-[10px] font-black uppercase tracking-[0.2em]">Info Produk</th>
                        <th class="py-6 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em]">Qty</th>
                        <th class="py-6 px-6 text-right text-[10px] font-black uppercase tracking-[0.2em]">Total Transaksi</th>
                        <th class="py-6 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em]">Status</th>
                        <th class="py-6 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em]">Metode Pembayaran</th>
                        <th class="py-6 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em]">Management</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @foreach($orders as $order)
                    <tr class="hover:bg-[#F8F5F2]/50 transition-colors group">
                        <td class="py-6 px-6">
                            <div class="font-bold text-[#4A3428] text-sm uppercase tracking-tight">{{ $order->nama_pemesan }}</div>
                            <div class="text-[10px] text-gray-400 font-bold mt-1 tracking-wider">{{ $order->no_hp }}</div>
                            <div class="text-[10px] text-gray-400 italic max-w-[150px] truncate mt-0.5">{{ $order->alamat }}</div>
                        </td>
                        <td class="py-6 px-6">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-10 bg-[#D9B382]/20 rounded-full"></div>
                                <div>
                                    <div class="font-bold text-[#4A3428] text-sm italic">{{ $order->nama_produk }}</div>
                                    <div class="text-[10px] font-black text-[#D9B382] uppercase tracking-widest">Size: {{ $order->ukuran }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-6 px-6 text-center">
                            <span class="inline-block px-3 py-1 bg-[#F8F5F2] rounded-lg font-black text-[#4A3428] text-xs shadow-inner">
                                {{ $order->jumlah }}
                            </span>
                        </td>
                        <td class="py-6 px-6 text-right text-sm">
                            <div class="text-gray-400 text-[10px] font-bold tracking-widest uppercase">Subtotal</div>
                            <div class="font-black text-[#4A3428] tracking-tighter text-lg">
                                Rp {{ number_format($order->total_harga, 0, ',', '.') }}
                            </div>
                        </td>
                        <td class="py-6 px-6 text-center">
                            @if($order->status == 'pending')
                                <span class="px-4 py-2 rounded-xl bg-red-50 text-red-500 text-[10px] font-black uppercase tracking-widest border border-red-100 shadow-sm">Pending</span>
                            @elseif($order->status == 'proses')
                                <span class="px-4 py-2 rounded-xl bg-amber-50 text-amber-600 text-[10px] font-black uppercase tracking-widest border border-amber-100 shadow-sm">Proses</span>
                            @elseif($order->status == 'selesai')
                                <span class="px-4 py-2 rounded-xl bg-emerald-50 text-emerald-600 text-[10px] font-black uppercase tracking-widest border border-emerald-100 shadow-sm">Selesai</span>
                            @endif
                        </td>
                        <td class="py-6 px-6 text-center">
                            <span class="inline-block px-3 py-1 bg-[#F8F5F2] rounded-lg font-black text-[#4A3428] text-xs shadow-inner">
                                {{ $order->metode_pembayaran }}
                            </span>
                        </td>
                        <td class="py-6 px-6">
                            <div class="flex justify-center gap-3">
                                    <a href="{{ route('orders.receipt', $order->id) }}"
                                    target="_blank"
                                    class="p-3 bg-white border border-gray-100 text-[#4A3428] rounded-xl hover:bg-[#4A3428] hover:text-[#D9B382] transition-all shadow-sm hover:shadow-md group/btn">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    </a>

                                <a href="{{ route('dashboard.pesanan.edit', $order->id) }}"
                                   class="p-3 bg-white border border-gray-100 text-[#4A3428] rounded-xl hover:bg-[#D9B382] hover:text-[#4A3428] transition-all shadow-sm hover:shadow-md group/btn">
                                   <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                </a>

                                <form action="{{ route('dashboard.pesanan.destroy', $order->id) }}" method="POST"
                                      onsubmit="return confirm('Hapus data pesanan mewah ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="p-3 bg-white border border-gray-100 text-red-400 rounded-xl hover:bg-red-500 hover:text-white transition-all shadow-sm hover:shadow-md">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
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
    @else
    <div class="bg-white rounded-[2.5rem] shadow-xl border border-dashed border-[#D9B382]/30 p-20 text-center">
        <div class="w-20 h-20 bg-[#F8F5F2] rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        </div>
        <p class="text-[#4A3428] font-black uppercase tracking-widest text-sm italic">Belum ada koleksi pesanan masuk</p>
        <p class="text-gray-400 text-xs mt-2">Data transaksi akan muncul di sini setelah pelanggan melakukan checkout.</p>
    </div>
    @endif
</div>
@endsection