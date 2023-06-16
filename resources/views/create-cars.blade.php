<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Cars') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('car.create') }}" method="post" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @if (session('success'))
                        <p class="py-3 text-center bg-green-600/30 border border-green-600 rounded-md mb-3 text-green-800">{{ session('success') }}</p>
                    @endif
                    <div class="text-gray-900 grid grid-cols-3 gap-6 mb-4">
                        <div class="w-full">
                            <x-input-label for="name" :value="__('Car Name')" />
                            <x-text-input id="name" class="block mt-1 w-full"
                                            type="text"
                                            name="name"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="model" :value="__('Car Model')" />
                            <x-text-input id="model" class="block mt-1 w-full"
                                            type="text"
                                            name="model"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('model')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="company" :value="__('Manufacturer')" />
                            <x-text-input id="company" class="block mt-1 w-full"
                                            type="text"
                                            name="company"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="year" :value="__('Year Of Manufacture')" />
                            <x-text-input id="year" class="block mt-1 w-full"
                                            type="number"
                                            name="year"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('year')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="currency" :value="__('Currency')" />
                            <x-text-input id="currency" class="block mt-1 w-full"
                                            type="text"
                                            name="currency"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('currency')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full"
                                            type="number"
                                            step="0.01"
                                            name="price"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div class="w-full col-span-3">
                            <x-input-label for="image" :value="__('Car Image')" />
                            <div class="block mt-1 w-full">
                                <x-text-input id="image" class="w-full"
                                            type="file"
                                            name="image"
                                            accept="image/*"
                                            required />
                            </div>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="w-full col-span-3">
                            <x-input-label for="description" :value="__('Car Description')" />
                            <x-text-area id="description" class="block mt-1 w-full"
                                            name="description"
                                            required autocomplete="off" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>
                    <x-primary-button>
                        {{ __('Create') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
