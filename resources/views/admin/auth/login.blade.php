<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | ITENA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        .auth-card {
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(99, 102, 241, 0.1);
        }
        .auth-input {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(99, 102, 241, 0.15);
            transition: all 0.3s ease;
            color: #e2e8f0;
        }
        .auth-input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
            outline: none;
            background: rgba(15, 23, 42, 0.8);
        }
        .auth-input::placeholder {
            color: #64748b;
        }
        .btn-primary {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.4);
        }
        .gold-accent {
            color: #fbbf24;
        }
        .gold-border {
            border-color: rgba(251, 191, 36, 0.2);
        }
        .checkbox-custom {
            accent-color: #6366f1;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        .error-alert {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #fca5a5;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 font-sans antialiased">
    <div class="w-full max-w-md">
        <!-- Card Login -->
        <div class="auth-card rounded-2xl shadow-2xl p-8 md:p-10">
            <!-- Logo / Header -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-indigo-500/10 border border-indigo-500/20 mb-4">
                    <i class="fas fa-code text-3xl text-indigo-400"></i>
                </div>
                <h1 class="text-3xl font-bold text-white tracking-tight">
                    ITENA <span class="gold-accent">Admin</span>
                </h1>
                <p class="text-slate-400 text-sm mt-2">Masuk ke panel administrasi</p>
            </div>

            <!-- Alert Error -->
            @if ($errors->any())
                <div class="error-alert rounded-xl p-4 mb-6 flex items-start gap-3">
                    <i class="fas fa-exclamation-circle text-red-400 mt-0.5"></i>
                    <div class="flex-1">
                        <p class="font-medium text-red-400 text-sm">Gagal masuk</p>
                        <ul class="text-sm text-red-300/80 mt-1 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <!-- Form Login -->
            <form action="{{ route('login-proses') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-envelope mr-2 text-indigo-400"></i>Alamat Email
                    </label>
                    <input 
                        type="email" 
                        id="email"
                        name="email" 
                        value="{{ old('email') }}"
                        placeholder="admin@itena.com" 
                        class="auth-input w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 @error('email') border-red-500/50 @enderror"
                        required 
                        autofocus
                    >
                    @error('email')
                        <p class="text-red-400 text-xs mt-1.5 flex items-center gap-1">
                            <i class="fas fa-circle text-[6px]"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300 mb-2">
                        <i class="fas fa-lock mr-2 text-indigo-400"></i>Kata Sandi
                    </label>
                    <input 
                        type="password" 
                        id="password"
                        name="password" 
                        placeholder="Masukkan kata sandi" 
                        class="auth-input w-full px-4 py-3 rounded-xl text-sm transition-all duration-200 @error('password') border-red-500/50 @enderror"
                        required
                    >
                    @error('password')
                        <p class="text-red-400 text-xs mt-1.5 flex items-center gap-1">
                            <i class="fas fa-circle text-[6px]"></i>{{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2.5 text-sm text-slate-300 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember"
                            class="checkbox-custom rounded border-slate-600"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <span>Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm text-indigo-400 hover:text-indigo-300 transition-colors duration-200">
                        Lupa password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="btn-primary w-full py-3.5 rounded-xl text-white font-semibold text-sm transition-all duration-200 flex items-center justify-center gap-2"
                >
                    <i class="fas fa-sign-in-alt"></i>
                    Masuk ke Dashboard
                </button>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-700/50"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-3 bg-[#1e293b] text-slate-500">Akses Terbatas</span>
                    </div>
                </div>

                <!-- Footer Info -->
                <div class="text-center text-xs text-slate-500 space-y-1">
                    <p>Hanya untuk administrator yang berwenang</p>
                    <p class="text-slate-600">© {{ date('Y') }} ITENA - All rights reserved</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>