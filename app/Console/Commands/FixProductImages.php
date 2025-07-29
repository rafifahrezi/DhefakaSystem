<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class FixProductImages extends Command
{
    protected $signature = 'fix:product-images';
    protected $description = 'Fix malformed JSON in images column of products';

    public function handle()
    {
        $this->info('Memulai perbaikan images...');

        Product::all()->each(function ($product) {
            if (!is_array($product->images) && is_string($product->images)) {
                $decoded = json_decode($product->images, true);

                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $product->images = $decoded;
                    $product->save();
                    $this->info("Produk ID {$product->id} diperbaiki.");
                }
            }
        });

        $this->info('Selesai memperbaiki semua images.');
    }
}
