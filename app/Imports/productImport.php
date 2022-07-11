<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class productImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $data)
    {
        //print_r($data['product_name']);exit();
        return new product([
            
        'product_name' => $data['product_name'],
         'Category_id' => $data['category_id'],
         'SubCategory_id' => $data['subcategory_id'],
         'Product_Size' => $data['product_size'],
        'stock_availability' => $data['stock_availability'],
        'Weight' => $data['weight'],
        'product_image' => $data['product_image'],
        'Color' => $data['color'],
        'Shape' => $data['shape'],
        'Brand' => $data['brand'],
        'Product_Dimension' => $data['product_dimension'],
        'Quantity' => $data['quantity'],
        'Pattern' => $data['pattern'],
        'Product_Description' => $data['product_description'],
       'Price' => $data['price'],
        'sale' => $data['sale'],
        'new' => $data['new'],
        'discount' => $data['discount'],
        'gallery_photo' => $data['gallery_photo'],
        ]);
    }
}
