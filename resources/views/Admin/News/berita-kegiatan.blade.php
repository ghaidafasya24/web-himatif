@extends('Admin.Partials.layout_admin')
@section('title', 'Data Berita Kegiatan')
@section('content')

<div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
    <div class="block ml-10">
        <div class="flex">
            <i class="fa-regular fa-folder mr-3 text-lg"></i>
            <p>Data Berita Acara</p>
        </div>
        <button class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus mr-2"></i>Add Berita</button>
    </div>
    <div class="ml-4 mr-4">
        <div class="grid grid-cols-3 gap-4">
            <div class="p-4 bg-white rounded-lg shadow-xl flex">
                <img class="mr-2 fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl my-4 rounded-md" src="https://source.unsplash.com/random/100x100?" alt="berita"></img>
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold mt-4">Berita Acara Title</h2>
                    <p>Tanggal</p>
                    <div class="mt-2 flex justify-evenly gap-4">
                        <a href="" class="bg-blue-500 text-white font-semibold py-1 px-3 border border-blue-500 rounded-lg shadow">Detail</a>
                        <a href="" class="bg-yellow-500 text-white font-semibold py-1 px-3 border border-yellow-500 rounded-lg shadow">Edit</a>
                        <a href="" class="bg-red-500 text-white font-semibold py-1 px-3 border border-red-500 rounded-lg shadow">Delete</a>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-xl flex">
                <img class="mr-2 fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl my-4 rounded-md" src="https://source.unsplash.com/random/100x100?" alt="berita"></img>
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold mt-4">Berita Acara Title</h2>
                    <p>Tanggal</p>
                    <div class="mt-2 flex justify-evenly gap-4">
                        <a href="" class="bg-blue-500 text-white font-semibold py-1 px-3 border border-blue-500 rounded-lg shadow">Detail</a>
                        <a href="" class="bg-yellow-500 text-white font-semibold py-1 px-3 border border-yellow-500 rounded-lg shadow">Edit</a>
                        <a href="" class="bg-red-500 text-white font-semibold py-1 px-3 border border-red-500 rounded-lg shadow">Delete</a>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-xl flex">
                <img class="mr-2 fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl my-4 rounded-md" src="https://source.unsplash.com/random/100x100?" alt="berita"></img>
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold mt-4">Berita Acara Title</h2>
                    <p>Tanggal</p>
                    <div class="mt-2 flex justify-evenly gap-4">
                        <a href="" class="bg-blue-500 text-white font-semibold py-1 px-3 border border-blue-500 rounded-lg shadow">Detail</a>
                        <a href="" class="bg-yellow-500 text-white font-semibold py-1 px-3 border border-yellow-500 rounded-lg shadow">Edit</a>
                        <a href="" class="bg-red-500 text-white font-semibold py-1 px-3 border border-red-500 rounded-lg shadow">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection