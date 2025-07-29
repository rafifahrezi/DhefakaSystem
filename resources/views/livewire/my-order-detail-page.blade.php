<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500 dark:text-white">Order Details</h1>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-6">
        {{-- Customer --}}
        <div class="flex flex-col bg-white border rounded-xl shadow-md p-5 dark:bg-slate-900 dark:border-gray-800">
            <div class="flex gap-4 items-start">
                <div class="w-12 h-12 flex justify-center items-center bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs uppercase text-gray-500 tracking-wide">Customer</p>
                    <h3 class="mt-1 text-xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ $address->full_name }}
                    </h3>
                </div>
            </div>
        </div>

        {{-- Order Date --}}
        <div class="flex flex-col bg-white border rounded-xl shadow-md p-5 dark:bg-slate-900 dark:border-gray-800">
            <div class="flex gap-4 items-start">
                <div class="w-12 h-12 flex justify-center items-center bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 22h14" />
                        <path d="M5 2h14" />
                        <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                        <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs uppercase text-gray-500 tracking-wide">Order Date</p>
                    <h3 class="mt-1 text-xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ $order_items[0]->created_at->format('d-m-Y H:i:s') }}
                    </h3>
                </div>
            </div>
        </div>

        {{-- Order Status --}}
        <div class="flex flex-col bg-white border rounded-xl shadow-md p-5 dark:bg-slate-900 dark:border-gray-800">
            <div class="flex gap-4 items-start">
                <div class="w-12 h-12 flex justify-center items-center bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                        <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs uppercase text-gray-500 tracking-wide">Order Status</p>
                    <div class="mt-1">
                        @php
                            $status_badges = [
                                'new' => 'bg-blue-500 text-white',
                                'processing' => 'bg-yellow-500 text-white',
                                'shipped' => 'bg-green-500 text-white',
                                'delivered' => 'bg-emerald-600 text-white',
                                'canceled' => 'bg-red-500 text-white',
                            ];
                            $status_label = ucfirst($order->status);
                            $status_class = $status_badges[$order->status] ?? 'bg-gray-400 text-white';
                        @endphp
                        <span class="inline-block px-3 py-1 text-sm font-medium rounded shadow {{ $status_class }}">
                            {{ $status_label }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Payment Status --}}
        <div class="flex flex-col bg-white border rounded-xl shadow-md p-5 dark:bg-slate-900 dark:border-gray-800">
            <div class="flex gap-4 items-start">
                <div class="w-12 h-12 flex justify-center items-center bg-gray-100 rounded-lg dark:bg-gray-800">
                    <svg class="w-5 h-5 text-gray-600 dark:text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <circle cx="12" cy="12" r="1" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs uppercase text-gray-500 tracking-wide">Payment Status</p>
                    <div class="mt-1">
                        @php
                            $payment_badges = [
                                'pending' => 'bg-blue-500 text-white',
                                'paid' => 'bg-green-600 text-white',
                                'failed' => 'bg-red-600 text-white',
                            ];
                            $payment_label = ucfirst($order->payment_status);
                            $payment_class = $payment_badges[$order->payment_status] ?? 'bg-gray-400 text-white';
                        @endphp
                        <span class="inline-block px-3 py-1 text-sm font-medium rounded shadow {{ $payment_class }}">
                            {{ $payment_label }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Grid -->
    <div class="flex flex-col md:flex-row gap-6 mt-6">
        <!-- Produk dan Alamat Pengiriman -->
        <div class="md:w-3/4 space-y-6">

            <!-- Tabel Produk -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-gray-700 mb-4">Detail Produk</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="border-b text-gray-600">
                            <tr>
                                <th>Produk</th>
                                <th>No Pesanan</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Metode Pembayaran</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">
                            @foreach ($order_items as $item)
                                <tr wire:key="{{ $item->id }}" class="hover:bg-gray-50 transition">
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-14 w-14 object-cover rounded mr-4"
                                                src="{{ url('storage', $item->product->images[0]) }}"
                                                alt="{{ $item->product->name }}">
                                            <span class="font-medium text-gray-800">{{ $item->product->name }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 text-gray-700">{{ $order->order_id }}</td>
                                    <td class="py-4 text-gray-700">{{ Number::currency($item->unit_amount, 'IDR') }}
                                    </td>
                                    <td class="py-4 text-center text-gray-700">{{ $item->quantity }}</td>
                                    <td class="py-4 text-gray-700">{{ $order->payment_method }}</td>
                                    <td class="py-4 text-gray-800 font-semibold">
                                        {{ Number::currency($item->total_amount, 'IDR') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Alamat Pengiriman -->
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-xl font-bold text-slate-700 mb-4">Alamat Pengiriman</h2>
                <div class="flex flex-col md:flex-row justify-between text-sm text-gray-700 space-y-2 md:space-y-0">
                    <div class="flex-1">
                        <p>{{ $address->street_address }}, {{ $address->city }}, {{ $address->state }},
                            {{ $address->zip_code }}</p>
                    </div>
                    <div class="text-right">
                        <p class="font-medium">Telepon:</p>
                        <p>{{ $address->phone }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan -->
        <div class="md:w-1/4">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Ringkasan Pesanan</h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span>{{ Number::currency($order->grand_total ?? 0, 'IDR') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Pajak</span>
                        <span>0.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Pengiriman</span>
                        <span>0.00</span>
                    </div>
                    <hr class="my-2 border-gray-300">
                    <div class="flex justify-between text-base font-semibold text-gray-900">
                        <span>Total</span>
                        <span>{{ Number::currency($item->order->grand_total, 'IDR') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
