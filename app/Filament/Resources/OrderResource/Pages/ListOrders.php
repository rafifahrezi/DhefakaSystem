<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // Custom method untuk check apakah ada filter aktif
    public function hasActiveFilters(): bool
    {
        $filters = $this->tableFilters ?? [];

        foreach ($filters as $filterName => $filterValue) {
            if (!empty($filterValue)) {
                // Khusus untuk filter month_year yang complex
                if ($filterName === 'month_year' && is_array($filterValue)) {
                    if (!empty($filterValue['month']) || !empty($filterValue['year'])) {
                        return true;
                    }
                } elseif (!empty($filterValue)) {
                    return true;
                }
            }
        }

        return false;
    }

    // Alternative method untuk check specific filter
    public function hasMonthYearFilter(): bool
    {
        $monthYearFilter = $this->tableFilters['month_year'] ?? [];
        return !empty($monthYearFilter['month']) || !empty($monthYearFilter['year']);
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'new' => Tab::make()->query(fn ($query) => $query->where('status', 'new')),
            'processing' => Tab::make()->query(fn ($query) => $query->where('status', 'processing')),
            'shipped' => Tab::make()->query(fn ($query) => $query->where('status', 'shipped')),
            'delivered' => Tab::make()->query(fn ($query) => $query->where('status', 'delivered')),
            'cancelled' => Tab::make()->query(fn ($query) => $query->where('status', 'cancelled')),
        ];
    }
}
