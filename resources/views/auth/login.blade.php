@extends('auth.layout')
@section('title', 'Login')
@section('content')

    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#f8f4f3]">
            <div>
                <a href="https://www.instagram.com/himatif.ulbi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                    <h2 class="font-bold text-3xl">
                        U-
                        <span class="bg-[#f84525] text-white px-2 rounded-md">Vote</span>
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
                        {{-- <label class="block font-medium text-sm text-gray-700" for=" " value="Email" /> --}}
                        <input type="text" name="npm" placeholder="NPM"
                            class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />
                    </div>

                    <div class="mt-4">
                        {{-- <label class="block font-medium text-sm text-gray-700" for="password" value="Password" /> --}}
                        <div class="relative">
                            <input id="password" type="password" name="password" placeholder="Password" required
                                autocomplete="current-password"
                                class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#f84525]" />

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                <button type="button" id="togglePassword"
                                    class="text-gray-500 focus:outline-none focus:text-gray-600 hover:text-gray-600">
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
    </div>
