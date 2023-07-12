@extends('layouts.apps')
@section('content')
<section class="w-full min-h-screen">
    <div class="flex min-h-screen">
        <div class="max-w-xl w-full h-screen relative p-6 bg-cover bg-center 1230px:hidden" style="background-image: url({{ asset('assets/images/header-5.jpg') }})">
            <div class="absolute bg-black bg-opacity-75 h-full w-full top-0 left-0"></div>
        </div>
        <div class="w-full bg-red h-screen flex items-center justify-center p-6">
            <form action="{{ route('contact') }}" method="post" class="max-w-xl w-full shadow-lg bg-white px-[40px] p-[35px] rounded-lg">
                @csrf
                <h1 class="title text-4xl mb-3 font-bold">Contact us Now!</h1>
                @if (session('success'))
                    <p class="bg-green-600 rounded-lg mb-3 text-white p-6 top-0 left-0 w-full">{{ session('success') }}</p>
                @endif
                <div class="w-full mb-3">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                                    type="text"
                                    name="name"
                                    required autocomplete="off" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="w-full mb-3">
                    <x-input-label for="email" :value="__('Email Address')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                                    type="email"
                                    name="email"
                                    required autocomplete="off" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="w-full mb-3">
                    <x-input-label for="subject" :value="__('Subject')" />
                    <x-text-input id="subject" class="block mt-1 w-full"
                                    type="text"
                                    name="subject"
                                    required autocomplete="off" />
                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                </div>
                <div class="w-full mb-3">
                    <x-input-label for="message" :value="__('Message')" />
                    <x-text-area id="message" class="block mt-1 w-full"
                                    name="message"
                                    required autocomplete="off" />
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>
                <div class="flex flex-col">
                    <x-primary-button class="w-fit">
                        {{ __('Send Message') }}
                    </x-primary-button>
                    <a href="{{ route('home') }}" class="mt-3 underline text-center flex items-center text-indigo-500"><img src="https://api.iconify.design/ph:arrow-left.svg?color=%236430DF" alt="Go back icon">Go Back Home</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection