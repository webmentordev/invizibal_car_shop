<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Stripe\StripeClient;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::latest()->paginate(20);
        return view('cars', [
            'cars' => $cars
        ]);
    }

    public function create(){
        return view('create-cars');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255|unique:cars,name',
            'model' => 'required|max:255',
            'company' => 'required|max:255',
            'year' => 'required|numeric',
            'currency' => 'required|max:3|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,webp,png',
        ]);

        $stripe = new StripeClient(config('app.stripe'));
        $product = $stripe->products->create([
            'name' => $request->name
        ]);
        $price = $stripe->prices->create([
            'unit_amount' => $request->price * 100,
            'currency' => $request->currency,
            'product' => $product['id'],
        ]);
        Car::create([
            'name' => $request->name,
            'slug' => str_replace(' ', '-', strtolower($request->name.'-'.$request->model.'-'.$request->year)),
            'model' => $request->model,
            'company' => $request->company,
            'year' => $request->year,
            'product_id' => $product['id'],
            'price_id' => $price['id'],
            'currency' => $request->currency,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->store('product_images', 'public_disk')
        ]);
        return back()->with('success', 'Product/Car has been created!');
    }

    public function search(Request $request){
        $this->validate($request, [
            'search' => 'required'
        ]);
        $search = $request->search;
        $result = Car::where('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('model', 'LIKE', '%'.$search.'%')
                        ->orWhere('company', 'LIKE', '%'.$search.'%')
                        ->orWhere('year', 'LIKE', '%'.$search.'%')->paginate(100);
        return view('products', [
            'cars' => $result,
            'search' => 'All Products have been fetched!'
        ]);
    }

    public function show(){
        $result = Car::latest()->paginate(100);
        return view('products', [
            'cars' => $result
        ]);
    }
}