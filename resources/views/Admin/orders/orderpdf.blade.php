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
    <!-- <th>Email_ID</th> -->
    <th>Transaction_ID</th>
    <th>Payment Method</th>
    <!-- <th>Address Line1</th>
    <th>Address Line2</th>
    <th>Order Currency</th>
    <th>Postal Code</th>
    <th>Country Code</th> -->
    <th>Shipping Charge</th>
    <th>Coupon Discount Amount</th>
    <th>Total Amount</th>
    <th>Payment Status</th>
    <th>Date</th>
    
  </tr>
  @foreach($Orders as $key=> $order)
  <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $order->full_name }}</td>
                            <!-- <td>{{ $order->email_address}}</td> -->
                            <td>{{ $order->transaction_id }}</td>
                            <td>{{ $order->payment_method}}</td>
                            <!-- <td>{{ $order->address_line_1}}</td>
                            <td>{{ $order->address_line_2}}</td>
                            <td>{{ $order->order_currency}}</td>
                            <td>{{ $order->postal_code}}</td>
                            <td>{{ $order->country_code}}</td> -->
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
