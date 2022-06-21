<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::get(['id','product_name','Product_Size','Quantity','Price','Weight','Brand','sale','new','discount','Product_Dimension','stock_availability','product_image']);
    }
    public function headings() :array
    {
        return ["ID","Product Name","Product Size","Quantity","Price","Weight","Brand","Sale","New","Discount","Product Dimension","Stock Availability","Product Image"];
    }
   
}
