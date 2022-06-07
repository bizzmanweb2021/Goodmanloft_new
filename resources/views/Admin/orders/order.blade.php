<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>ORDERS LIST</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Customer Name</th>
    <th>Transaction_ID</th>
    <th>Shipping Charge</th>
    <th>Coupon Discount Amount</th>
    <th>Total Amount</th>
    <th>Payment Status</th>
    <th>Date</th>
    
  </tr>
  @foreach($orders as $key=> $order)
  <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $order->full_name }}</td>
                            <td>{{ $order->transaction_id }}</td>
                            <td>{{ $order->shipping_charge }}</td> 
                            <td>{{ $order->discount_amount }}</td> 
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>{{ $order->created_at }}</td>  
  </tr>
  @endforeach
</table>

</body>
</html>
