<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&display=swap" rel="stylesheet">

<style>
    .font-syne { font-family: 'Syne', sans-serif; }
    .text-outline {
        -webkit-text-stroke: 1px rgba(217, 179, 130, 0.3);
        color: transparent;
    }
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    @keyframes floating {
        0%, 100% { transform: translateY(0) rotate(3deg); }
        50% { transform: translateY(-15px) rotate(6deg); }
    }

    @media (max-width: 768px) {
        .mobile-carousel {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 16px;
            padding-bottom: 20px;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .mobile-carousel::-webkit-scrollbar {
            display: none;
        }
        .testimonial-card {
            min-width: 85vw;
            scroll-snap-align: center;
            margin-top: 0 !important; 
        }
        .stats-grid {
            grid-template-cols: repeat(2, 1fr);
        }
    }

    .testimonial-container {
        scroll-behavior: smooth;
    }
</style>

<section class="py-20 md:py-32 bg-[#2D1B14] relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none select-none overflow-hidden">
        <h1 class="text-[30vw] md:text-[20vw] font-black text-white absolute -left-10 md:-left-20 top-0 leading-none uppercase text-outline">ANJAY</h1>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center lg:items-end justify-between mb-16 md:mb-20 gap-8">
            <div data-aos="fade-right" class="text-center lg:text-left">
                <h2 class="text-[#D9B382] font-black uppercase tracking-[0.5em] text-[10px] md:text-sm mb-4">The Standard</h2>
                <h3 class="text-white text-4xl md:text-7xl font-syne uppercase leading-none">Kenapa Harus<br><span class="text-[#D9B382]">Anjay?</span></h3>
            </div>
            <p class="text-[#F3E5D8]/50 max-w-sm text-base md:text-lg text-center md:text-right" data-aos="fade-left">
                Bukan sekedar belanja, ini soal identitas. Kami mengkurasi produk yang bikin lo tampil beda di tongkrongan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
            <div class="group relative p-1 bg-[#3d2a21] rounded-[2.5rem] md:rounded-[3rem] overflow-hidden transition-all duration-500 hover:-translate-y-4" data-aos="zoom-in-up">
                <div class="absolute top-0 right-0 p-6 md:p-8 opacity-10 group-hover:opacity-20">
                    <span class="text-6xl md:text-8xl font-black text-white">01</span>
                </div>
                <div class="relative z-10 p-8 md:p-10 mt-6 md:mt-10">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-[#D9B382] rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-2xl rotate-12 group-hover:rotate-[360deg] transition-transform duration-700">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-[#4A3428]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <h4 class="text-white text-xl md:text-2xl font-black mb-4 uppercase tracking-tight">Kualitas Gila</h4>
                    <p class="text-[#F3E5D8]/60 leading-relaxed text-sm md:text-base font-medium">Bahan pilihan yang bikin lo ngerasa pake barang jutaan. Awet, nyaman, dan pastinya berkelas.</p>
                </div>
            </div>

            <div class="group relative p-1 bg-[#D9B382] rounded-[2.5rem] md:rounded-[3rem] overflow-hidden transition-all duration-500 hover:-translate-y-4 shadow-xl shadow-[#D9B382]/10" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 p-6 md:p-8 opacity-20">
                    <span class="text-6xl md:text-8xl font-black text-[#4A3428]">02</span>
                </div>
                <div class="relative z-10 p-8 md:p-10 mt-6 md:mt-10">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-[#4A3428] rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-2xl -rotate-12 group-hover:rotate-0 transition-transform duration-500">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="text-[#4A3428] text-xl md:text-2xl font-black mb-4 uppercase tracking-tight">Anjay Fast</h4>
                    <p class="text-[#4A3428]/70 leading-relaxed text-sm md:text-base font-bold">Gak pake lama. Pesanan lo diproses kilat karena kami tau lo udah gak sabar pengen tampil keren.</p>
                </div>
            </div>

            <div class="group relative p-1 bg-[#3d2a21] rounded-[2.5rem] md:rounded-[3rem] overflow-hidden transition-all duration-500 hover:-translate-y-4" data-aos="zoom-in-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 p-6 md:p-8 opacity-10 group-hover:opacity-20">
                    <span class="text-6xl md:text-8xl font-black text-white">03</span>
                </div>
                <div class="relative z-10 p-8 md:p-10 mt-6 md:mt-10">
                    <div class="w-12 h-12 md:w-14 md:h-14 bg-[#D9B382] rounded-2xl flex items-center justify-center mb-6 md:mb-8 shadow-2xl rotate-6 group-hover:-scale-110 transition-transform duration-500">
                        <svg class="w-6 h-6 md:w-7 md:h-7 text-[#4A3428]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4 class="text-white text-xl md:text-2xl font-black mb-4 uppercase tracking-tight">Full Garansi</h4>
                    <p class="text-[#F3E5D8]/60 leading-relaxed text-sm md:text-base font-medium">Barang cacat? Ukuran gak pas? Santai, tim Anjay bakal bantu tukar tanpa ribet sama sekali.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bg-[#2D1B14] py-10 md:py-12 border-y border-white/5">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4">
            <div class="text-center" data-aos="fade-up">
                <p class="text-[#D9B382] text-3xl md:text-4xl font-syne mb-1">50K+</p>
                <p class="text-white/40 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Followers Loyal</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <p class="text-[#D9B382] text-3xl md:text-4xl font-syne mb-1">12K+</p>
                <p class="text-white/40 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Produk Terjual</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <p class="text-[#D9B382] text-3xl md:text-4xl font-syne mb-1">4.9</p>
                <p class="text-white/40 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Bintang Ulasan</p>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <p class="text-[#D9B382] text-3xl md:text-4xl font-syne mb-1">100%</p>
                <p class="text-white/40 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Originalitas</p>
            </div>
        </div>
    </div>
</div>

<section class="py-20 md:py-32 bg-[#F3E5D8] overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12 md:mb-20" data-aos="fade-up">
            <h3 class="text-3xl md:text-6xl font-syne text-[#4A3428] uppercase tracking-tighter">Solid <span class="text-[#D9B382]">Customer</span></h3>
            <p class="mt-4 text-[#4A3428]/60 font-bold uppercase tracking-widest text-[10px] md:text-xs px-4">Testimoni nyata dari mereka yang udah naik kelas</p>
        </div>

        <div class="mobile-carousel md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 testimonial-container">
            <div class="testimonial-card bg-white p-8 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] shadow-xl border border-[#4A3428]/5 flex flex-col justify-between group hover:bg-[#4A3428] transition-all duration-500" data-aos="fade-up">
                <p class="text-lg md:text-xl text-[#4A3428] group-hover:text-white transition-colors leading-relaxed font-bold italic">"Gila sih, barangnya beneran sesuai foto. Pas dipake langsung ngerasa ganteng maksimal. Anjay bgt!"</p>
                <div class="flex items-center gap-4 mt-8 md:mt-12 border-t pt-6 md:pt-8 border-[#4A3428]/10 group-hover:border-white/10">
                    <img src="https://ui-avatars.com/api/?name=Rizky+M&background=4A3428&color=D9B382" class="w-12 h-12 md:w-14 md:h-14 rounded-2xl" alt="">
                    <div>
                        <h4 class="text-[#4A3428] group-hover:text-white font-black text-base md:text-lg text-nowrap">Rizky Maulana</h4>
                        <p class="text-[#D9B382] text-[10px] font-bold uppercase tracking-tighter">Verified Buyer</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card bg-white p-8 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] shadow-xl border border-[#4A3428]/5 flex flex-col justify-between group hover:bg-[#4A3428] transition-all duration-500 md:mt-12" data-aos="fade-up" data-aos-delay="100">
                <p class="text-lg md:text-xl text-[#4A3428] group-hover:text-white transition-colors leading-relaxed font-bold italic">"Pelayanan adminnya gercep parah. Nanya malem-malem tetep dijawab ramah. Sukses terus Toko Anjay!"</p>
                <div class="flex items-center gap-4 mt-8 md:mt-12 border-t pt-6 md:pt-8 border-[#4A3428]/10 group-hover:border-white/10">
                    <img src="https://ui-avatars.com/api/?name=Bagas+K&background=4A3428&color=D9B382" class="w-12 h-12 md:w-14 md:h-14 rounded-2xl" alt="">
                    <div>
                        <h4 class="text-[#4A3428] group-hover:text-white font-black text-base md:text-lg text-nowrap">Bagas Kurnia</h4>
                        <p class="text-[#D9B382] text-[10px] font-bold uppercase tracking-tighter">Verified Buyer</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card bg-white p-8 md:p-12 rounded-[2.5rem] md:rounded-[3.5rem] shadow-xl border border-[#4A3428]/5 flex flex-col justify-between group hover:bg-[#4A3428] transition-all duration-500 lg:mt-24" data-aos="fade-up" data-aos-delay="200">
                <p class="text-lg md:text-xl text-[#4A3428] group-hover:text-white transition-colors leading-relaxed font-bold italic">"Akhirnya nemu toko yang jujur sama bahan. Pengiriman ke Papua cuma 3 hari. Gak ada obat!"</p>
                <div class="flex items-center gap-4 mt-8 md:mt-12 border-t pt-6 md:pt-8 border-[#4A3428]/10 group-hover:border-white/10">
                    <img src="https://ui-avatars.com/api/?name=Fikri+H&background=4A3428&color=D9B382" class="w-12 h-12 md:w-14 md:h-14 rounded-2xl" alt="">
                    <div>
                        <h4 class="text-[#4A3428] group-hover:text-white font-black text-base md:text-lg text-nowrap">Fikri Haikal</h4>
                        <p class="text-[#D9B382] text-[10px] font-bold uppercase tracking-tighter">Verified Buyer</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex justify-center gap-2 mt-8 md:hidden">
            <div class="w-8 h-1 bg-[#4A3428] rounded-full"></div>
            <div class="w-2 h-1 bg-[#4A3428]/20 rounded-full"></div>
            <div class="w-2 h-1 bg-[#4A3428]/20 rounded-full"></div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-[#F3E5D8] px-4">
    <div class="container mx-auto max-w-6xl">
        <div class="relative bg-[#2D1B14] rounded-[3rem] md:rounded-[4rem] p-8 md:p-20 overflow-hidden shadow-2xl shadow-black/40" data-aos="zoom-in">
            <div class="absolute -bottom-10 -right-10 w-48 h-48 md:w-64 md:h-64 bg-[#D9B382]/10 rounded-full floating pointer-events-none"></div>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-10 md:gap-12 relative z-10">
                <div class="text-center lg:text-left space-y-4 md:space-y-6">
                    <span class="inline-block px-4 py-1.5 md:px-5 md:py-2 rounded-full bg-white/5 border border-white/10 text-[#D9B382] text-[10px] md:text-xs font-bold tracking-[.3em] uppercase">Need Talk?</span>
                    <h2 class="text-white text-4xl md:text-7xl font-syne leading-[0.9]">Tanya <span class="text-[#D9B382]">Admin</span> <br class="hidden md:block">Anjay Aja.</h2>
                    <p class="text-[#F3E5D8]/50 text-base md:text-lg max-w-md font-medium">Bingung pilih model atau mau custom order? Admin kami stand-by 24/7 buat bantuin lo.</p>
                </div>

                <div class="flex flex-col gap-4 w-full lg:w-auto">
                    <a href="https://wa.me/628123456789" target="_blank" 
                        class="px-8 py-5 md:px-12 md:py-6 bg-[#D9B382] text-[#2D1B14] font-black rounded-2xl md:rounded-3xl flex items-center justify-center gap-4 hover:scale-105 active:scale-95 transition-all shadow-xl shadow-[#D9B382]/20">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        WHATSAPP ADMIN
                    </a>
                    <a href="mailto:admin@tokoanjay.com" 
                        class="px-8 py-5 md:px-12 md:py-6 border-2 border-[#D9B382] text-[#D9B382] font-black rounded-2xl md:rounded-3xl text-center hover:bg-white/5 transition-colors text-sm md:text-base">
                        EMAIL ADMIN
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    const carousel = document.querySelector('.testimonial-container');
    let isMobile = window.innerWidth <= 768;

    if (isMobile && carousel) {
        let scrollAmount = 0;
        const step = carousel.offsetWidth * 0.85; 
        
        setInterval(() => {
            if (carousel.scrollLeft >= (carousel.scrollWidth - carousel.offsetWidth - 10)) {
                carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: step, behavior: 'smooth' });
            }
        }, 3500);
    }
</script>