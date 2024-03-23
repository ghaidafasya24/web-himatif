@extends('Admin.Partials.layout_admin')
@section('title', 'Tambah Data Gallery')
@section('content')

    <form method="POST" action="{{ route('postdatagallery') }}" enctype="multipart/form-data"
        class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 pt-16 w-full bg-gray-200 h-screen">
        @csrf
        <div class="block ml-10">
            <div class="flex">
                <i class="fa-regular fa-folder mr-3 text-lg"></i>
                <p>Tambah Gallery</p>
            </div>
        </div>
        <div class="mx-10 mt-10">
            <div class="relative w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                    Judul Gallery
                </label>
                <input type="text" name="judul_gallery"
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            <div class="relative w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="deskripsi">
                    Deskripsi
                </label>
                <textarea name="deskripsi" id="deskripsi"
                    class="resize-none appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
            </div>
            <div class="relative w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                    Tanggal Publish
                </label>
                <input name="tanggal_publish" type="date" id="date"
                    class="hb-32 appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            <div class="relative w-full">
                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                    Gambar
                </label>
                <input name="gambar"
                    class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="file_input" type="file">
            </div>
            <div class="w-full bg-gray-200 mt-36">
                <button
                    class="mr-6 bg-blue-500 hover:opacity-80 border-transparant text-white font-semibold py-2 px-10 transition rounded shadow">
                    Back
                </button>
                <button
                    class="bg-green-400 hover:opacity-80 border-transparant font-semibold py-2 px-10 transition rounded shadow">
                    Submit
                </button>
            </div>
        </div>
<<<<<<< HEAD
        <div class="relative w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="deskripsi">
                Deskripsi
            </label>
            <textarea id="deskripsi" class="resize-none appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
        </div>
        <div class="relative w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                Tanggal Publish
            </label>
            <input type="date" class="hb-32 appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
        <div class="relative w-full">
            <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                Gambar
            </label>
            <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="file_input" type="file">
        </div>
        <div class="w-full bg-gray-200 mt-36">
            <button class="mr-6 bg-blue-500 hover:opacity-80 border-transparant text-white font-semibold py-2 px-10 transition rounded shadow">
                Back
            </button>
            <button class="bg-yellow-400 hover:opacity-80 border-transparant font-semibold py-2 px-10 transition rounded shadow">
                Edit
            </button>
        </div>
    </div>
</div>
=======
    </form>
>>>>>>> cdb706be270d904e77f100b9995c78a64083b334

@endsection
