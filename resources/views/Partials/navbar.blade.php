{{-- Navbar  --}}
<header>
    <nav class="fixed top-0 z-10 w-full border-b-4 py-4 bg-white">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="text-red-500 transition duration-300 text-lg font-bold flex items-center pl-20">
                <img src="assets/img/logo-himatif.png" alt="" class="w-16 mr-4">Himatif
            </a>
            <!-- Navigation Links -->
            <div class="space-x-5 pr-20 flex">
                <a href="{{ url('/') }}"
                    class="text-red-500 font-semibold hover:opacity-80 transition duration-300">Home</a>
                <a href="{{ route('news') }}"
                    class="text-red-500 font-semibold hover:opacity-80 transition duration-300">News</a>
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button"
                            class="group relative flex justify-center items-center text-red-500 font-semibold border-0 focus:outline-none"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Docs
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div id="gambar"
                        class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="{{ route('bebas') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1" id="menu-item-1">Gallery</a>
                            <a href="{{ route('proker') }}" class="text-gray-700 block px-4 py-2 text-sm"
                                role="menuitem" tabindex="-1" id="menu-item-2">Dokumentasi Materi</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('oprac') }}"
                    class="text-red-500 font-semibold hover:opacity-80 transition duration-300">Oprec</a>
                <a href="{{ route('aboutus') }}"
                    class="text-red-500 font-semibold hover:opacity-80 transition duration-300 mr-10">About Us</a>
            </div>
        </div>
    </nav>
</header>

{{-- Navbar end  --}}
