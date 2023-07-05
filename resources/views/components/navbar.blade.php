<nav class="sticky top-0 left-0 w-full z-50 bg-white border-b border-gray-200">
    <div class="max-w-6xl m-auto flex items-center justify-between p-4">
        <a class="race" href="{{ route('home') }}"><img src="{{ asset('assets/images/invizibal_logo.png') }}" width="180" alt="INVIZIBAL Logo"></a>
        <ul class="font-semibold 820px:hidden">
            <a class="px-5" href="{{ route('home') }}">Home</a>
            <a class="px-5" href="{{ route('products') }}">Collection</a>
            <a class="pl-5" href="{{ route('about') }}">About</a>
        </ul>
        <div x-data="{ open: false }" class="hidden 820px:block">
            <img x-on:click="open = !open" src="https://api.iconify.design/uis:align-center.svg?color=%23cb0b17" width="35" alt="Burger Icon">
            <div class="fixed w-full h-full bg-white left-0 top-0 p-6 z-10 max-w-[300px] shadow-lg" x-show="open" x-cloak>
                <img src="https://api.iconify.design/charm:circle-cross.svg?color=%23cb0b17" x-on:click="open = false" width="35" alt="Cross Icon" class="mb-6">
                <ul class="flex flex-col font-semibold">
                    <a class="px-6 py-3 bg-gray-200 mb-2" href="{{ route('home') }}">Home</a>
                    <a class="px-6 py-3 bg-gray-200 mb-2" href="{{ route('products') }}">Collection</a>
                    <a class="px-6 py-3 bg-gray-200 mb-2" href="{{ route('about') }}">About</a>
                </ul>
            </div>
        </div>
    </div>
</nav>