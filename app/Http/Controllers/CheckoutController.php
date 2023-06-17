<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Checkout;
use Stripe\StripeClient;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($slug){
        $product = Car::where('slug', $slug)->get();
        if(count($product)){
            return view('checkout', [
                'data' => $product[0]
            ]);
        }else{
            abort(404, 'Not found!');
        }
    }


    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 30; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function store(Request $request, $slug){
        $product = Car::where('slug', $slug)->get();
        $random_id = $this->randomPassword();
        if(count($product)){
            $product_result = $product[0];
            $this->validate($request, [
                'name' => 'required|max:255',
                'phone' => 'required|numeric|min:6',
                'email' => 'required|email|max:255',
                'message' => 'nullable',
            ]);

            $stripe = new StripeClient(config('app.stripe'));
            $checkout = $stripe->checkout->sessions->create([
                'success_url' => config('app.url').'/success/'.$random_id,
                'cancel_url' => config('app.url').'/cancel/'.$random_id,
                'line_items' => [
                    [
                        'price' => $product_result->price_id,
                        'quantity' => 1,
                        'adjustable_quantity' => [
                            'enabled' => true
                        ],
                    ],
                ],
                'allow_promotion_codes' => true,
                'phone_number_collection' => [
                    'enabled' => true
                ],
                'mode' => 'payment'
            ]);
            Checkout::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'order_id' => $random_id,
                'car_id' => $product_result->id,
                'checkout_id' => $checkout['id'],
                'checkout_url' => $checkout['url']
            ]);
            return redirect($checkout['url']);
        }else{
            abort(404, 'Not found!');
        }
    }


    public function success(Checkout $checkout){
        if($checkout->status != 'pending'){
            abort(404, 'Not found!');
        }
        $checkout->status = 'completed';
        $checkout->paid = true;
        $checkout->save();
        return view('success', [
            'data' => $checkout
        ]);
    }

    public function cancel(Checkout $checkout){
        if($checkout->status != 'pending'){
            abort(404, 'Not found!');
        }
        $checkout->status = 'cancelled';
        $checkout->paid = false;
        $checkout->save();
        return view('cancel', [
            'data' => $checkout
        ]);
    }
}