<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::get(['id','full_name','email_address','transaction_id','payment_method','address_line_1','address_line_2','order_currency','postal_code','country_code','discount_amount','shipping_charge','order_total','payment_status']);
    }
    public function headings() :array
    {
        return ["ID","Customer Name","Email ID","Transaction_ID","Payment Method","Address_line1","Address_line2","Order_Currency","Postal Code","Country_code","Discount Amount","Shipping Charge","Order Total","Payment Status"];
    }
   
}
