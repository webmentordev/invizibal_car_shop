@extends('layouts.apps')
@section('content')
    <header class="min-h-[600px] bg-cover bg-center relative flex items-center justify-center" style="background-image: url('{{ asset('assets/images/header-3.jpg') }}')">
        <div class="overlay"></div>
        <div class="relative z-10 max-w-3xl w-full">
            <h1 class="text-6xl mb-6 font-semibold text-white title text-center">Welcome To INVIZIBAL<br><span class="text-5xl">Car Window Shades</span></h1>
            <form action="" class="bg-gray-100 p-2 rounded-2xl w-full flex">
                <input type="search" class="py-3 px-4 bg-white rounded-2xl w-full border-none outline-none" placeholder="Search with Car model or Name...">
                <button class="bg-blue-600 text-white rounded-2xl ml-2 py-2 px-6">Search</button>
            </form>
        </div>
    </header>

    <section class="w-full bg-white">
        <div class="max-w-6xl m-auto py-[80px] px-4">
            <h2 class="text-4xl font-bold text-center mb-6 leading-8">We're Ensuring The Best <span class="text-3xl"><br>Customer <span class="text-blue-600">Experience</span></span></h2>
            <div class="grid grid-cols-2 gap-6 py-6">
                <img src="{{ asset('assets/images/window.png') }}" class="w-full" alt="Window Shades">
                <div class="px-6 flex">
                    <div class="w-full">
                        <h2 class="mb-2 font-semibold text-2xl">Custom Fit</h2>
                        <div class="bg-white shadow-md p-8 rounded-lg mb-6 leading-7">
                            <p class="mb-2"><b>INVIZIBAL</b> is a customized car side window sunshade tailored according to every car’s window dimensions for multi purpose use and a better fit.</p>
                            <p>Designed for Long - Short term parking conditions, travelling periods and daily use. From cabin protection to coolest temperature in your car, <b>INVIZIBAL</b> has got it all.</p>
                        </div>
                        <a href="#" class="px-6 py-2 bg-blue-600 inline-block rounded-lg text-white">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-why-choose-us />
@endsection