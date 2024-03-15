@extends('Admin.Partials.layout_admin')
@section('title', 'Data Event')
@section('content')

<div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
    <div class="flex justify-end mr-10">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Berita</button>
    </div>
    <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-hidden">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-10 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Berita</th>
                <th scope="col" class="px-10 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Terbit</th>
                <th scope="col" class="px-10 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                <th scope="col" class="px-10 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                <th scope="col" class="px-10 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-10 py-2 whitespace-nowrap">Judul Berita 1</td>
                <td class="px-10 py-2 whitespace-nowrap">12 Maret 2024</td>
                <td class="px-10 py-2 whitespace-nowrap">Teknologi</td>
                <td class="px-10 py-2 whitespace-nowrap">John Doe</td>
                <td class="px-10 py-2 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="px-10 py-2 whitespace-nowrap">Judul Berita 1</td>
                <td class="px-10 py-2 whitespace-nowrap">12 Maret 2024</td>
                <td class="px-10 py-2 whitespace-nowrap">Teknologi</td>
                <td class="px-10 py-2 whitespace-nowrap">John Doe</td>
                <td class="px-10 py-2 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="px-10 py-2 whitespace-nowrap">Judul Berita 1</td>
                <td class="px-10 py-2 whitespace-nowrap">12 Maret 2024</td>
                <td class="px-10 py-2 whitespace-nowrap">Teknologi</td>
                <td class="px-10 py-2 whitespace-nowrap">John Doe</td>
                <td class="px-10 py-2 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="px-10 py-2 whitespace-nowrap">Judul Berita 1</td>
                <td class="px-10 py-2 whitespace-nowrap">12 Maret 2024</td>
                <td class="px-10 py-2 whitespace-nowrap">Teknologi</td>
                <td class="px-10 py-2 whitespace-nowrap">John Doe</td>
                <td class="px-10 py-2 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="px-10 py-2 whitespace-nowrap">Judul Berita 1</td>
                <td class="px-10 py-2 whitespace-nowrap">12 Maret 2024</td>
                <td class="px-10 py-2 whitespace-nowrap">Teknologi</td>
                <td class="px-10 py-2 whitespace-nowrap">John Doe</td>
                <td class="px-10 py-2 whitespace-nowrap">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection