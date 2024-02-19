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
                <a href="{{ url('/') }}" class="text-red-500 font-semibold hover:opacity-80 transition duration-300">Home</a>
                <a href="{{ route('news') }}" class="text-red-500 font-semibold hover:opacity-80 transition duration-300">News</a>
                <button class="group relative flex justify-center items-center text-red-500 font-semibold border-0 focus:outline-none">
                    <p>Gallery</p>
                    <div class="pt-1">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ff0000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 14.7071C12.3166 15.0976 11.6834 15.0976 11.2929 14.7071L6.29289 9.70711C5.90237 9.31658 5.90237 8.68342 6.29289 8.29289C6.68342 7.90237 7.31658 7.90237 7.70711 8.29289L12 12.5858L16.2929 8.29289C16.6834 7.90237 17.3166 7.90237 17.7071 8.29289C18.0976 8.68342 18.0976 9.31658 17.7071 9.70711L12.7071 14.7071Z" fill="#ff0000"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="group-focus:block hidden absolute top-full min-w-full w-max bg-white shadow-mb mt-1 rounded">
                        <ul class="border-2 bg-white text-left rounded gap-2">
                            <li><a href="{{ route('gallery') }}" class="pr-6 pl-2 py-1 text-red-500 font-semibold hover-bg-slate-200 hover:opacity-80 transition duration-300">Angkatan</a></li>
                            <li><a href="{{ route('gallery') }}" class="pt-2 pr-6 pl-2 py-1 text-red-500 font-semibold hover-bg-slate-200 hover:opacity-80 transition duration-300">Bebas</a></li>
                            <li><a href="{{ route('gallery') }}" class="pt-2 pr-6 pl-2 py-1 text-red-500 font-semibold hover-bg-slate-200 hover:opacity-80 transition duration-300">Proker</a></li>
                        </ul>
                    </div>
                </button>
                <a href="#" class="text-red-500 font-semibold hover:opacity-80 transition duration-300">Oprec</a>
                <a href="#" class="text-red-500 font-semibold hover:opacity-80 transition duration-300 mr-10">About Us</a>
            </div>
        </div>
    </nav>
</header>

{{-- Navbar end  --}}