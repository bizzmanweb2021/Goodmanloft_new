<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Stock;
use App\Models\Order;
use PDF;
use Excel;

class PDFController extends Controller
{
    public function getAllProducts()
    {
        $Products=product::all();
        return view('Admin.Product.product',compact('Products'));
    }
    public function getAllOrders()
    {
        $Orders=Order::all();
        return view('Admin.orders.orderpdf',compact('Orders'));
    }
    public function downloadPDF()
    {
        $Products=product::all();
        ini_set('max_execution_time', 300);
        $pdf=PDF::loadView('Admin.Product.product',compact('Products'));
        
        return $pdf->download('products.pdf');
    }
    public function downloadPDF1()
    {
        $Stocks=Stock::all();
        $pdf=PDF::loadView('Admin.Stock.stock',compact('Stocks'));
        
        return $pdf->download('stocks.pdf');
    }
    public function downloadPDF2()
    {
        $Orders=Order::all();
        $pdf=PDF::loadView('Admin.orders.orderpdf',compact('Orders'));
        
        return $pdf->download('Orders.pdf');
    }
}
