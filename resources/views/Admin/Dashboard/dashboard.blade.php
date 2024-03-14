@extends('Admin.Partials.layout_admin')
@section('title', 'Dashboard Admin')
@section('content')

<section id="dashboard">
    <div class="bg-gray-800 lg:ml-[300px] p-10  lg:flex justify-between">
        <div class="text-center mb-3">
            <h1 class="text-white p-2 text-xl">Dashboard</h1>
            <p class="text-gray-100 p-2 text-sm">Welcome Admin</p>
        </div>
        <div class="flex items-center gap-5 justify-center">
            <a class="text-white border p-3 rounded-full hover:bg-blue-500 hover:border-blue-500 transition duration-300 ease-in-out" href="">Add Balance</a>
            <a class="text-white border p-3 rounded-full hover:bg-blue-500 hover:border-blue-500 transition duration-300 ease-in-out" href="">Add device</a>
        </div>
    </div>
    <div class="lg:ml-[300px] lg:flex justify-around mt-[-40px] p-5">
        <div class="p-5 flex bg-white rounded-2xl mb-5 lg:mb-[-20px]">
            <i class="bi bi-wallet text-white border p-4 rounded-xl bg-blue-800 border-blue-800"></i>
            <div class="ml-3 mr-16">
                <h1>Balance</h1>
                <h2>Rp35.604</h2>
            </div>
        </div>
        <div class="p-5 flex bg-white rounded-2xl mb-5 lg:mb-[-20px]">
            <i class="bi bi-phone text-white border p-4 rounded-xl bg-blue-500 border-blue-500"></i>
            <div class="ml-3 mr-16">
                <h1>Active Devices</h1>
                <h2>0</h2>
            </div>
        </div>
        <div class="p-5 flex bg-white rounded-2xl mb-5 lg:mb-[-20px]">
            <i class="bi bi-envelope-fill text-white border p-4 rounded-xl bg-green-600 border-grebg-green-600"></i>
            <div class="ml-3 mr-16">
                <h1>Total Messages</h1>
                <h2>0</h2>
            </div>
        </div>
        <div class="p-5 flex bg-white rounded-2xl mb-5 lg:mb-[-20px]">
            <i class="bi bi-person-lines-fill text-white border p-4 rounded-xl bg-purple-500 border-purpbg-purple-500"></i>
            <div class="ml-3 mr-16">
                <h1>Contacts</h1>
                <h2>1</h2>
            </div>
        </div>
    </div>
    <div class="lg:ml-[300px] p-8">
        <div class="bg-white pl-9 py-5 rounded-xl border-l-8 border-red-500">
            <p class="text-sm">Halo Sahabat RuangWA. <br>Mohon maaf atas kendala yang terjadi. saat ini server utama kami sudah normal kembali. <br>Sebagai kompensasinya kami akan memberikan perpanjangan masa aktif device selama 1 bulan secara gratis. Silahkan bisa di cek di menu Device. <br>Sekali lagi kami atas nama TimRuangWA mohon maaf yang sebesar-besarnya atas kendala yang terjadi saat ini. <br>Terima kasih untuk kerjasamanya dan kesabarannya</p>
        </div>
        <div class="bg-white pl-9 py-5 rounded-xl border-l-8 mt-5 border-green-500">
            <p class="text-sm">Promo Deposit. <br>deposit minimal Rp. 1.000.000 free saldo 50% terbatas untuk 10 member saja sampai tanggal 31 juli 2023. Promo sampai slow terpenuhi karena slot terbatas. Ayo buruan tambah saldo kalian!!</p>
        </div>
        <div class="bg-white pl-9 py-5 rounded-xl border-l-8 mt-5 border-blue-800">
            <p class="text-sm">Saat ini kami sudah menyelesaikan permasalahan pada QR Code. ini dikarenakan ada update versi core Whatsapp. Sebelumnya kami mohon maaf atas ketidak nyamanan ini. Terima kasih atas pengertian dan kesabarannya</p>
        </div>
        <div class="bg-white pl-9 py-5 rounded-xl border-l-8 mt-5 border-blue-500">
            <ul class="list-disc pl-4">
                <li>Silahkan Scan QRCode kembali apabila status device Disconnected</li>
                <li>Send Button untuk saat ini tidak bisa digunakan sampai ada informasi lebih lanjut. Mohon maaf atas ketidak nyamanan ini.</li>
            </ul>
        </div>
    </div>
    <div class="lg:ml-[300px] px-8">
        <div class="p-5 bg-white rounded-2xl">
            <h1 class="px-4">Readme</h1>
            <div class="border-t border-gray-300 mt-4"></div>
            <div class="w-full lg:grid lg:grid-cols-[1fr_3fr] lg:p-5">
                <div class="w-full text-base">
                    <a id="awal" class="block rounded-lg py-6 px-16 bg-gray-200 text-center hover:bg-purple-400 hover:text-white transition duration-300 ease-in-out"><i class="bi bi-question-circle flex items-center justify-center"></i>Langkah Awal</a>
                    <a id="des" class="block rounded-lg py-6 px-16 mt-3 bg-gray-200 text-center hover:bg-purple-400 hover:text-white transition duration-300 ease-in-out"><i class="bi bi-exclamation-circle flex items-center justify-center"></i>Desclaimer</a>
                    <a id="inf" class="block rounded-lg py-6 px-16 mt-3 bg-gray-200 text-center hover:bg-purple-400 hover:text-white transition duration-300 ease-in-out"><i class="bi bi-megaphone-fill flex items-center justify-center"></i>Informasi</a>
                    <a id="hub" class="block rounded-lg py-6 px-16 mt-3 bg-gray-200 text-center hover:bg-purple-400 hover:text-white transition duration-300 ease-in-out"><i class="bi bi-headset flex items-center justify-center"></i>Hubungi Kami</a>
                </div>
                <div class="lg:ml-8 mt-5">
                    <div id="langkah-awal" class="">
                        <div class="border p-5 w-full rounded-lg bg-gray-200">
                            <div class="text-purple-700 flex">
                                <i class="bi bi-box-seam"></i>
                                <h1 class="ml-2 lg:mr-80 text-sm">Langkah 1: Tambah Saldo</h1>
                                <a id="tombol1" class="ml-auto cursor-pointer">
                                    <i class="bi bi-plus"></i>
                                </a>
                                <a id="tombol-1" class="hidden ml-auto cursor-pointer">
                                    <i class="bi bi-dash"></i>
                                </a>
                            </div>
                            <div id="langkah1" class="hidden transition-all duration-300 ease-in-out">
                                <div class="border-t border-gray-300 mt-4"></div>
                                <p class="text-sm mt-5">RuangWA menggunakan sistem saldo untuk menambahkan device dan memperpanjang status device. Klik <a class="border p-3 rounded-full inline-block hover:opacity-80 border-blue-400 bg-blue-400 text-white transition duration-300 ease-in-out" href="#">Add Balance</a> untuk menambahkan saldo anda.</p>
                            </div>
                        </div>
                        <div class="border p-5 mt-5 rounded-lg bg-gray-200">
                            <div class="flex items-center text-purple-700">
                                <i class="bi bi-box-seam"></i>
                                <h1 class="ml-2 lg:mr-80 text-sm">Langkah 2: Tambah Device</h1>
                                <a id="tombol2" class="ml-auto cursor-pointer">
                                    <i class="bi bi-plus"></i>
                                </a>
                                <a id="tombol-2" class="hidden ml-auto cursor-pointer">
                                    <i class="bi bi-dash"></i>
                                </a>
                            </div>
                            <div id="langkah2" class="hidden">
                                <div class="border-t border-gray-300 mt-4"></div>
                                <p class="text-sm mt-5">Setelah saldo mencukupi untuk menambahkan devices. Silahkan menambahkan device dengan cara klik <a class="border p-3 rounded-full inline-block hover:opacity-80 bg-blue-400 border-blue-400 text-white" href="">Add Device</a> untuk menambahkan device anda.</p>
                            </div>
                        </div>
                        <div class="border p-5 mt-5 rounded-lg bg-gray-200">
                            <div class="flex items-center text-purple-700">
                                <i class="bi bi-box-seam"></i>
                                <h1 class="ml-2 lg:mr-80 text-sm">Langkah 3: Scan QR Code</h1>
                                <a id="tombol3" class="ml-auto cursor-pointer">
                                    <i class="bi bi-plus"></i>
                                </a>
                                <a id="tombol-3" class="hidden ml-auto cursor-pointer">
                                    <i class="bi bi-dash"></i>
                                </a>
                            </div>
                            <div id="langkah3" class="hidden">
                                <div class="border-t border-gray-300 mt-4"></div>
                                <p class="text-sm mt-5">Setelah device sudah dibuat. kemudian scan QRCode pada halaman device <a href="" class="text-blue-600">Klik disini</a> untuk masuk ke halaman device lalu klik tombol view.</p>
                            </div>
                        </div>
                        <div class="border p-5 mt-5 rounded-lg bg-gray-200">
                            <div class="flex items-center text-purple-700">
                                <i class="bi bi-box-seam"></i>
                                <h1 class="ml-2 lg:mr-80 text-sm">Langkah 4: Setting Default Sender</h1>
                                <a id="tombol4" class="ml-auto cursor-pointer">
                                    <i class="bi bi-plus"></i>
                                </a>
                                <a id="tombol-4" class="hidden ml-auto cursor-pointer ">
                                    <i class="bi bi-dash"></i>
                                </a>
                            </div>
                            <div id="langkah4" class="hidden">
                                <div class="border-t border-gray-300 mt-4"></div>
                                <p class="text-sm mt-5">Apabila sudah scan QRCode dan status "Connected" silahkan setting default sender. <a href="" class="text-blue-600">Klik disini</a> untuk masuk ke halaman setting default sender</p>
                            </div>
                        </div>
                    </div>
                    <div id="desclaimer" class="hidden">
                        <div class="text-sm border p-5 w-full rounded-lg bg-gray-200">
                            <h1>Disclaimer</h1>
                            <div class="border-t border-gray-300 mt-4"></div>
                            <p class="mt-5">Sistem ruangwa.com ini tidak berafiliasi dengan WhatsApp. WhatsApp adalah merk yang terdaftar oleh WhatsApp Inc. Software Warranty yang mengikat pada sistem aplikasi ini terbatas pada modul untuk pengolahan data yang diterima dan dikirim melalui aplikasi ruangwa.com. Kami tidak menyarankan untuk kirim pesan ke nomor yang belum tersimpan di kontak atau belum pernah melakukan chat. <br> <br>Kebijakan yang telah dan atau akan diterbitkan oleh WhatsApp Inc selaku pemegang merk dagang WhatsApp yang mana dapat menyebabkan sistem ini tidak dapat bekerja bukanlah bagian dari layanan garansi ini. Kebijakan yang dimaksud dapat berhubungan dengan akses penggunaan aplikasi WhatsApp, fitur aplikasi WhatsApp, spesifikasi perangkat pendukung, dan kebijakan lainnya yang merupakan hak sepenuhnya dari WhatsApp Inc selaku pemilik merk dagang.</p>
                        </div>
                    </div>
                    <div id="informasi" class="hidden">
                        <div class="border p-5 w-full rounded-lg bg-gray-200 text-sm">
                            <h1>Informasi</h1>
                            <div class="border-t border-gray-300 mt-4 mb-4"></div>
                            <i class="">Hallo Admin</i><br><br>
                            <i class="text-blue-400 mt-10">Informasi Promo!</i>
                            <div class="p-5">
                                <ul>
                                    <li class="list-disc">
                                        <p class="font-semibold">Informasi: Halo semua member, tetaplah bersama RuangWA ya. Hari ini akan ada update supaya support Whatsapp versi MULTI DEVICE / BETA. Karena Whatsapp versi ini sudah live dan tidak BETA lagi.</p>
                                    </li><br>
                                    <li class="list-disc">Update Fitur: Import Kontak dari Device. Caranya masuk menu Contact->Contact List lalu klik Import From Device.</li><br>
                                    <li class="list-disc">Update Fitur: Reset Token Device. Caranya masuk menu Devices lalu klik view kemudian klik reset.</li><br>
                                    <li class="list-disc">Update Fitur: Mengaktifkan / menonaktifkan Popup Notifikasi Pesan Masuk. Caranya masuk menu Notifikasi lalu pilih pada "Popup Notifikasi Pesan Masuk".</li><br>
                                    <li class="list-disc">Promo deposit minimal <span class="font-semibold">Rp 500.000 free deposit 10%</span></li><br>
                                    <li class="list-disc">Pesan <span class="font-semibold">Pending dan Terproses</span> akan otomatis terhapus pada <span class="font-semibold">H+1</span>. Untuk itu dipastikan status device <span class="font-semibold">connected</span> sebelum kirim pesan</li><br>
                                    <li class="list-disc">Update API Doc: penambahan API Check Number, API Send Button Message dan Send List Message (khusus WA biasa)</li><br>
                                </ul>
                                <p>====================================================</p>
                            </div>
                            <p class="mt-10">Informasi Promo!</p>
                            <p class="mt-10">Apakah Perusahaan atau Toko Online Anda ingin ada sistem Tiket atau Layanan CS menggunakan pesan <span class="text-green-500">Whatsapp</span>?</p>
                            <p class="mt-10">RuangWA menawarkan Aplikasi WA Tiket dengan sistem sewa atau beli putus.</p>
                            <p class="mt-10">Fitur:</p>
                            <div class="p-5">
                                <ul>
                                    <li class="list-disc">Multi User/CS di Nomor WhatsApp yang sama ?</li><br>
                                    <li class="list-disc">Hubungkan ke beberapa akun WhatsApp dan terima semua pesan di satu tempat ? ?</li><br>
                                    <li class="list-disc">Buat dan mengobrol dengan kontak atau nomor baru ?</li><br>
                                    <li class="list-disc">Mengirim dan menerima pesan ?</li><br>
                                    <li class="list-disc">Kirim media (gambar / audio / dokumen) ?</li><br>
                                    <li class="list-disc">Terima media (gambar / audio / video / dokumen) ?</li><br>
                                </ul>
                            </div>
                            <p class="mt-10">Berikut link demonya:</p>
                            <p class="mt-10">URL: <a href="https://watiket.ruangwa.id">https://watiket.ruangwa.id</a></p>
                            <p>Email: <a href="mailto:sasakihaise985@gmail.com">sasakihaise985@gmail.com</a></p>
                            <p>Password: 12345678</p>
                            <p class="mt-10">Silahkan hubungi kami ya melalui wa <span class="font-semibold">081380817301</span></p>
                            <p class="mt-10">====================================================</p>
                            <p class="mt-10">Anda ingin memiliki <span class="font-semibold">website</span> seperti <span class="font-semibold">RuangWA</span> ini?</p>
                            <p>Silahkan hubungi kami ya melalui WA <span class="font-semibold">081380817301</span></p>
                            <p>atau Email <span class="font-semibold">sasakihaise985@gmail.com</span></p>
                            <p class="mt-10">====================================================</p>
                            <p class="mt-10"><span class="font-semibold">Jadwal Maintenance Rutin</span> setiap hari antara <span class="font-semibold">pukul 00.00 hingga 01.00</span>.</p>
                            <p>Estimasi maintenance memakan waktu kurang lebih <span class="font-semibold">30 - 60 menit</span>.</p>
                            <p>Pada rentang waktu tersebut kami akan melakukan <i>restart system dan backup data.</i></p>
                            <p class="mt-10">Untuk itu kami mohon maaf jika selama maintenance <i>ada chat yang tidak terproses sistem.</i></p>
                            <p class="mt-10">Jam Operasional Support via WA Pukul <span class="font-semibold">08.30 - 12.00</span> dilanjut <span class="font-semibold">13.00 - 20.00</span></p>
                            <p>Diluar jam tersebut silahkan kirim email ke : <span class="font-semibold">myfrizqi@gmail.com</span> dilanjut <span class="font-semibold">13.00 - 20.00</span></p>
                            <p class="mt-10">Demikian dan Terima kasih.</p>
                            <p class="mt-10">Salam,</p>
                            <p class="mt-10">Tim RuangWA.id</p>
                        </div>
                    </div>
                    <div id="hubungi" class="hidden">
                        <div class="border p-5 w-full rounded-lg bg-gray-200 text-sm">
                            <h1>Hubungi Kami</h1>
                            <div class="border-t border-gray-300 mt-4"></div><br>
                            <p>Alamat: jl. genjer no.36 rt06/02, desa lingkar selatan, kecamatan lengkong</p><br>
                            <p>WA Only: <a class="text-blue-500" href="wa.me/6281380817301">+62 813-8081-7301</a></p><br>
                            <p>Email: sasakihaise985@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>