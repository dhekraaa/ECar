<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
	<h1>{{ $title }}</h1>
	<table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Shipping Charges</th>
                <th>Coupon Code</th>
                <th>Coupon Amount</th>
                <th>Payment Method</th>
                <th>Grand Total</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
            @foreach($orders as $order)
            <?php $i++; ?>
                <tr >
                    <td>{{$i}}</td>
                    <td>{{$order->users_email}}</td>
                    <td >{{$order->name}}</td>
                    <td >{{$order->address.' '.$order->city.' '.$order->state.' '.$order->pincode.' '.$order->country}}</td>
                    <td >{{$order->mobile}}</td>
                    <td >{{$order->shipping_charges}}</td>
                    <td  >{{$order->coupon_code}}</td>
                    <td >{{$order->coupon_amount}}</td>
                    <td  >{{$order->payment_method}}</td>
                    <td  >{{$order->grand_total}}</td>
                    <td  >{{$order->created_at}}</td>
                    <td  >{{$order->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>