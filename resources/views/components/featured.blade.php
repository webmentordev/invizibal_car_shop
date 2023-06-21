<section class="w-full py-[80px] bg-white">
    <div class="text-center">
        <div class="text-center mb-6">
            <h2 class="text-4xl font-bold mb-6">Our Featured <span class="text-main">PRODUCTS!</span></h2>
            <p class="text-gray-500 text-sm leading-6">Presenting our exquisite assortment of meticulously selected flagship products, thoughtfully <br> tailored to redefine excellence and surpass discerning expectations</p>
        </div>
    </div>
    @if (count($cars))
        <div class="max-w-6xl m-auto py-12 px-4 grid grid-cols-3 gap-6">
            @foreach ($cars as $car)
                <div class="p-4 rounded-lg bg-gray-100 relative" data-aos="fade-up" data-aos-duration="1000">
                    <span class="absolute top-6 left-6 bg-main text-white rounded-xl p-1 px-4 font-semibold">{{ $car->year }}</span>
                    <img class="rounded-lg lazyload" data-src="{{ asset('/storage/'. $car->image) }}" alt="{{ $car->name }} image" loading="lazy">
                    <div class="p-2 py-3">
                        <h3 class="font-semibold text-lg">{{ $car->name }}</h3>
                        <span class="mb-3 font-semibold text-gray-600">${{ $car->price }}</span>
                        <a href="{{ route('checkout', $car->slug) }}" class="hover:bg-black mt-2 hover:text-white transition-all w-full py-3 px-4 text-white text-center font-bold inline-block bg-main title rounded-lg">BUY NOW</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-full flex justify-center">
            <a href="{{ route('products') }}" class="hover:bg-black hover:text-white transition-all py-3 px-4 text-white text-center font-bold inline-block bg-main title rounded-lg w-fit">View Collection</a>
        </div>
    @else
        <p class="pt-12 text-center text-2xl">No products exist at the moment!</p>
    @endif
</section>