@php
    $images = $product->images ?? [];
    $firstImage = $images[0] ?? null;
    $fallbackImage = 'https://via.placeholder.com/300';
@endphp
<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">

            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <div x-data="{ mainImage: '{{ $firstImage ? url('storage/' . $firstImage) : $fallbackImage }}' }"> 
                        <div class="overflow-hidden">
                            <div class="relative mb-4 lg:mb-8 aspect-w-16 aspect-h-9 md:aspect-h-10 lg:aspect-h-12 overflow-hidden rounded-lg shadow-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                                <img x-bind:src="mainImage" 
                                     :alt="'Gambar Produk ' + '{{ $product->name ?? 'Produk' }}'" 
                                     class="object-contain w-full h-full transform transition-transform duration-300 ease-in-out hover:scale-105"
                                     loading="lazy">
                            </div>
                            
                            <div class="grid grid-cols-4 md:grid-cols-5 lg:grid-cols-6 xl:grid-cols-8 gap-2 md:gap-3">
                                @foreach ($product->images as $image)
                                    <div class="col-span-1" 
                                         x-on:click="mainImage='{{ url('storage', $image) }}'"
                                         :class="{ 'border-2 border-blue-500 ring-2 ring-blue-500 shadow-md': mainImage === '{{ url('storage', $image) }}' }"
                                         class="relative aspect-w-1 aspect-h-1 overflow-hidden rounded-md cursor-pointer 
                                                border-2 border-transparent hover:border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 
                                                transition duration-200 ease-in-out bg-gray-100 dark:bg-gray-800">
                                        
                                        <img src="{{ url('storage', $image) }}" 
                                             alt="Thumbnail {{ $loop->iteration }} untuk {{ $product->name ?? 'Produk' }}"
                                             class="object-contain w-full h-full p-1"
                                             loading="lazy">
                                    </div>
                                @endforeach
                            </div>
                            <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
                                <div class="flex flex-wrap items-center mt-6">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="w-4 h-4 text-gray-700 dark:text-gray-400 bi bi-truck"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <h2 class="text-lg font-bold text-gray-700 dark:text-gray-400">Pengiriman Gratis</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <div class="lg:pl-20">
                        <div class="mb-8 [&>ul]:list-disc [&>ul]:ml-4">
                            <h2 class="max-w-xl mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl">
                                {{ $product->name }}</h2>
                            <p class="inline-block mb-6 text-4xl font-bold text-gray-700 dark:text-gray-400 ">
                                <span>{{ is_numeric($product->price) ? Number::currency($product->price, 'IDR') : '-' }}</span>
                                {{-- <span class="text-base font-normal text-gray-500 line-through dark:text-gray-400">$1800.99</span> --}}
                            </p>
                            <div class="prose prose-sm prose-invert text-gray-100 max-w-md">
                                {!! Str::markdown($product->description) !!}
                            </div>
                        </div>

                        <div class="mb-10">
                            <label class="block mb-2 text-lg font-medium text-gray-800 dark:text-gray-200">
                                Jumlah Produk
                            </label>
                            <div class="flex items-center gap-2 w-40">
                                <button wire:click="decreaseQty"
                                    class="flex justify-center items-center w-10 h-10 bg-gray-200 hover:bg-gray-300 text-lg font-bold text-gray-700 rounded-l dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">
                                    –
                                </button>
                                <input type="text" value="{{ $quantity }}" disabled
                                    class="w-full h-10 text-center text-lg font-semibold bg-gray-100 text-gray-700 border border-gray-300 dark:bg-gray-900 dark:text-white dark:border-gray-700 rounded-none focus:outline-none" />

                                <button wire:click="increaseQty"
                                    class="flex justify-center items-center w-10 h-10 bg-gray-200 hover:bg-gray-300 text-lg font-bold text-gray-700 rounded-r dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">
                                    +
                                </button>
                            </div>
                        </div>
                        
                        <div class="mt-4 space-y-3">
                            <!-- Add to Cart Button -->
                            <button wire:click="addToCart({{ $product->id }})"
                                class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg rounded-md transition-colors duration-200 dark:bg-blue-500 dark:hover:bg-blue-600">
                                <span wire:loading.remove wire:target="addToCart({{ $product->id }})">
                                    🛒 Tambah ke Keranjang
                                </span>
                                <span wire:loading wire:target="addToCart({{ $product->id }})">
                                    Menambahkan...
                                </span>
                            </button>
                        
                            <!-- Buy Now / Direct Checkout Button -->
                            <button wire:click="goToCheckout({{ $product->id }})"
                                class="w-full px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold text-lg rounded-md transition-colors duration-200 dark:bg-green-500 dark:hover:bg-green-600">
                                <span wire:loading.remove wire:target="goToCheckout({{ $product->id }})">
                                    ⚡ Beli Sekarang
                                </span>
                                <span wire:loading wire:target="goToCheckout({{ $product->id }})">
                                    Memproses...
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
