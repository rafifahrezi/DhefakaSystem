<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\OrderExport;

class OrderTable extends Component
{
    public function exportCsv()
    {
        $fileName = 'laporan-paid-' . now()->format('Y-m-d') . '.csv';
        $tempFile = tempnam(sys_get_temp_dir(), 'orders_') . '.csv';

        OrderExport::exportCsv($tempFile);

        return response()->streamDownload(function () use ($tempFile) {
            readfile($tempFile);
            @unlink($tempFile);
        }, $fileName, [
            'Content-Type' => 'text/csv',
        ]);
    }

    public function render()
    {
        return view('livewire.order-table');
    }
}
