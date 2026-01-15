<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-pattern {
            background-color: #fdfaf5;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234a3428' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2v-4h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2v-4h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="bg-pattern min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-[#4A3428] rounded-[2rem] shadow-2xl shadow-[#4A3428]/20 mb-4 rotate-3">
                <svg class="w-10 h-10 text-[#D9B382]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-black text-[#4A3428] tracking-tighter uppercase">Admin Panel</h1>
            <p class="text-[#4A3428]/50 text-sm font-bold tracking-widest uppercase mt-2">hanya admin yang bisa masuk</p>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-[#4A3428]/10 p-10 border border-[#D9B382]/20 relative overflow-hidden">
            <div class="absolute -right-12 -top-12 w-32 h-32 bg-[#D9B382]/10 rounded-full"></div>
            
            <form action="{{ route('login') }}" method="POST" class="space-y-6 relative">
                @csrf

                <div class="space-y-2">
                    <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Email Address</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-5 text-[#D9B382]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                        </span>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full pl-14 pr-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] placeholder:text-gray-300 shadow-inner"
                            placeholder="admin@boutique.com">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-[10px] font-bold mt-1 ml-2 uppercase">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black text-[#4A3428] uppercase tracking-[0.2em] ml-2">Secret Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-5 text-[#D9B382]">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </span>
                        <input type="password" name="password" required
                            class="w-full pl-14 pr-6 py-4 rounded-2xl bg-[#fdfaf5] border-2 border-transparent focus:border-[#D9B382] focus:bg-white outline-none transition-all font-bold text-[#4A3428] placeholder:text-gray-300 shadow-inner"
                            placeholder="••••••••">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-[10px] font-bold mt-1 ml-2 uppercase">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between px-2">
                    <label class="flex items-center text-xs font-bold text-[#4A3428]/60 cursor-pointer">
                        <input type="checkbox" class="mr-2 accent-[#4A3428]"> Ingat Saya
                    </label>
                    <a href="#" class="text-[10px] font-black text-[#D9B382] uppercase tracking-widest hover:text-[#4A3428] transition-colors">Lupa Password?</a>
                </div>

                <button type="submit"
                    class="w-full bg-[#4A3428] text-[#D9B382] font-black py-5 rounded-2xl shadow-xl shadow-[#4A3428]/20 hover:bg-[#3D2B21] transition-all transform hover:-translate-y-1 active:scale-95 flex items-center justify-center gap-3 text-sm tracking-[0.2em]">
                    MASUK KE DASHBOARD
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>
        </div>


        <p class="text-center mt-10 text-[10px] font-black text-[#4A3428]/40 uppercase tracking-[0.3em]">
            &copy; 2026 Toko Baju Anjay Premium
        </p>
    </div>

</body>
</html>