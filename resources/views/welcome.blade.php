@extends('Partials.layout')
@section('title', 'HIMPUNAN MAHASISWA TEKNIK INFORMATIKA')
@section('content')

    {{-- Fitur Home --}}
    <main class="bg-slate-100">
        <div class="py-52 grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <div class="ml-20">
                    <h1 class="text-red-500 font-bold text-7xl">Himpunan<br>Mahasiswa<br>Teknik Informatika</h1>
                    <p class="text-red-500">Universitas Logistik & Bisnis Internasional</p>
                    <button onclick="return window.location.href = '{{ route('oprac') }}'"
                        class="transition mt-10 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out">Join</button>
                </div>
            </div>
            <img src="assets/img/WhatsApp Image 2024-02-11 at 20.10.53_2b93b189.jpg" alt=""
                class="w-11/12 rounded-3xl">
        </div>
        <div class="py-40 grid grid-cols-2 gap-4 bg-white">
            <div class="flex justify-center items-center">
                <img src="assets/img/logo-himatif.png" alt="" class="w-1/2 rounded-3xl ml-20">
            </div>
            <div class="flex items-center">
                <div class="mr-20">
                    <p class="font-bold">Himatif ULBI</p>
                    <h1 class="mt-4 font-bold text-5xl">Himpunan Mahasiswa<br>Teknik Informatika</h1>
                    <p class="mt-10 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident hic
                        sunt labore
                        nostrum dicta, quibusdam itaque ipsam. Ad itaque aliquid aperiam iure similique, vitae architecto
                        placeat, hic cumque earum asperiores perspiciatis labore, dolore odit quam a dolores expedita eius?
                        Delectus eos autem vero aperiam, nostrum placeat quaerat dignissimos deleniti molestiae! Eaque quas
                        quos quam, quis magnam qui adipisci recusandae delectus, fugiat iure, optio fugit maiores ut quae
                        amet aspernatur. Ipsum nesciunt, similique eaque voluptates numquam, quo minima obcaecati laboriosam
                        soluta temporibus, aliquid possimus quidem odit totam! Est deleniti facere, tempore aspernatur
                        doloribus beatae quas, harum sit fugiat, tempora sed odit.</p>
                </div>
            </div>
        </div>
        <div class="py-32">
            <h1 class="text-center text-5xl font-bold">Visi & Misi</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center px-20 mt-16">
                    <h5 class="text-center mb-6 text-xl font-semibold">Visi</h5>
                    <p class="text-justify">Menjadikan himpunan mahasiswa teknik informatika sebagai wadah yang inspiratif,
                        proaktif, dan inklusif untuk
                        mengembangkan potensi mahasiswa teknik informatika serta mendorong inovasi dan kolaborasi
                        didalamnya.
                    </p>
                </div>
                <div class="px-20 mt-16">
                    <h5 class="text-center mb-6 text-xl font-semibold">Misi</h5>
                    <ol class="list-decimal text-justify">
                        <li>
                            Mendorong pengembangan keterampilan teknis dan soft skills mahasiswa melalui workshop, seminar,
                            dan kegiatan
                            pembelajaran berbasis proyek
                        </li>
                        <li>
                            Memperkuat jaringan kerjasama antar anggota himpunan, alumni, dan stakeholder industri guna
                            memfasilitasi peluang magang, kerjasama riset,
                            dan pengembangan karir.
                        </li>
                        <li>
                            Menyelenggarakan acara dan kompetisi berkualitas tinggi yang mengacu kreativitas, inovasi, dan
                            prestasi mahasiswa teknik informatika
                        </li>
                        <li>
                            Menyediakan layanan dan dukungan yang komprehensif bagi mahasiswa, termasuk bimbingan akademis,
                            konseling, dan akses informasi terkini terkait
                            dunia teknologi informasi
                        </li>
                        <li>
                            Mewujudkan lingkungan himpunan yang inlusif, ramah, dan berbasis kekeluargaan guna meningkatkan
                            rasa kepemilikan dan partisipasi anggota
                            dalam berbagai kegiatan
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
    {{-- FItur home end --}}
