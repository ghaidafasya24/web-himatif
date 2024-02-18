@extends('Partials.layout')
@section('title', 'Gallery')
@section('content')

<main class="pt-28">
    <div class="w-full">
        <div class="relative right-0">
            <ul class="relative flex flex-wrap p-1 list-none rounded-xl bg-slate-200 mx-20">
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full py-1 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit">
                        <span class="ml-1">Angkatan</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full py-1 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit">
                        <span class="ml-1">Kegiatan</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a class="z-30 flex items-center justify-center w-full py-1 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit">
                        <span class="ml-1">Proker</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>