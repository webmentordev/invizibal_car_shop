<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cars Listing') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (count($cars))
                    <div class="p-6 text-gray-900">
                        <table class="w-full">
                            <tr class="border-b bg-gray-200 border-gray-300">
                                <th class="text-start p-2">Name</th>
                                <th class="text-start">Model</th>
                                <th class="text-start">Company</th>
                                <th class="text-start">Year</th>
                                <th class="text-start">Stripe</th>
                                <th class="text-start">Price</th>
                                <th class="text-end">Status</th>
                                <th class="text-end">Created</th>
                                <th class="text-end p-2">Read</th>
                            </tr>
                            @foreach ($cars as $car)
                                <tr class="text-sm text-start border-b border-gray-200 odd:bg-gray-100 last:border-none">
                                    <td class="text-start p-2">{{ $car->name }}</td>
                                    <td class="text-start">{{ $car->model }}</td>
                                    <td class="text-start">{{ $car->company }}</td>
                                    <td class="text-start">{{ $car->year }}</td>
                                    <td class="text-start">{{ $car->product_id }}</td>
                                    <td class="text-start">{{ number_format($car->price, 2) }} {{ $car->currency }}</td>
                                    <td class="text-end">
                                        @if ($car->is_active)
                                            <p class="bg-green-600 p-1 rounded-full w-fit"></p>
                                        @else
                                            <p class="bg-red-600 p-1 rounded-full w-fit"></p>
                                        @endif
                                    </td>
                                    <td class="text-end">{{ $car->created_at->format('D d/m/Y H:i:s A') }}</td>
                                    <td class="text-end p-2 relative" x-data="{open: false}">
                                        <span x-on:click="open = !open" class="underline text-blue-600 cursor-pointer">Read</span>
                                        <p x-show="open" x-cloak class="text-sm rounded-lg p-6 fixed bottom-3 bg-white shadow-md text-start right-3 w-[500px]">{{ $car->description }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @else
                    <div class="p-6 text-gray-900">
                        {{ __("Your Cars database is empty!") }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>