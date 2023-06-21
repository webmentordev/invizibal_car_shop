@extends('layouts.apps')
@section('content')
    <header class="min-h-[600px] bg-cover bg-center relative flex items-center justify-center" data-parallax="scroll" data-image-src="{{ asset('assets/images/checkout.jpg') }}">
        <div class="overlay"></div>
        <div class="relative z-10 max-w-3xl w-full">
            <h1 class="text-4xl mb-6 font-semibold text-white title text-center">INVIZIBAL Checkout</h1>
            <form action="{{ route('car.search') }}" method="GET" class="bg-gray-100 p-2 rounded-2xl w-full flex">
                <input type="search" name="search" class="py-3 px-4 bg-white rounded-2xl w-full border-none outline-none" placeholder="Search by car model, name or year...">
                <button class="bg-main text-white rounded-2xl ml-2 py-2 px-6">Search</button>
            </form>
        </div>
    </header>

    <section class="w-full">
        <div class="max-w-6xl m-auto py-12 px-4">
            <div class="bg-white rounded-xl grid grid-cols-5 gap-6 p-6">
                <div class="col-span-3 p-6">
                    <h3 class="mb-3 text-2xl font-semibold">{{ $data->name }} Window Shades</h3>
                    <p class="leading-6 text-sm mb-3">{{ $data->description }}</p>
                    <form action="{{ route('checkout.store', $data->slug) }}" method="POST">
                        @csrf
                        <div class="w-full mb-3">
                            <x-input-label for="name" :value="__('Full Name')" />
                
                            <x-input-checkout id="name" class="block mt-1 w-full"
                                            type="text"
                                            name="name"
                                            required />
                
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-input-label for="email" :value="__('Email Address')" />
                
                            <x-input-checkout id="email" class="block mt-1 w-full"
                                            type="email"
                                            name="email"
                                            required />
                
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-input-label for="phone" :value="__('Phone Number (shipping purpose)')" />
                
                            <x-input-checkout id="phone" class="block mt-1 w-full"
                                            type="text"
                                            name="phone"
                                            required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-input-label for="shipping" :value="__('Shipping Address')" />
                            <x-input-checkout id="shipping" class="block mt-1 w-full"
                                            type="text"
                                            name="shipping"
                                            autocomplete="off" required />
                            <x-input-error :messages="$errors->get('shipping')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-input-label for="message" :value="__('Compose message (optional)')" />
                            <x-text-area-checkout id="message" class="block mt-1 w-full"
                                            name="message"
                                            autocomplete="off" />
                            <x-input-error :messages="$errors->get('message')" class="mt-2" />
                        </div>
                        
                        <x-primary-button class="scale-110 ml-2">
                            {{ __('Pay $'. $data->price) }}
                        </x-primary-button>
                    </form>
                </div>
                <div class="w-full col-span-2">
                    <div class="p-6 bg-gray-100 w-full rounded-xl relative h-fit mb-4">
                        <span class="absolute top-8 left-8 bg-main text-black rounded-xl p-1 px-4 font-semibold">{{ $data->year }}</span>
                        <img class="w-full rounded-xl mb-5" src="{{ asset('/storage/'. $data->image) }}" alt="{{ $data->name }} Image">
                        <div class="flex justify-between border-t border-gray-200 py-2 p-3">
                            <h4 class="text-slate-500">Subtotal</h4>
                            <span class="text-black font-semibold">${{ $data->price }}</span>
                        </div>
                        <div class="flex justify-between py-2 p-3">
                            <h4 class="text-slate-500">Discount</h4>
                            <span class="text-black font-semibold">$0</span>
                        </div>
                        <div class="flex justify-between py-2 p-3">
                            <h4 class="text-slate-500">Quantity</h4>
                            <span class="text-black font-semibold">x1 Pack</span>
                        </div>
                        <div class="flex justify-between border-t border-gray-200 py-2 p-3">
                            <h4 class="text-slate-500">Grant Total</h4>
                            <span class="font-semibold text-main text-lg">${{ number_format($data->price, 2) }}</span>
                        </div>
                    </div>
                    <p class="flex items-center justify-center text-sm">Payment powered by | <img class="ml-1" src="https://api.iconify.design/logos:stripe.svg?color=%23d83013" alt="Stripe Logo"></p>
                </div>
            </div>
        </div>
    </section>
    <x-why-choose-us />
@endsection