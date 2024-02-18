{{-- Navbar  --}}
<header>
    <nav class="fixed top-0 z-10 w-full border-b-4 py-4 bg-white">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-red-500 transition duration-300 text-lg font-bold flex items-center pl-20">
                <img src="assets/img/logo-himatif.png" alt="" class="w-16 mr-4">Himatif
            </a>
            <!-- Navigation Links -->
            <div class="space-x-10 pr-20">
                <a href="{{ url('/') }}" class="text-red-500 font-bold hover:opacity-50 transition duration-300">Home</a>
                <a href="{{ route('news') }}" class="text-red-500 font-bold hover:opacity-50 transition duration-300">News</a>
                <a href="{{ route('gallery') }}" class="text-red-500 font-bold hover:opacity-50 transition duration-300">Gallery</a>
                <a href="#" class="text-red-500 font-bold hover:opacity-50 transition duration-300">Oprec</a>
                <a href="#" class="text-red-500 font-bold hover:opacity-50 transition duration-300 mr-10">About Us</a>
            </div>
        </div>
    </nav>
</header>

{{-- Navbar end  --}}