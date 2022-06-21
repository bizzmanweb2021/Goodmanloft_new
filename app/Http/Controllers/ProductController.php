<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use App\Models\Stock;
use App\Models\Order;
use App\Models\subcategory;
use DB;
use Excel;
use App\Imports\productImport;
use App\Exports\ProductsExport;
use App\Exports\OrdersExport;
use App\Export\StocksExport;
use ImageResize;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product::orderBy("id","desc")->get();
        return view('Admin.Product.product_view')->with('Products',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = category::all();
        return view('Admin.Product.product_add',compact('cat'));
    }
    public function getSubCategoryById()
    {
        $data = subcategory::where('Category_id',request()->id)->get();
        echo json_encode($data);
    }
    public function store(Request $request)
    {
        //print_r('called');exit();
        $this->validate($request,[ 'Product_name'=>'required',
                                   'Product_image'=>'required|mimes:jpg,png,jpeg',
                                   'gallery_photo'=>'required',
                                   'Quantity'=>'required',
                                   'Price'=>'required',
                                   'sale'=>'required',
                                   'new'=>'required',
                                   'Weight'=>'required',
                                ]);
                                 $image = $request->Product_image;
                                 $filename = $image->getClientOriginalName();
                                 $image_resize = Image::make($image->getRealPath())->resize(300,300)->save(public_path('images/'.$filename));
                                 $image_destination =  'images/'.$filename;

                                if($request->hasfile('gallery_photo'))
                                {
                                    foreach($request->file('gallery_photo') as $file)
                                    {
                                        $filename = time() . '_' . $file->getClientOriginalName();
                                        $file->storeAs('public/images', $filename);
                                        $data[] = $filename;
                                    }
                                }
                                $Product=new Product();
                                $Product->Product_name=$request->Product_name;
                                $Product->Product_Size=$request->Product_Size;
                                $Product->Product_Dimension=$request->Product_Dimension;
                                $Product->Product_Description=$request->Product_Description;
                                $Product->Quantity=$request->Quantity;
                                $Product->Price=$request->Price;
                                $Product->sale=$request->sale;
                                $Product->new=$request->new;
                                $Product->discount=$request->discount;
                                $Product->Weight=$request->Weight;
                                $Product->Product_image=$image_destination;
                                $Product->gallery_photo=json_encode($data);
                                $Product->Category_id=$request->Category_Name;
                                $Product->SubCategory_id=$request->SubCategory_name;
                                $Product->popular_products=$request->popular_products;
                                $Product->stock_availability=$request->stock_availability;
                                $Product->save();

                        $notification1=array('alert-type'=>'success','message'=>'Product Added Successfully');
                        return redirect()->route('admin.productView')->with($notification1);

    }
    public function stockView()
    {
        $data = DB::table('stocks')
        ->select('stocks.id','stocks.product_name','stocks.stock_image','stocks.stock_available','stocks.stock_input_date','products.product_name','products.Price')
        ->join('products','products.id','=','stocks.product_name')->get();
        return view('Admin.Stock.stockView')->with('Stocks',$data);
    }
    public function stockAdd()
    {
        return view('Admin.Stock.stockAdd');
    }
    public function stockStore(Request $request)
    {
        $images = $request->stock_image;
        $filename = $images->getClientOriginalName();
        $image_resize = Image::make($images->getRealPath())->resize(300,300)->save(public_path('images/'.$filename));
        $image_destinations =  'images/'.$filename;

        $stock = new Stock();
        $stock->product_name = $request->product_name;
        $stock->stock_available = $request->stock_available;
        $stock->stock_input_date = $request->stock_input_date;
        $stock->stock_image=$image_destinations;
        $stock->save();

        $notification1=array('alert-type'=>'success','message'=>'Stock Added Successfully');
                        return redirect()->route('admin.stockView')->with($notification1);

    }

    public function updateProduct(Request $request)
    {

        $Products = DB::table('products')->where('id','=', $request->id)->update([
            'product_name' => $request->input('product_name'),
            'Product_Description' => $request->input('Product_Description'),
            'Product_Dimension' => $request->input('Product_Dimension'),
            'sale' => $request->input('sale'),
            'new' => $request->input('new'),
            'discount' => $request->input('discount'),
            'Weight' => $request->input('Weight'),
            'Price' => $request->input('Price'),
            'Quantity' => $request->input('Quantity'),
            'popular_products' => $request->input('popular_products'),
            
            // 'Product_Size' => $request->input('Product_Size'),
            // 'stock_availability' => $request->input('stock_availability')
        ]);
        return redirect()->route('admin.productView');
    }
    public function updateStock(Request $request)
    {
        $stock = DB::table('stocks')->where('id','=',$request->id)->update([
            'stock_available' => $request->input('stock_available'),
        ]);
        return redirect()->route('admin.stockView');
    }
    public function importForm()
    {
        return view('Admin.import-form');
    }
    public function import(Request $request)
    {
       Excel::import(new productImport,$request->file);
       return redirect()->route('admin.productView');
      // return "Products Imported Successfully";
    }
    public function fileExport(Request $request) 
    {        
        return Excel::download(new ProductsExport, 'Products.xlsx');
    }

    public function fileExport1(Request $request) 
    {        
        return Excel::download(new StocksExport, 'Stocks.xlsx');
    }

    public function fileExport2(Request $request) 
    {        
        return Excel::download(new OrdersExport, 'Orders.xlsx');
    }

    
    // public function search()
    // {
    //     $search_text=$_GET['query'];
    //     $products=products::where('product_name','LIKE','%' .$search_text. '%')->with('Price')->get();
    //     return view('productView.search',compact('products'));
    // }


}
