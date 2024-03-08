@extends('Partials.layout')
@section('title', 'News')
@section('content')

<main>
    <section class="pt-28">
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
            <div href="#" class="max-w-sm gap-3 mx-auto sm:max-w-full group xl:grid xl:grid-cols-12 bg-slate-100">
                <img src="z480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 xl:col-span-7">
                <div class="p-6 space-y-2 xl:col-span-5">
                    <a href="">
                        <h3 class="text-2xl font-semibold sm:text-4xl hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                    </a>
                    <span class="text-xs dark:text-gray-400">February 18, 2024</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non repellat ad unde, nihil omnis praesentium repellendus doloribus natus, totam debitis adipisci. Vel veritatis aspernatur officiis? Ad numquam inventore dolorem aliquam!</p>
                </div>
            </div>
            <div class="grid justify-center gap-6 grid-cols-3">
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?1">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 21, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?2">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 22, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?3">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 23, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100 hidden sm:block">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?4">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 24, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100 hidden sm:block">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?5">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 25, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
                <div href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-slate-100 hidden sm:block">
                    <img class="object-cover w-full rounded h-44" alt="" src="https://source.unsplash.com/random/480x360?6">
                    <div class="p-6 space-y-2">
                        <a href="">
                            <h3 class="text-2xl font-semibold hover:underline focus:underline">Lorem ipsum dolor sit amet.</h3>
                        </a>
                        <span class="text-xs dark:text-gray-400">January 26, 2021</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt earum adipisci facilis, necessitatibus non repudiandae amet. Natus corporis officiis id repellendus amet soluta itaque, eius voluptatem tempora quae ipsum maxime.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-red-500 text-white">Load more posts...</button>
            </div>
        </div>
    </section>
</main>