<nav class="sticky top-0 z-[100] bg-[#4A3428] border-b border-[#5D4637] px-6 md:px-16 lg:px-24 xl:px-32 py-4 shadow-xl">
    <div class="max-w-[1440px] mx-auto flex items-center justify-between">
        
        <a href="{{ url('/') }}" class="group flex items-center gap-3 relative z-[110]">
           <div class="bg-[#D9B382] p-2 rounded-xl shadow-lg group-hover:bg-[#E7C697] transition-all duration-300">
                <svg class="w-6 h-6 text-[#4A3428]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M4 7l4-3 4 2 4-2 4 3v4h-2v10H6V11H4V7z" />
                </svg>
            </div>

            <div class="flex flex-col">
                <span class="text-xl font-black tracking-tighter text-white leading-none uppercase">Toko</span>
                <span class="text-sm font-bold text-[#D9B382] tracking-[0.2em] leading-none uppercase">Anjay</span>
            </div>
        </a>

        <div class="flex items-center gap-4 sm:hidden relative z-[110]">
            <div class="relative cursor-pointer mr-2">
                <div class="p-2 rounded-xl bg-[#D9B382] text-[#4A3428]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <span class="absolute -top-2 -right-2 bg-white text-[#4A3428] text-[9px] font-black w-4 h-4 flex items-center justify-center rounded-full border border-[#4A3428]">3</span>
            </div>
            
            <button id="menu-toggle" class="p-2 text-[#D9B382] hover:bg-white/10 rounded-xl transition-all">
                <svg id="menu-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <div class="hidden sm:flex items-center gap-10">
            <div class="flex items-center gap-8">
                <a href="/home" class="text-sm font-bold text-[#F3E5D8] hover:text-[#D9B382] transition-colors tracking-wide">HOME</a>
                <a href="#koleksi" class="text-sm font-bold text-[#F3E5D8] hover:text-[#D9B382] transition-colors tracking-wide">PRODUK</a>
            </div>

            <div class="h-8 w-[1px] bg-[#5D4637]"></div>

            <div class="flex items-center gap-6">
                <div class="hidden lg:flex items-center bg-[#3D2B21] border border-[#5D4637] px-4 py-2 rounded-2xl focus-within:ring-2 focus-within:ring-[#D9B382]/30 transition-all">
                    <input type="text" placeholder="Cari Pakaian..." class="bg-transparent border-none outline-none text-xs text-[#F3E5D8] placeholder-[#8B7366] w-32 focus:w-44 transition-all duration-500">
                    <svg class="w-4 h-4 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>

                <div class="relative group cursor-pointer">
                    <div class="p-2.5 rounded-xl bg-[#D9B382] hover:bg-[#E7C697] transition-all shadow-md">
                        <svg class="w-5 h-5 text-[#4A3428]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <span class="absolute -top-2 -right-2 bg-white text-[#4A3428] text-[10px] font-black w-5 h-5 flex items-center justify-center rounded-full border-2 border-[#4A3428] shadow-sm">3</span>
                </div>

               @auth('customer')
                    <div class="relative group">
                        <button class="flex items-center gap-3 bg-[#3D2B21] px-4 py-2 rounded-xl border border-[#5D4637] group-hover:bg-[#4A3428] transition-all">
                            <div class="w-8 h-8 rounded-full bg-[#D9B382] flex items-center justify-center overflow-hidden">
                                <svg class="w-5 h-5 text-[#4A3428]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col text-left">
                                <p class="text-[10px] text-[#D9B382] font-bold leading-none uppercase">Account</p>
                                <p class="text-sm text-white font-black leading-tight">{{ Auth::guard('customer')->user()->username }}</p>
                            </div>
                            <svg class="w-4 h-4 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                       <div class="absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-2xl py-2 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-300 border border-[#D9B382]/20">
    
    <a href="{{ route('customer.profile') }}"
       class="block px-4 py-3 text-sm font-bold text-[#4A3428] hover:bg-[#fdfaf5] hover:text-[#D9B382]">
        👤 Profil Saya
    </a>

    <a href="/orders"
       class="block px-4 py-3 text-sm font-bold text-[#4A3428] hover:bg-[#fdfaf5] hover:text-[#D9B382]">
        📦 Pesanan Saya
    </a>

    <hr class="border-[#D9B382]/10 my-1">

    <form action="{{ route('customer.logout') }}" method="POST">
        @csrf
        <button type="submit"
                class="w-full text-left block px-4 py-3 text-sm font-bold text-red-500 hover:bg-red-50">
            🚪 Logout
        </button>
    </form>
</div>

                    </div>
                @else
                    <a href="{{ url('/customer/login') }}" class="px-8 py-2.5 bg-[#D9B382] text-[#4A3428] font-bold rounded-xl hover:bg-[#E7C697] transition-all text-sm">Login</a>
                    <a href="{{ url('/customer/register') }}" class="px-8 py-2.5 bg-[#D9B382] text-[#4A3428] font-bold rounded-xl hover:bg-[#E7C697] transition-all text-sm">Register</a>
                @endauth
            </div>
        </div>
    </div>

    <div id="mobile-sidebar" class="fixed top-0 right-0 h-full w-[80%] max-w-[300px] bg-[#4A3428] z-[120] translate-x-full transition-transform duration-500 ease-in-out shadow-[-10px_0_30px_rgba(0,0,0,0.2)] flex flex-col">
        <div class="p-6 border-b border-[#5D4637] flex items-center justify-between">
            <span class="text-[#D9B382] font-black tracking-widest uppercase">Menu Utama</span>
            <button id="close-sidebar" class="text-[#D9B382] p-2 hover:bg-white/10 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-6 space-y-6">
            <div class="flex flex-col gap-2">
                <p class="text-[10px] font-black text-[#D9B382]/50 uppercase tracking-[0.2em] mb-2">Navigasi</p>
                <a href="/home" class="flex items-center justify-between group p-4 bg-[#3D2B21] rounded-2xl border border-transparent transition-all">
                    <span class="font-bold text-[#F3E5D8] group-hover:text-[#D9B382]">Beranda</span>
                    <svg class="w-4 h-4 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </a>
                <a href="#koleksi" id="mobile-product-link" class="flex items-center justify-between group p-4 bg-[#3D2B21] rounded-2xl border border-transparent transition-all">
                    <span class="font-bold text-[#F3E5D8] group-hover:text-[#D9B382]">Produk</span>
                    <svg class="w-4 h-4 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

            @auth('customer')
            <div class="flex flex-col gap-2">
                <p class="text-[10px] font-black text-[#D9B382]/50 uppercase tracking-[0.2em] mb-2">Profil Saya</p>
                <div class="bg-[#3D2B21] rounded-3xl p-5 border border-[#5D4637]">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-[#D9B382] flex items-center justify-center text-[#4A3428] font-black text-xl shadow-inner uppercase">
                            {{ (Auth::guard('customer')->user()->username[0]) }}
                        </div>
                        <div class="flex flex-col">
                            <span class="text-white font-black text-lg leading-tight">{{ Auth::guard('customer')->user()->username }}</span>
                            <span class="text-[#D9B382] text-[10px] font-bold uppercase tracking-widest">Premium Member</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-2">

    <a href="{{ route('customer.profile') }}"
       class="flex items-center gap-3 text-sm font-bold text-[#F3E5D8] p-3 hover:bg-[#4A3428] rounded-xl transition-all">
        <span>👤</span> Profil Saya
    </a>

    <a href="/orders"
       class="flex items-center gap-3 text-sm font-bold text-[#F3E5D8] p-3 hover:bg-[#4A3428] rounded-xl transition-all">
        <span>📦</span> Pesanan Saya
    </a>

    <form action="{{ route('customer.logout') }}" method="POST">
        @csrf
        <button type="submit"
                class="w-full flex items-center gap-3 text-sm font-bold text-red-400 p-3 hover:bg-red-500/10 rounded-xl transition-all">
            <span>🚪</span> Keluar Sesi
        </button>
    </form>
</div>

                </div>
            </div>
            @else
            <div class="pt-4 flex flex-col gap-3">
                <a href="{{ url('/customer/login') }}" class="w-full px-6 py-4 bg-[#D9B382] text-[#4A3428] font-black rounded-2xl text-center uppercase tracking-widest hover:bg-[#E7C697] transition-all">Login</a>
                <a href="{{ url('/customer/register') }}" class="w-full px-6 py-4 border-2 border-[#D9B382] text-[#D9B382] font-black rounded-2xl text-center uppercase tracking-widest hover:bg-[#D9B382] hover:text-[#4A3428] transition-all">Register</a>
            </div>
            @endauth
        </div>

        <div class="p-6 bg-[#3D2B21]/50 text-center">
            <p class="text-[10px] text-[#F3E5D8]/40 font-bold uppercase tracking-[0.3em]">Toko Anjay Exclusive &copy; 2026</p>
        </div>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const closeSidebar = document.getElementById('close-sidebar');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const mobileProductLink = document.getElementById('mobile-product-link');

    function openNav() {
        mobileSidebar.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
    }

    function closeNav() {
        mobileSidebar.classList.add('translate-x-full');
        document.body.style.overflow = 'auto';
    }

    menuToggle.addEventListener('click', openNav);
    closeSidebar.addEventListener('click', closeNav);
    mobileProductLink.addEventListener('click', closeNav);

    window.addEventListener('click', (e) => {
        if (!mobileSidebar.contains(e.target) && !menuToggle.contains(e.target)) {
            closeNav();
        }
    });
</script>