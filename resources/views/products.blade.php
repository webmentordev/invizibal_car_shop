@extends('layouts.apps')
@section('content')
    <header class="min-h-[600px] bg-cover bg-center relative flex items-center justify-center" data-parallax="scroll" data-image-src="{{ asset('assets/images/products.jpg') }}">
        <div class="overlay"></div>
        <div class="relative z-10 max-w-3xl w-full">
            <h1 class="text-4xl mb-6 font-semibold text-white title text-center">INVIZIBAL COLLECTION</h1>
            <form action="{{ route('car.search') }}" method="GET" class="bg-gray-100 p-2 rounded-2xl w-full flex">
                <input type="search" name="search" class="py-3 px-4 bg-white rounded-2xl w-full border-none outline-none" placeholder="Search by car model, name or year...">
                <button class="bg-main text-white rounded-2xl ml-2 py-2 px-6">Search</button>
            </form>
        </div>
    </header>

    <section class="w-full">
        @if (count($cars))
            <div class="max-w-6xl m-auto py-12 px-4 grid grid-cols-3 gap-6">
                @foreach ($cars as $car)
                    <div class="p-4 rounded-lg bg-white relative" data-aos="fade-up" data-aos-duration="1000">
                        <span class="absolute top-6 left-6 bg-main text-white rounded-xl p-1 px-4 font-semibold">{{ $car->year }}</span>
                        <img class="rounded-lg lazyload" data-src="{{ asset('/storage/'. $car->image) }}" alt="{{ $car->name }} image" loading="lazy">
                        <div class="p-2 py-3">
                            <h3 class="font-semibold text-lg">{{ $car->name }}</h3>
                            <span class="mb-3 font-semibold text-gray-600">${{ $car->price }}</span>
                            <a href="{{ route('checkout', $car->slug) }}" class="hover:bg-black mt-2 hover:text-white transition-all w-full py-3 px-4 text-white text-center font-bold inline-block bg-main title rounded-lg">BUY NOW</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($cars->hasPages())
                <div class="p-2 px-4 rounded-lg max-w-6xl bg-white m-auto">
                    {{ $cars->links() }}
                </div>
            @endif
        @else
            <p class="pt-12 text-center text-2xl">No products exist at the moment!</p>
        @endif
    </section>
    <x-why-choose-us />
@endsection