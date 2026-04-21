<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Dream Home</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">Hi, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow py-4 text-center text-gray-500">
        &copy; {{ date('Y') }} Dream Home. All rights reserved.
    </footer>

</body>
</html>
