<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoBMKG</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 h-[670px] w-[360px] flex flex-col mx-auto my-8 border border-gray-300 rounded-lg shadow-lg">
    <!-- Header -->
    <header class="bg-blue-600 text-white py-3 px-4 flex flex-row justify-center gap-3 items-center shadow-md rounded-t-lg">
        <img src="{{ asset('assets/InfoBMKG.png') }}" alt="Logo">
        <h1 class="text-lg font-semibold">InfoBMKG</h1>
    </header>

    <!-- Main Content -->
    <main class="flex-1 p-4 overflow-y-auto">
        @yield('content')
    </main>

    <!-- Bottom Navigation -->
    <footer class="bg-blue-600 text-white py-3 px-4 flex flex-row justify-center items-center gap-10 shadow-md rounded-b-lg">
        <button class="flex flex-col justify-center items-center" href="#">
            <img src="{{ asset('assets/Home.png') }}" alt="Logo" class="h-6">
            <p class="text-[8px]">Home</p>
        </button>
        <button class="flex flex-col justify-center items-center" href="#">
            <img src="{{ asset('assets/Cuaca.png') }}" alt="Logo" class="h-6">
            <p class="text-[8px]">Cuaca</p>
        </button>
        <button class="flex flex-col justify-center items-center" href="#">
            <img src="{{ asset('assets/Others.png') }}" alt="Logo" class="h-6">
            <p class="text-[8px]">Lainnya</p>
        </button>
        <button class="flex flex-col justify-center items-center" href="#">
            <img src="{{ asset('assets/Earthquake.png') }}" alt="Logo" class="h-6">
            <p class="text-[8px]">Gempa Bumi</p>
        </button>
        <button class="flex flex-col justify-center items-center" href="#">
            <img src="{{ asset('assets/Climate.png') }}" alt="Logo" class="h-6">
            <p class="text-[8px]">Iklim</p>
        </button>
    </footer>    
</body>
</html>