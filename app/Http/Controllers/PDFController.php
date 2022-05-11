<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\PDFController;
use PDF;

class PDFController extends Controller
{
    public function getAllProducts()
    {
        $products=product::all();
        return view('product',compact('products'));
    }
    public function downloadPDF()
    {
        $products=product::all();
        $pdf=PDF::loadView('product',compact('products'));
        return $pdf->download('products.pdf');
    }
}
