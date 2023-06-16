@extends('layouts.apps')
@section('content')
    <header class="min-h-[600px] bg-cover bg-center relative flex items-center justify-center" style="background-image: url('{{ asset('assets/images/products.jpg') }}')">
        <div class="overlay"></div>
        <div class="relative z-10 max-w-3xl w-full">
            <h1 class="text-4xl mb-6 font-semibold text-white title text-center">INVIZIBAL COLLECTION</h1>
            <form action="{{ route('car.search') }}" method="GET" class="bg-gray-100 p-2 rounded-2xl w-full flex">
                <input type="search" name="search" class="py-3 px-4 bg-white rounded-2xl w-full border-none outline-none" placeholder="Search with Car model or Name...">
                <button class="bg-main text-black rounded-2xl ml-2 py-2 px-6">Search</button>
            </form>
        </div>
    </header>

    <section class="w-full">
        <div class="max-w-6xl m-auto py-12 px-4 grid grid-cols-3 gap-6">
            @foreach ($cars as $car)
                <div class="p-4 rounded-lg bg-white relative">
                    <span class="absolute top-6 left-6 bg-main text-black rounded-xl p-1 px-4 font-semibold">{{ $car->year }}</span>
                    <img class="rounded-lg" src="{{ asset('/storage/'. $car->image) }}" alt="{{ $car->name }} image">
                    <div class="p-2 py-3">
                        <h3 class="font-semibold mb-2">{{ $car->name }}</h3>
                        <a href="#" class="hover:bg-black hover:text-white transition-all w-full py-3 px-4 text-black text-center font-bold inline-block bg-main title rounded-lg">BUY NOW</a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <x-why-choose-us />
@endsection