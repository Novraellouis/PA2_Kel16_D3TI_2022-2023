<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Order;

class PdfController extends Controller
{
    public function exportPDF($id)
    {
        $pemesanan = Order::findOrFail($id);

        $pdf = PDF::loadView('pages.web.detailspemesanan.invoice', compact('pemesanan'));

        return $pdf->download($pemesanan->order_number . '.pdf');
    }
}
