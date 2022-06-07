<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>PRODUCT LIST</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <!-- <th>Product Image</th> -->
    <th>Product Name</th>
    <th>Product Size</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Weight</th>
    <!-- <th>Color</th>
    <th>Shape</th> -->
    <th>Brand</th>
    <th>Sale</th>
    <th>New</th>
    <th>Discount</th>
    <th>Product Dimension</th>
    <th>Stock Availability</th>
   
  </tr>
  @foreach($Products as $key=>$item)
  <tr>
    <td>{{ $key+1 }}</td>
    <!-- <td><img src="{{ url('/' . $item["product_image"] )}}" width=80px; height=80px; /> </td> -->
    <td>{{$item["product_name"]}}</td>
    <td>{{$item["Product_Size"]}}</td>
    <td>{{$item["Price"]}}</td>
    <td>{{$item["Quantity"]}}</td>
    <td>{{$item["Weight"]}}</td>
    <!-- <td>{{$item["Color"]}}</td>
    <td>{{$item["Shape"]}}</td> -->
    <td>{{$item["Brand"]}}</td>
    <td>{{$item["sale"]}}</td>
    <td>{{$item["new"]}}</td>
    <td>{{$item["discount"]}}%</td>
    <td>{{$item["Product_Dimension"] }}</td>
    <td>{{$item["stock_availability"]}}</td>

   
  </tr>
  @endforeach
</table>

</body>
</html>
