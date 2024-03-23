@extends('Admin.Partials.layout_admin')
@section('title', 'Data Gallery')
@section('content')

    <div class="overflow-x-hidden md:w-[calc(100%-256px)] md:ml-64 mt-16 w-full">
        <div class="flex items-center justify-between mb-4 mr-10 ml-10">
            <h1 class="font-semibold text-xl">Gallery</h1>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button"
                onclick="return window.location.href = '<?php echo route('tambahdatagallery'); ?>';">
                Add Gambar</button>
        </div>
        @if ($gallery->isEmpty())
            <div class="ml-4 mr-4">
                <p>Belum ada konten</p>
            </div>
        @else
            <div class="ml-4 mr-4">
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($gallery as $item)
                        <div class="p-4 bg-white rounded-lg shadow-xl flex flex-col">
                            <img class="fa-solid fa-comment text-gray-500 dark:text-gray-400 text-4xl mb-4 rounded-md"
                                src="{{ asset('img/gallery/' . $item->gambar) }}" alt="berita" />
                            <h2 class="text-xl font-bold mb-2">{{ $item->judul_gallery }}</h2>
                            <p>Tanggal Publish : {{ $item->tanggal_publish }}</p>
                            {{-- <p>Description</p> --}}
                            <div class="mt-4 flex justify-evenly">
                                <a href="{{ route('detaildatagallery', $item->id) }}"
                                    class="bg-blue-500 text-white font-semibold py-2 px-4 border border-blue-500 rounded-lg shadow">Detail</a>
                                <a href="{{ route('editdatagallery', $item->id) }}"
                                    class="bg-yellow-500 text-white font-semibold py-2 px-4 border border-yellow-500 rounded-lg shadow">Edit</a>

                                <form action="{{ route('deletedatagallery', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Tombol Delete -->
                                    <button type="submit"
                                        class="bg-red-500 text-white font-semibold py-2 px-4 border border-red-500 rounded-lg shadow"
                                        onclick="return confirm('Yakin mau hapus?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


    </div>

@endsection
