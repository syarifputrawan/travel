<?php

namespace App\Http\Controllers;

use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function invoice()
    {
        $invoice = Invoice::latest()->first();
        // dd($invoice);
        return view('frontend.invoice', compact('invoice'));
    }

}
