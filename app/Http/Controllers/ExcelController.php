<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Stock;
use App\Models\Order;
use Excel;

class ExcelController extends Controller
{
    public function getAllProducts()
    {
        $Products=product::all();
        return view('Admin.Product.product',compact('Products'));
    }
    public function downloadExcel()
    {
        $Products=product::all();
        // $excel=Excel::loadView('Admin.Product.product',compact('Products')); 
        return  Excel::download('products.xlsx');
    }
    public function downloadPDF1()
    {
        $Stocks=Stock::all();
        $pdf=PDF::loadView('Admin.Stock.stock',compact('Stocks'));
        
        return $pdf->download('stocks.pdf');
    }
    // public function downloadPDF2()
    // {
    //     $Orders=Order::all();
    //     $pdf=PDF::loadView('Admin.orders.index',compact('Orders'));
        
    //     return $pdf->download('orders.pdf');
    // }
}
