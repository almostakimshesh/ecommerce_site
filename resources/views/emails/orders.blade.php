<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Hello{{$name}}</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Thank ou for shopping with us. Your order detal are a below;</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>Order no. {{$order_id}}</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>
                <table style="cellpadding='5' cellspaceing='5'">
                    <tr>
                        <td>Product Name</td>
                        <td>Product Quantit</td>
                        <td>Product price</td>
                    </tr>
                    @foreach ($orderDetails['orders_products'] as $order)
                    <tr>
                        <td>{{$order['product_name']}}</td>
                        <td>{{$order['product_qty']}}</td>
                        <td>{{$order['product_price']}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="5" align="right">Grand Total</td>
                        <td>Taka {{$orderDetails['grand_total']}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <table>
            <tr>
                <td><strong>Delivery Address</strong></td>
            </tr>
            <tr>
                <td>{{$orderDetails['name']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['address']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['city']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['district']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['division']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['country']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['pincode']}}</td>
            </tr>
            <tr>
                <td>{{$orderDetails['mobile']}}</td>
            </tr>
        <tr><td>&nbsp;</td></tr>
        </table>
    </table>
</body>
</html>
