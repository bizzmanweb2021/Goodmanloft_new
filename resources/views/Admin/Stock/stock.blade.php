<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>STOCK LIST</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <!-- <th>Stock Image</th> -->
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Stock Availability</th>
    <th>Stock Input Date</th>
  </tr>
  @foreach($Stocks as $key=>$item)
  <tr>
    <td>{{ $key+1 }}</td>
    <!-- <td><img src="{{ url('/' . $item->stock_image )}}" width=80px; height=80px; /></td> -->
    <td>{{$item->product_name}}</td>
    <td>{{$item->Price}}</td>
    <td>{{$item->stock_available}}</td>
    <td>{{$item->stock_input_date}}</td>  
  </tr>
  @endforeach
</table>

</body>
</html>
