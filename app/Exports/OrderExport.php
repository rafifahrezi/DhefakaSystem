<?php

namespace App\Exports;

use App\Models\Order;
use Spatie\SimpleExcel\SimpleExcelWriter;

class OrderExport
{
    public static function exportCsv(string $filePath): void
    {
        $orders = Order::where('payment_status', 'Paid')->get();

        SimpleExcelWriter::create($filePath)
            ->addHeader([
                'Nama Pelanggan',
                'Total Bayar',
                'Metode Pembayaran',
                'ID Pesanan',
                'Status Pembayaran',
                'Status Pesanan',
                'Tanggal Pesan',
            ])
            ->addRows(
                $orders->map(fn($order) => [
                    'Nama Pelanggan'     => $order->customer->name ?? '-', 
                    'Total Bayar'        => 'Rp ' . number_format($order->grand_total, 0, ',', '.'),
                    'Metode Pembayaran'  => $order->payment_method,
                    'ID Pesanan'         => $order->order_code,
                    'Status Pembayaran'  => $order->payment_status,
                    'Status Pesanan'     => $order->status,
                    'Tanggal Pesan'      => $order->created_at->format('d-m-Y H:i'),
                ])->toArray()
            );
    }
}
