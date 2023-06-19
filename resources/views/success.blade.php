@extends('layouts.apps')
@section('content')
    <section class="w-full mt-12">
        <div class="max-w-xl m-auto py-12 px-4">
            <div class="bg-white rounded-xl p-6 shadow-md">
                <div class="border-b border-gray-200 flex flex-col">
                    <img src="https://api.iconify.design/ic:baseline-check-circle.svg?color=%230eb941" width="60" class="m-auto mb-3" alt="Check Icon">
                    <span class="text-center mb-6 font-semibold">Order Successfully placed!</span>
                </div>
                <div class="py-3">
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>OrderNumber#</strong> {{ $data->order_id }}</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Product</strong> Car Window Shades</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Car Model</strong> {{ $data->car->name }}</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Payment Method</strong> Stripe Payment</p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Status</strong> <span class="text-green-600 font-semibold">Success</span></p>
                    <p class="py-3 title text-sm flex itemcs-center justify-between"><strong>Created</strong> {{ $data->created_at->format('D d/m/Y h:i:s A') }} (UTC)</p>
                    <p class="py-3 border-t border-gray-200 title text-sm flex itemcs-center justify-between"><strong>Total Amount</strong> ${{ $data->car->price }}</p>
                </div>
                <p class="text-gray-500 bg-gray-100 rounded-xl p-6 text-sm">Thank you so much for your recent order with us! We truly appreciate your business and the trust you have placed in our company</p>
            </div>
        </div>
    </section>
    <x-why-choose-us />
@endsection