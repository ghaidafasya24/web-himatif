@extends('Admin.Partials.layout_admin')
@section('title', 'Data Gallery')
@section('content')

<div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
    <div class="flex justify-end mb-4 mr-10">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Gambar</button>
    </div>
    <div class="ml-4 mr-4">
        <div class="grid grid-cols-3 gap-4">
            <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col">
                <img class="fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl mb-4 rounded-md" src="https://source.unsplash.com/random/480x360?" alt="berita"></img>
                <h2 class="text-xl font-bold mb-2">Berita Acara Title</h2>
                <p>Description</p>
                <div class="mt-4 flex justify-evenly">
                    <a href="" class="bg-blue-500 text-white font-semibold py-2 px-4 border border-blue-500 rounded-lg shadow">Detail</a>
                    <a href="" class="bg-yellow-500 text-white font-semibold py-2 px-4 border border-yellow-500 rounded-lg shadow">Edit</a>
                    <a href="" class="bg-red-500 text-white font-semibold py-2 px-4 border border-red-500 rounded-lg shadow">Delete</a>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col">
                <img class="fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl mb-4 rounded-md" src="https://source.unsplash.com/random/480x360?" alt="berita"></img>
                <h2 class=" text-xl font-bold mb-2">Berita Acara Title</h2>
                <p>Description</p>
                <div class="mt-4 flex justify-evenly">
                    <a href="" class="bg-blue-500 text-white font-semibold py-2 px-4 border border-blue-500 rounded-lg shadow">Detail</a>
                    <a href="" class="bg-yellow-500 text-white font-semibold py-2 px-4 border border-yellow-500 rounded-lg shadow">Edit</a>
                    <a href="" class="bg-red-500 text-white font-semibold py-2 px-4 border border-red-500 rounded-lg shadow">Delete</a>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col">
                <img class="fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl mb-4 rounded-md" src="https://source.unsplash.com/random/480x360?" alt="berita"></img>
                <h2 class="text-xl font-bold mb-2">Berita Acara Title</h2>
                <p>Description</p>
                <div class="mt-4 flex justify-evenly">
                    <a href="" class="bg-blue-500 text-white font-semibold py-2 px-4 border border-blue-500 rounded-lg shadow">Detail</a>
                    <a href="" class="bg-yellow-500 text-white font-semibold py-2 px-4 border border-yellow-500 rounded-lg shadow">Edit</a>
                    <a href="" class="bg-red-500 text-white font-semibold py-2 px-4 border border-red-500 rounded-lg shadow">Delete</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection