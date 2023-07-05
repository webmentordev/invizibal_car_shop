@extends('layouts.apps')
@section('content')
    <header class="min-h-[600px] bg-cover bg-center relative flex items-center justify-center" data-parallax="scroll" data-image-src="{{ asset('assets/images/header-3.jpg') }}">
        <div class="overlay"></div>
        <div class="relative z-10 max-w-3xl w-full px-4">
            <h1 class="text-6xl mb-6 font-semibold text-white title text-center 490px:text-2xl">Welcome To INVIZIBAL<br><span class="text-5xl 490px:text-2xl">Car Window Shades</span></h1>
            <form action="{{ route('car.search') }}" method="GET" class="bg-gray-100 bg-opacity-30 backdrop-blur-sm p-2 rounded-2xl w-full flex">
                <input type="search" name="search" class="py-3 px-4 bg-white rounded-2xl bg-opacity-80 backdrop-blur-sm w-full border-none outline-none" placeholder="Search by car model, name or year...">
                <button class="bg-main text-white rounded-2xl ml-2 py-2 px-6">Search</button>
            </form>
        </div>
    </header>

    <section class="w-full">
        <div class="max-w-7xl m-auto py-[80px] px-4">
            <h2 class="text-5xl font-bold text-center mb-6 leading-8">We're Ensuring The Best <span class="text-3xl"><br>Customer <span class="text-main">Experience</span></span></h2>
            <div class="grid grid-cols-3 gap-6 py-6">
                <div class="flex flex-col justify-center">
                    <div class="text-end w-fit mb-6">
                        <div class="flex">
                            <div class="flex flex-col px-2">
                                <h2 class="font-semibold text-lg mb-2">Cabin Temperature</h2>
                                <p class="text-gray-600 text-sm">The innovative Cabin Temperature Window Shades provide the perfect balance of comfort</p>
                            </div>
                            <div class="ml-3 p-4 rounded-lg bg-white h-fit">
                                <img class="w-[60px]" src="https://api.iconify.design/fa6-solid:temperature-arrow-up.svg?color=%23cb0b17" alt="Temp Icon">
                            </div>
                        </div>
                    </div>

                    <div class="text-end w-fit">
                        <div class="flex">
                            <div class="flex flex-col px-2">
                                <h2 class="font-semibold text-lg mb-2">Heat Control</h2>
                                <p class="text-gray-600 text-sm">Experience unparalleled heat control with our advanced Cabin Temperature Window Shades</p>
                            </div>
                            <div class="ml-3 p-4 rounded-lg bg-white h-fit">
                                <img class="w-[60px]" src="https://api.iconify.design/ph:waves-bold.svg?color=%23cb0b17" alt="Temp Icon">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/images/car.png') }}" class="w-full max-w-[60%] m-auto" alt="Window Shades">
                <div class="flex flex-col justify-center">
                    <div class="text-start w-fit mb-6">
                        <div class="flex">
                            <div class="mr-3 p-4 rounded-lg bg-white h-fit">
                                <img class="w-[60px]" src="https://api.iconify.design/tabler:uv-index.svg?color=%23cb0b17" alt="Temp Icon">
                            </div>
                            <div class="flex flex-col px-2">
                                <h2 class="font-semibold text-lg mb-2">UV Protextion</h2>
                                <p class="text-gray-600 text-sm">Shield yourself from harmful UV rays with our Cabin Temperature Window Shades</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="text-start w-fit">
                        <div class="flex">
                            <div class="mr-3 p-4 rounded-lg bg-white h-fit">
                                <img class="w-[60px]" src="https://api.iconify.design/system-uicons:reuse.svg?color=%23cb0b17" alt="Temp Icon">
                            </div>
                            <div class="flex flex-col px-2">
                                <h2 class="font-semibold text-lg mb-2">Reusable</h2>
                                <p class="text-gray-600 text-sm">Embrace sustainability with our reusable Cabin Temperature Window Shades</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-featured />

    <x-why-choose-us />
@endsection