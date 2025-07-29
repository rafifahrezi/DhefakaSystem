<div class="max-w-2xl mx-auto p-8 bg-white rounded-lg shadow dark:bg-gray-900" wire:poll.10s="checkOrderStatus">
    <!-- tampilan QR & status -->
    @if ($status === 'not_found')
        <p>Pesanan tidak ditemukan.</p>
    @else
        <p>Menunggu pembayaran...</p>
    @endif
    <h2 class="text-xl font-bold text-gray-700 dark:text-gray-200 mb-4">Selesaikan Pembayaran</h2>

    <p class="mb-4 text-gray-600 dark:text-gray-400">Silakan scan kode QR berikut untuk menyelesaikan pembayaran.</p>

    <div class="flex justify-center mb-6">
        <img src="./img/QR.jpg" alt="QR Code" class="w-64 h-64" />
    </div>

    <div class="text-center text-gray-600 dark:text-gray-400 mb-6">
        <p>Total Pembayaran:</p>
        <p class="text-2xl font-semibold text-blue-600">{{ Number::currency($order->grand_total, 'IDR') }}</p>

        <div class="mt-4">
            <p class="text-gray-600 dark:text-gray-400">Transfer ke rekening berikut:</p>
            <p class="text-lg font-semibold text-blue-700 dark:text-blue-400 mt-1 leading-6">
                BCA – 5350243528<br>
                a.n. Nati Rachmah
            </p>
        </div>

        <div class="mt-6">
            <p class="text-gray-600 dark:text-gray-400">Sisa Waktu Pembayaran:</p>
            <div class="mt-1 text-2xl font-mono text-red-600 dark:text-red-400 bg-red-50 dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm inline-block" id="countdown-timer">
                30:00
            </div>
        </div>

        @if ($status === 'not_found')
            <p class="text-red-500 mt-4">Order tidak ditemukan.</p>
        @endif
    </div>

    <div class="flex flex-col md:flex-row justify-center space-y-3 md:space-y-0 md:space-x-4">
        <a href="{{ route('success') }}" class="px-6 py-2 text-sm text-white bg-blue-600 rounded hover:bg-blue-700">Lihat Pesanan Saya</a>
        <a href="/products" class="px-6 py-2 text-sm border border-gray-300 rounded hover:bg-gray-100">Kembali Belanja</a>

        @php
            $wa = '62895332966383';
            $msg = urlencode("Halo Admin, saya sudah melakukan pembayaran untuk pesanan dengan ID: #{$order->id}, total: " . Number::currency($order->grand_total, 'IDR') . ". Mohon dicek dan dikonfirmasi.");
            $waLink = "https://wa.me/{$wa}?text={$msg}";
        @endphp

        <a href="{{ $waLink }}" target="_blank" class="px-6 py-2 text-sm text-white bg-green-500 rounded hover:bg-green-600">
            Konfirmasi via WhatsApp
        </a>
    </div>
</div>

<script>
// Simple 30 minute countdown timer
let timeLeft = 30 * 60; // 30 minutes in seconds

function updateCountdown() {
    const countdownElement = document.getElementById('countdown-timer');
    
    if (timeLeft <= 0) {
        countdownElement.textContent = '00:00';
        return;
    }
    
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    countdownElement.textContent = minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
    
    timeLeft--;
}

// Start countdown immediately
updateCountdown();
setInterval(updateCountdown, 1000);
</script>
@push('scripts')
<script>
    Livewire.hook('message.processed', (message, component) => {
        if (@this.get('shouldRedirect')) {
            window.location.href = "{{ route('success') }}";
        }
    });
</script>
@endpush
