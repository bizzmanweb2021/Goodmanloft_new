<?php

namespace App\Export;

use App\Models\Stock;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stock::get(['id','product_name','stock_available']);
    }
    public function headings() :array
    {
        return ["ID","Product Name","Stock Availability"];
    }
   
}
