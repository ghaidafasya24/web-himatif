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
                    <button
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
                    <p class="font-bold">Himatif Ulbi</p>
                    <h1 class="mt-4 font-bold text-5xl">Himpunan Mahasiswa<br>Teknik Informatika Ulbi</h1>
                    <p class="mt-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident hic sunt labore
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
                    <p>Menjadi program studi yang unggul secara nasional di bidang teknologi informasi yang mendukung bidang
                        logistik dan manajemen rantai pasok pada tahun 2020</p>
                </div>
                <div class="px-20 mt-16">
                    <h5 class="text-center mb-6 text-xl font-semibold">Misi</h5>
                    <ol class="list-decimal">
                        <li>Menghasilkan Tenaga Professional di bidang teknologi informasi dan Komunikasi (TIK)</li>
                        <li>Menerapkan ilmu pengetahuan dan TIK yang relevan dengan peningkatan layanan TIK di industri
                            logistik</li>
                        <li>Melakukan pengabdian kepada masyarakat untuk memenuhi kebutuhan industrialisasi dan meningkatkan
                            kesejahteraan masyarakat dengan pembekalan ilmu pengetahuan dan teknologi</li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
    {{-- FItur home end --}}


    <footer>
        <section class="bg-white">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                            Home
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                            News
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                            Gallery
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                            Oprec
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                            About Us
                        </a>
                    </div>
                </div>
                <p class="text-base leading-6 font-medium text-gray-500">
                <div class="flex justify-center mt-8 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base leading-6 text-center text-gray-400">© 2023 DevTeam. Himpunan Mahasiswa Teknik
                    Informatika</p>
            </div>
        </section>
    </footer>
