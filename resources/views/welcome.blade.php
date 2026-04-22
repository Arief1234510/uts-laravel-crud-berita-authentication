<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Aplikasi Laravel Saya</h1>
        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-blue-500 underline">Dashboard User</a>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>