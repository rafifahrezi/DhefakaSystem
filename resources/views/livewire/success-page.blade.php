<div class="w-full max-w-7xl py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="font-poppins dark:bg-gray-900">
        <div class="bg-white dark:bg-gray-900 border rounded-md p-6 md:p-10">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-8">🎉 Thank you. Your order has been received.</h1>

            <!-- Shipping Address -->
            <div class="border-b border-gray-300 dark:border-gray-700 mb-8 pb-6">
                <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Shipping Address</h2>
                <div class="space-y-1 text-sm text-gray-700 dark:text-gray-400">
                    <p class="font-semibold text-base">{{ $order->address->full_name }}</p>
                    <p>{{ $order->address->street_address }}</p>
                    <p>{{ $order->address->city }}, {{ $order->address->state }}, {{ $order->address->zip_code }}</p>
                    <p>Phone: {{ $order->address->phone }}</p>
                </div>
            </div>

            <!-- Order Info -->
            <div class="grid md:grid-cols-4 gap-4 border-b border-gray-300 dark:border-gray-700 pb-6 mb-8">
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Order ID:</p>
                    <p class="text-base font-medium text-gray-800 dark:text-gray-200">{{ $order->order_id }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Date:</p>
                    <p class="text-base font-medium text-gray-800 dark:text-gray-200">{{ $order->created_at->format('d-m-Y') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Total:</p>
                    <p class="text-base font-medium text-blue-600">{{ Number::currency($order->grand_total, 'IDR') }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Payment Method:</p>
                    <p class="text-base font-medium text-gray-800 dark:text-gray-200">
                        {{ $order->payment_method === 'cod' ? 'Cash on Delivery' : 'Transfer / QR' }}
                    </p>
                </div>
            </div>

            <!-- Order Summary & Shipping -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Order Details -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Order Summary</h2>
                    <div class="space-y-4 border-b border-gray-300 dark:border-gray-700 pb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-700 dark:text-gray-400">Subtotal</span>
                            <span class="text-gray-700 dark:text-gray-300">{{ Number::currency($order->grand_total, 'IDR') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700 dark:text-gray-400">Discount</span>
                            <span class="text-gray-700 dark:text-gray-300">{{ Number::currency(0, 'IDR') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700 dark:text-gray-400">Shipping</span>
                            <span class="text-gray-700 dark:text-gray-300">{{ Number::currency(0, 'IDR') }}</span>
                        </div>
                    </div>
                    <div class="flex justify-between mt-4 font-semibold text-lg">
                        <span class="text-gray-800 dark:text-white">Total</span>
                        <span class="text-gray-800 dark:text-white">{{ Number::currency($order->grand_total, 'IDR') }}</span>
                    </div>
                </div>

                <!-- Shipping Method -->
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Shipping Method</h2>
                    <div class="flex items-start justify-between">
                        <div class="flex items-center space-x-3">
                            <svg class="w-7 h-7 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 3.5A1.5..."></path>
                            </svg>
                            <div>
                                <p class="text-gray-800 dark:text-gray-300 font-medium">Delivery</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Within 24 Hours</p>
                            </div>
                        </div>
                        <p class="text-gray-800 dark:text-gray-300 font-medium">{{ Number::currency(0, 'IDR') }}</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-10 flex flex-col md:flex-row gap-4">
                <a href="/products"
                   class="w-full md:w-auto text-center px-6 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition dark:border-gray-600 dark:hover:bg-gray-800">
                    Continue Shopping
                </a>
                <a href="/my-orders"
                   class="w-full md:w-auto text-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition dark:bg-gray-800 dark:hover:bg-gray-700">
                    View My Orders
                </a>
            </div>
        </div>
    </section>
</div>
