<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0ea5e9', // biru
                        secondary: '#22c55e', // hijau
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-gradient-to-br from-sky-100 to-emerald-100 flex items-center justify-center">

    <div class="w-full max-w-5xl bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Kolom Kiri (Gambar) -->
        <div class="relative hidden md:block">
            <img src="https://images.unsplash.com/photo-1557683316-973673baf926?q=80&w=1200" alt="Login Image"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-sky-600/70 to-emerald-500/70"></div>
            <div class="absolute inset-0 flex flex-col justify-center px-10 text-white">
                <h1 class="text-3xl font-bold mb-4">Selamat Datang</h1>
                <p class="text-sm opacity-90">
                    Masuk untuk melanjutkan ke dashboard aplikasi Anda dengan aman dan nyaman.
                </p>
            </div>
        </div>

        <!-- Kolom Kanan (Form Login) -->
        <div class="flex items-center justify-center p-8">
            <div class="w-full max-w-sm">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Login</h2>
                <p class="text-sm text-gray-500 mb-6">
                    Silakan masuk menggunakan akun Anda
                </p>

                <form method="POST" action="" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Email
                        </label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-sky-400 focus:outline-none"
                            placeholder="email@example.com">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Password
                        </label>
                        <input type="password" name="password" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-emerald-400 focus:outline-none"
                            placeholder="********">
                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember" class="rounded text-sky-500">
                            Ingat saya
                        </label>
                        <a href="#" class="text-sky-600 hover:underline">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Button -->
                    <button type="submit" class="w-full py-2.5 rounded-lg text-white font-semibold
                               bg-gradient-to-r from-sky-500 to-emerald-500
                               hover:from-sky-600 hover:to-emerald-600
                               transition duration-300">
                        Masuk
                    </button>
                </form>

                <p class="text-xs text-center text-gray-500 mt-6">
                    © {{ date('Y') }} Aplikasi Anda
                </p>
            </div>
        </div>

    </div>

</body>

</html>