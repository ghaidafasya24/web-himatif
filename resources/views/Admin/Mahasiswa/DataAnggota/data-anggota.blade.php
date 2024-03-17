@extends('Admin.Partials.layout_admin')
@section('title', 'Data Anggota Himatif')
@section('content')

    <div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
        <div class="flex justify-end mb-4 mr-10">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Tambah Mahasiswa</button>
        </div>
        <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        NPM</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama Lengkap</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Divisi</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Data Mahasiswa -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">714220007</td>
                    <td class="px-6 py-4 whitespace-nowrap">Gading Khairlambang</td>
                    <td class="px-6 py-4 whitespace-nowrap">2A</td>
                    <td class="px-6 py-4 whitespace-nowrap">Teknik Informatika</td>
                    <td class="px-6 py-4 whitespace-nowrap">Devteam</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="">Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">713220031</td>
                    <td class="px-6 py-4 whitespace-nowrap">Ghaida Fasya</td>
                    <td class="px-6 py-4 whitespace-nowrap">2B</td>
                    <td class="px-6 py-4 whitespace-nowrap">Teknik Informatika</td>
                    <td class="px-6 py-4 whitespace-nowrap">DevTeam</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai dengan data mahasiswa -->
            </tbody>
        </table>
    </div>


@endsection
