@extends('Admin.Partials.layout_admin')
@section('title', 'Dashboard Admin')
@section('content')

    <section id="dashboard">
        <div class="bg-gray-800 lg:ml-[250px] p-10  lg:flex justify-between">
            <div class="text-center mb-3">
                <h1 class="text-white p-2 text-xl">Dashboard</h1>
                <p class="text-gray-100 p-2 text-sm">Welcome Admin</p>
            </div>
            <div class="flex items-center gap-5 justify-center">
                <a class="text-white border p-3 rounded-full hover:bg-blue-500 hover:border-blue-500 transition duration-300 ease-in-out"
                    href="">Add Balance</a>
                <a class="text-white border p-3 rounded-full hover:bg-blue-500 hover:border-blue-500 transition duration-300 ease-in-out"
                    href="">Add device</a>
            </div>
        </div>
        <div class="lg:ml-[250px] lg:flex justify-around mt-[-40px] p-5">
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
                <i
                    class="bi bi-person-lines-fill text-white border p-4 rounded-xl bg-purple-500 border-purpbg-purple-500"></i>
                <div class="ml-3 mr-16">
                    <h1>Contacts</h1>
                    <h2>1</h2>
                </div>
            </div>
        </div>
    </section>
@endsection