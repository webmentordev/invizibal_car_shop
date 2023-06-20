<x-mail::message>
# Order Confirmation  
Dear {{ $data->name }},  
Thank you for choosing our car window shades! We are delighted to confirm that your order has been successfully placed and is now being processed. Proceed with the payment if have not already. Our team is working diligently to ensure a smooth fulfillment process for your order. You can expect your car window shades to be carefully packaged and dispatched within **14-30 Days**. We will provide you with a tracking number once your order has been shipped. If you have lost the payment checkout link. Just click the pay button below:  
<x-mail::button :url="'{{ $data->checkout_url }}'">
    Pay Now
</x-mail::button>  
**OrderID #** {{ $data->order_id }}  
Warm regards,<br>
{{ config('app.name') }}
</x-mail::message>
