<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class OrderExportController extends Controller
{
    public function exportCsv(): StreamedResponse
    {
        $fileName = 'laporan-paid-' . now()->format('Y-m-d') . '.csv';

        $tempFile = tempnam(sys_get_temp_dir(), 'orders_') . '.csv';

        // Generate CSV file
        OrderExport::exportCsv($tempFile);

        // Stream download response
        return response()->streamDownload(function () use ($tempFile) {
            echo file_get_contents($tempFile);
            unlink($tempFile);
        }, $fileName);
    }
}
