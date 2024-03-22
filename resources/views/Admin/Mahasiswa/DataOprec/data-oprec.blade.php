@extends('Admin.Partials.layout_admin')
@section('title', 'Data Open Requitment')
@section('content')

    <div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
        <div class="block ml-10">
            <div class="flex">
                <i class="fa-regular fa-folder mr-3 text-lg"></i>
                <p>Data Open Requitment</p>
            </div>
            {{-- <button class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                    class="fa-solid fa-plus mr-2"></i>Add Open Requitment</button> --}}
        </div>
        <br>
        <table class="table-auto min-w-full divide-y divide-gray-200 overflow-x-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        NPM</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama Lengkap
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jurusan</th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Divisi Yang
                        Diajukan</th>
                    {{-- <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto CV</th> --}}
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- Data Mahasiswa -->

                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">713220007</td>
                    <td class="px-6 py-4 whitespace-nowrap">Gading Khairlambang</td>
                    <td class="px-6 py-4 whitespace-nowrap">2B</td>
                    <td class="px-6 py-4 whitespace-nowrap">D4 Teknik Informatika</td>
                    <td class="px-6 py-4 whitespace-nowrap">EO</td>
                    {{-- <td class="px-6 py-4 whitespace-nowrap"> </td> --}}
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button"
                            onclick="return window.location.href = '<?php echo route('detaildataoprec'); ?>';"><i
                                class="mr-1 fa-solid fa-pen-to-square"></i>Detail</button>
                        <button class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            type="button" onclick="return window.location.href = '<?php echo route('editdataoprec'); ?>';"><i
                                class="mr-1 fa-solid fa-pen-to-square"></i>Edit</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i
                                class="mr-1 fa-solid fa-trash"></i>Delete</button>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>


@endsection
