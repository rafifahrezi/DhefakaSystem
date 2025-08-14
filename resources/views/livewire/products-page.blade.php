<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="py-10 bg-gray-50 font-poppins dark:bg-gray-800 rounded-lg">
        <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
            <div class="flex flex-wrap mb-24 -mx-3">
                <div class="w-full pr-2 lg:w-1/4 lg:block">
                    <div class="p-4 mb-5 bg-white border border-gray-200 dark:border-gray-900 dark:bg-gray-900">
                        <h2 class="text-2xl font-bold dark:text-gray-400"> Categories</h2>
                        {{-- {{ json_encode($selected_categories) }} --}}
                        <div class="w-16 pb-2 mb-6 border-b bo  rder-rose-600 dark:border-gray-400"></div>
                        <ul>
                            @foreach ($categories as $category)
                                <li class="mb-4" wire:key="{{ $category->id }}">
                                    <label for="{{ $category->slug }}" class="flex items-center dark:text-gray-400 ">
                                        <input type="checkbox" wire:model.lazy="selected_categories"
                                            id="category-{{ $category->id }}" value="{{ $category->id }}">

                                        <span class="text-lg">{{ $category->name }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-bold dark:text-gray-400">Brand</h2>
                        <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
                        <ul>
                            @foreach ($brands as $brand)
                                <li class="mb-4" wire:key="{{ $brand->id }}">
                                    <label for="{{ $brand->slug }}" class="flex items-center dark:text-gray-300">
                                        <input type="checkbox" wire:model.lazy="selected_brands"
                                            id="{{ $brand->slug }}" value="{{ $brand->id }}" class="w-4 h-4 mr-2">
                                        <span class="text-lg dark:text-gray-400">{{ $brand->name }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-bold dark:text-gray-400">Product Status</h2>
                        <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
                        <ul>
                            <li class="mb-4">
                                <label for="" class="flex items-center dark:text-gray-300">
                                    <input type="checkbox" wire:model="featured" class="w-4 h-4 mr-2">
                                    <span class="text-lg dark:text-gray-400">Featured Products</span>
                                </label>
                            </li>
                            <li class="mb-4">
                                <label for="" class="flex items-center dark:text-gray-300">
                                    <input type="checkbox" wire:model="on_sale" class="w-4 h-4 mr-2">
                                    <span class="text-lg dark:text-gray-400">On Sale</span>
                                </label>
                            </li>
                        </ul>
                    </div> --}}

                    {{-- fix --}}
                    {{-- <div class="p-4 mb-5 bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-bold dark:text-gray-400">Price</h2>
                        <div class="w-16 pb-2 mb-6 border-b border-rose-600 dark:border-gray-400"></div>
                        <div>
                            <div class="font-semibold">{{ Number::currency($price_range, 'IDR') }}</div>
                            <input type="range" wire:model="price_range"
                                class="w-full h-1 mb-4 bg-blue-100 rounded appearance-none cursor-pointer"
                                max="500000" value="300000" step="1000">
                            <div class="flex justify-between ">
                                <span
                                    class="inline-block text-lg font-bold text-blue-400 ">{{ Number::currency(1000, 'IDR') }}</span>
                                <span
                                    class="inline-block text-lg font-bold text-blue-400 ">{{ Number::currency(50000, 'IDR') }}</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="w-full px-3 lg:w-3/4">
                    <div class="px-3 mb-6">
                        <!-- Search and Sort Wrapper -->
                        <div
                            class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 bg-gray-100 dark:bg-gray-900 rounded-lg shadow-sm p-3">

                            <form wire:submit.prevent="searchSubmit"
                                class="flex gap-2 items-center relative w-full md:w-80" role="search"
                                aria-label="Pencarian produk">
                                <label for="search" class="sr-only">Cari Produk</label>

                                <!-- Icon Search -->
                                <span
                                    class="absolute inset-y-0 left-3 flex items-center text-gray-400 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.65 6.65a7.5 7.5 0 016.36 10.06z" />
                                    </svg>
                                </span>

                                <!-- Input Search -->
                                <input id="search" type="search" wire:model.defer="search"
                                    placeholder="🔍 Cari produk terbaik untukmu..."
                                    class="block w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg pl-10 pr-4 py-2 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent transition duration-150 ease-in-out"
                                    autocomplete="off" aria-label="Pencarian produk" />

                                <!-- Tombol Cari -->
                                <button type="submit"
                                    class="px-4 py-2 bg-rose-500 hover:bg-rose-600 text-white font-semibold rounded-lg transition">
                                    Cari
                                </button>
                            </form>



                            <!-- Sorting Dropdown -->
                            <div class="relative w-full md:w-60">
                                <label for="sort" class="sr-only">Urutkan Produk</label>
                                <select id="sort" wire:model="sort"
                                    class="block w-full bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 
                       rounded-lg px-3 py-2 text-gray-800 dark:text-gray-200 cursor-pointer
                       focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-transparent
                       transition duration-150 ease-in-out">
                                    <option value="latest">Terbaru</option>
                                    <option value="price_asc">Harga: Rendah ke Tinggi</option>
                                    <option value="price_desc">Harga: Tinggi ke Rendah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center ">

                        @if ($products && $products->count())
                            @foreach ($products as $product)
                                @php
                                    $images = is_array($product->images)
                                        ? $product->images
                                        : json_decode($product->images ?? '[]', true);
                                @endphp

                                <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="product-{{ $product->id }}">
                                    <a href="/products/{{ $product->slug }}">
                                        <div class="border border-gray-300 dark:border-gray-700">
                                            <div class="relative bg-gray-200">
                                                <img
                                                    src="{{ isset($product->images[0]) ? url('storage/' . $product->images[0]) : 'https://via.placeholder.com/300' }}">
                                            </div>

                                            <div class="p-3" a>
                                                <div class="flex items-center justify-between gap-2 mb-2">
                                                    <h3 class="text-xl font-medium dark:text-gray-400">
                                                        {{ $product->name }}</h3>
                                                </div>
                                                <p class="text-lg">
                                                    <span class="text-green-600 dark:text-green-600">
                                                        {{ Number::currency($product->price, 'IDR') }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div
                                                class="flex justify-center p-4 border-t border-gray-300 dark:border-gray-700">
                                                <a wire:click.prevent='addToCart({{ $product->id }})' href="#"
                                                    class="text-gray-500 flex items-center space-x-2 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3"
                                                        viewBox="0 0 16 16">
                                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0
                                                0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415
                                                11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01
                                                3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102
                                                4l.84 4.479 9.144-.459L13.89 4H3.102zM5
                                                12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7
                                                0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7
                                                1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7
                                                0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                    </svg>
                                                    <span wire:click.prevent="addToCart({{ $product->id }})">
                                                        Add to Cart</span>
                                                    <span wire:loading
                                                        wire:target='addToCart({{ $product->id }})'>Adding...</span>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center text-gray-500">Tidak ada produk ditemukan.</p>
                        @endif



                    </div>
                    <!-- pagination start -->
                    <div class="flex justify-end mt-6">
                        {{-- <nav aria-label="page-navigation">
                <ul class="flex list-style-none">
                  <li class="page-item disabled ">
                    <a href="#" class="relative block pointer-events-none px-3 py-1.5 mr-3 text-base text-gray-700 transition-all duration-300  rounded-md dark:text-gray-400 hover:text-gray-100 hover:bg-blue-600">Previous
                    </a>
                  </li>
                  <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 mr-3 text-base hover:text-blue-700 transition-all duration-300 hover:bg-blue-200 dark:hover:text-gray-400 dark:hover:bg-gray-700 rounded-md text-gray-100 bg-blue-400">1
                    </a>
                  </li>
                  <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3  ">2
                    </a>
                  </li>
                  <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md mr-3 ">3
                    </a>
                  </li>
                  <li class="page-item ">
                    <a href="#" class="relative block px-3 py-1.5 text-base text-gray-700 transition-all duration-300 dark:text-gray-400 dark:hover:bg-gray-700 hover:bg-blue-100 rounded-md ">Next
                    </a>
                  </li>
                </ul>
              </nav> --}}
                        {{ $products->links() }}
                    </div>
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </section>

</div>
