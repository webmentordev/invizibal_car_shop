@extends('layouts.apps')
@section('content')
    <section class="w-full mt-12">
        <div class="max-w-xl m-auto py-12 px-4">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="border-b border-gray-200 flex flex-col">
                    <div class="rounded-full p-3 bg-[#0eb941]/80">
                        <img src="https://api.iconify.design/gridicons:cross-circle.svg?color=%23d83013" width="60" class="m-auto mb-3" alt="Check Icon">
                    </div>
                    <span class="text-center mb-6 font-semibold">Order has been cancelled!</span>
                </div>
                <div class="py-3">
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>OrderNumer#</strong> {{ $data->order_id }}</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Product</strong> Car Window Shades</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Car Model</strong> {{ $data->car->name }}</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Payment Method</strong> Stripe Payment</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Status</strong> <span class="text-red-600 font-semibold">Cancelled</span></p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Created</strong> {{ $data->created_at->format('D d/m/Y h:i:s A') }} (UTC)</p>
                </div>
                <p class="text-gray-500 bg-gray-100 rounded-xl p-6 text-sm">We're sorry to hear that you won't be proceeding with the purchase, we fully respect your decision and understand that circumstances can change</p>
            </div>
        </div>
    </section>
    <x-why-choose-us />
@endsection