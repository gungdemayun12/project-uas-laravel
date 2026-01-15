@extends('layouts.app')

@section('title', 'Checkout - ' . $product->nama_produk)

@section('content')
<section class="bg-[#fdfaf5] min-h-screen py-6 md:py-12">
    <div class="container mx-auto px-4 md:px-16 lg:px-24 xl:px-32">
        
        <div class="flex items-center justify-center mb-8 md:mb-12">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-[#4A3428] text-[#D9B382] flex items-center justify-center text-xs font-black shadow-lg">1</div>
                <span class="text-[#4A3428] font-black text-xs uppercase tracking-widest">Detail</span>
                <div class="w-8 h-[2px] bg-[#D9B382]/30"></div>
                <div class="w-8 h-8 rounded-full bg-white border-2 border-[#D9B382]/30 text-[#D9B382]/30 flex items-center justify-center text-xs font-black">2</div>
                <span class="text-[#4A3428]/30 font-black text-xs uppercase tracking-widest">Selesai</span>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">

            <div class="w-full lg:w-2/3 order-2 lg:order-1">
                <div class="bg-white rounded-[2.5rem] p-6 md:p-12 shadow-[0_20px_50px_-20px_rgba(74,52,40,0.1)] border border-[#D9B382]/20">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="hidden md:flex w-14 h-14 bg-[#4A3428] rounded-2xl items-center justify-center text-[#D9B382] transform rotate-3 shadow-xl">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div>
                            <h2 class="text-2xl md:text-3xl font-black text-[#4A3428] tracking-tighter">Informasi Pengiriman</h2>
                            <p class="text-[#4A3428]/50 text-xs md:text-sm font-medium">Pastikan data yang Anda masukkan sudah benar.</p>
                        </div>
                    </div>

                    @if(session('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Pesanan Berhasil!',
                                text: '{{ session('success') }}',
                                confirmButtonColor: '#4A3428',
                                confirmButtonText: 'SIPP!'
                            });
                        </script>
                    @endif

                    <form action="{{ route('order.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">Nama Penerima</label>
                                <input type="text" name="nama_pemesan" placeholder="Nama Lengkap" required
                                    class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white transition-all outline-none font-bold text-[#4A3428] placeholder:text-gray-300">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">No. WhatsApp</label>
                                <input type="text" name="no_hp" placeholder="08xxxx" required
                                    class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white transition-all outline-none font-bold text-[#4A3428] placeholder:text-gray-300">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">Alamat Lengkap</label>
                            <textarea name="alamat" rows="3" placeholder="Jl. Nama Jalan, No. Rumah, Kota, dsb..." required
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white transition-all outline-none font-medium text-[#4A3428] placeholder:text-gray-300 resize-none leading-relaxed"></textarea>
                        </div>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">Ukuran</label>
                                <div class="relative">
                                    <select name="ukuran" required
                                        class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] appearance-none focus:bg-white transition-all outline-none font-bold text-[#4A3428]">
                                        <option value="">Pilih</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                    <div class="absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none text-[#D9B382]">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">Jumlah</label>
                                <input type="number" name="jumlah" value="1" min="1" max="{{ $product->stok }}" required
                                    class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white transition-all outline-none font-bold text-[#4A3428]">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.2em] ml-1">Catatan Pesanan</label>
                            <textarea name="catatan" rows="2" placeholder="Contoh: Titip di satpam (Opsional)" 
                                class="w-full px-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white transition-all outline-none font-medium text-[#4A3428] placeholder:text-gray-300 resize-none"></textarea>
                        </div>

                        <div class="space-y-4 pt-4">
                            <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-1">Pilih Metode Pembayaran</label>
                            <label class="flex items-center gap-4 p-5 rounded-3xl bg-[#fdfaf5] border-2 border-[#D9B382] cursor-pointer hover:bg-white transition-all shadow-sm active:scale-[0.98]">
                                <input type="radio" name="metode_pembayaran" value="cod" checked required class="w-6 h-6 accent-[#4A3428]">
                                <div class="flex-1">
                                    <p class="font-black text-[#4A3428] text-base md:text-lg uppercase italic leading-none">Cash On Delivery (COD)</p>
                                    <p class="text-[11px] md:text-xs text-[#4A3428]/60 font-medium mt-1">Bayar aman di tempat saat kurir sampai.</p>
                                </div>
                                <div class="text-[#D9B382]">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.3-.25.64-.25 1.01 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                </div>
                            </label>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="group w-full bg-[#4A3428] text-[#D9B382] font-black py-6 rounded-[2rem] shadow-2xl shadow-[#4A3428]/40 hover:bg-[#2d1f18] transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-4 text-lg md:text-xl tracking-tighter">
                                SELESAIKAN PESANAN
                                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="w-full lg:w-1/3 order-1 lg:order-2">
                <div class="lg:sticky lg:top-24">
                    <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-2xl border border-[#D9B382]/20">
                        <div class="relative h-56 md:h-72 lg:h-64 overflow-hidden group">
                            <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#4A3428] via-transparent to-transparent opacity-80"></div>
                            <div class="absolute bottom-6 left-6 right-6">
                                <span class="bg-[#D9B382] text-[#4A3428] text-[9px] font-black px-3 py-1 rounded-lg uppercase tracking-widest shadow-lg">Premium Quality</span>
                                <h3 class="text-white text-2xl font-black mt-2 tracking-tighter leading-tight">{{ $product->nama_produk }}</h3>
                            </div>
                        </div>

                        <div class="p-8">
                            <h4 class="text-[10px] font-black text-[#D9B382] uppercase tracking-[0.3em] mb-4">Ringkasan Pembayaran</h4>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400 text-xs font-bold uppercase tracking-widest">Harga Barang</span>
                                    <span class="text-[#4A3428] text-lg font-black">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-400 text-xs font-bold uppercase tracking-widest">Biaya Kirim</span>
                                    <div class="flex items-center gap-1.5">
                                        <span class="text-gray-300 line-through text-xs font-bold italic">Rp 25.000</span>
                                        <span class="text-green-500 font-black text-xs uppercase tracking-tighter">GRATIS</span>
                                    </div>
                                </div>
                                
                                <div class="border-t border-dashed border-gray-100 pt-4 mt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-[#4A3428] font-black text-sm uppercase tracking-tighter">Total Estimasi</span>
                                        <div class="text-right">
                                            <p class="text-[#4A3428] text-2xl font-black tracking-tighter leading-none">
                                                Rp {{ number_format($product->harga, 0, ',', '.') }}
                                            </p>
                                            <p class="text-[9px] text-gray-400 font-bold mt-1 uppercase italic">*Sudah termasuk pajak</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 grid grid-cols-2 gap-3">
                                <div class="flex items-center gap-2 p-3 bg-[#fdfaf5] rounded-xl border border-[#D9B382]/10">
                                    <svg class="w-4 h-4 text-[#D9B382]" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                    <span class="text-[9px] font-black text-[#4A3428]/60 uppercase tracking-tighter leading-tight">Fast Shipping</span>
                                </div>
                                <div class="flex items-center gap-2 p-3 bg-[#fdfaf5] rounded-xl border border-[#D9B382]/10">
                                    <svg class="w-4 h-4 text-[#D9B382]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 4.925-3.467 9.47-8 10.655-4.533-1.184-8-5.73-8-10.655 0-.68.056-1.35.166-2.001zm8 10.45a1.6 1.6 0 100-3.2 1.6 1.6 0 000 3.2z" clip-rule="evenodd"></path></svg>
                                    <span class="text-[9px] font-black text-[#4A3428]/60 uppercase tracking-tighter leading-tight">Secure Transaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection