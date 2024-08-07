<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pendukung Keputusan Rekrutmen Bidan dengan Metode Profile Matching')</title>
    <script src="{{asset('assets/tailwind.js')}}"></script>
    <link href="{{asset('assets/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fa-solid-900.woff2')}}" rel="stylesheet">
    <link href="{{asset('assets/fa-solid-900.ttf')}}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                <a href="{{ Auth::check() ? route('dashboard') : url('/') }}" class="flex items-center py-4 px-2">
                    <i class="fas fa-user-md text-green-500 text-2xl mr-2"></i>
                    <span class="font-semibold text-gray-500 text-lg">SPK Rekrutmen Bidan</span>
                </a>
                </div>


                @auth
                <!-- Menu Items -->
                <div class="flex items-center space-x-4">
                    <a href="{{url('/kriteria')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Kriteria</a>
                    <a href="{{url('/subkriteria')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Sub Kriteria</a>
                    <a href="{{url('/penilaian')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Penilaian</a>
                    <a href="{{url('/penilaian/all')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Hasil Penilaian</a>
                </div>
                @endauth

                
                <!-- Authentication Links -->
                <div class="flex items-center space-x-1">
                    @auth
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-gray-200 transition duration-300">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto mt-8 px-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>&copy; 2024 Sistem Pakar Rekrutmen Bidan. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
