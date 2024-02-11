{{-- Navbar  --}}
<nav class="border-b-4  p-4">
    <div class="container mx-auto flex justify-around items-center">
        <!-- Logo -->
        <a href="#" class="text-stale-800 transition duration:300 text-lg font-bold">HIMATIF</a>
        <!-- Navigation Links -->
        <div class="space-x-5">
            <a href="{{ url('/') }}" class="text-stale-800 hover:opacity-50 transition duration:300">Home</a>
            <a href="{{ route('visimisi') }}" class="text-stale-800 hover:opacity-50 transition duration:300">Visi dan Misi</a>
            <a href="#" class="text-stale-800 hover:opacity-50 transition duration:300">Struktur Organisasi</a>
            <a href="{{ route('divisi') }}" class="text-stale-800 hover:opacity-50 transition duration:300">Divisi</a>
            <a href="#" class="text-stale-800 hover:opacity-50 transition duration:300">open recruitment</a>
        </div>
    </div>
</nav>

{{-- Navbar end  --}}
