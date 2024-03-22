@extends('auth.layout')
@section('title', 'Login')
@section('content')

    {{-- <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8f4f3]">
            <div>
                <a href="https://www.instagram.com/himatif.ulbi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                    <h2 class="font-bold text-3xl">
                        Web-
                        <span class="bg-[#f84525] text-white px-2 rounded-md">Hima</span>
                    </h2>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 pb-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="py-8">
                        <center>
                            <span class="text-2xl font-semibold">Log In</span>
                        </center>
                    </div>
                    
                    <div>
                        <input type="text" name="npm" placeholder="NPM"
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />
                    </div>

                    <div class="mt-4">
                        <div class="relative">
                            <input id="password" type="password" name="password" placeholder="Password" required
                                autocomplete="current-password"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                <button type="button" id="togglePassword"
                                    class="xtext-gray-500 focus:outline-none focus:text-gray-600 hover:text-gray-600">
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button
                            class="ms-4 inline-flex items-center px-4 py-2 bg-[#f84525] border border-transparent rounded-md font-semibold text-xs text-white uppercase hover:bg-red-800 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-150">
                            Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- component -->
    <div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen flex-shrink-0 hidden lg:flex justify-center items-center">
            <img src="assets/img/logo-himatif.png" alt="Placeholder Image"
                class="object-cover max-h-full border border-white rounded-md w-3/5">
        </div>
        <!-- Right: Login Form -->
        <div class="lg:p-20 md:p-16 sm:12 p-8 w-full lg:w-1/2 flex-grow">
            <h1 class="font-bold text-2xl text-center">LOGIN</h1>
            <br>
            <div class="text-center">
                <a href="https://www.instagram.com/himatif.ulbi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                    <h2 class="font-bold text-3xl">
                        Web-
                        <span class="bg-[#f84525] text-white px-2 rounded-md">Hima</span>
                    </h2>
                </a>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Username Input -->
                <div class="mb-6">
                    <label for="username" class="block text-gray-600">NPM</label>
                    <input type="text" id="username" name="npm"
                        class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="NPM">
                </div>
                <!-- Password Input -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="Password">
                </div>
                <!-- Remember Me Checkbox -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="text-blue-500">
                    <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
                </div>
                <!-- Forgot Password Link -->
                <div class="mb-6 text-blue-500">
                    <a href="#" class="hover:underline">Forgot Password?</a>
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
            </form>
            <!-- Sign up  Link -->
            {{-- <div class="mt-6 text-blue-500 text-center">
                <a href="#" class="hover:underline">Sign up Here</a>
            </div> --}}
        </div>
    </div>
