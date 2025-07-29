<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Illuminate\Support\Number;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Order Processing', Order::query()->where('status', 'processing')->count()),
            Stat::make('Order Shipped', Order::query()->where('status', 'shipped')->count()),
            Stat::make('Order Delivery', Order::query()->where('status', 'delivered')->count()),
            Stat::make('Order Cancel', Order::query()->where('status', 'canceled')->count()),
            Stat::make('Total Penjualan', Number::currency(Order::query()->sum('grand_total')), 'IDR')
        ];
    }
}   
