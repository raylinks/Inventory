<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function printInvoice()
    {
        return view('invoice.invoice');
    }

}
