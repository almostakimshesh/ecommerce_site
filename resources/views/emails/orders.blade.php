<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>
    <div>
        <div>
            <div>&nbsp;</div>
        </div>
        <div>
            <div>&nbsp;</div>
        </div>
        <div>
            <div>Hello {{$name}}!</div>
        </div>
        <div>
            <div>&nbsp;</div>
        </div>
        <div>
            <div>Thank ou for shopping with us. Your order details are below;</div>
        </div>
        <div><div>&nbsp;</div></div>
        <div>
            <div>Order no. {{$order_id}}</div>
        </div>
        <div><div>&nbsp;</div></div>
        <div>
            <div>
                <table class="table table-sdivipped table-hover table-bordered" style="cellpadding='5' cellspaceing='5'">
                    <tr>
                        <td>Product Name</td>
                        <td>Product Quantity</td>
                        <td>Product Price</td>
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
            </div>
        </div>
        <div><div>&nbsp;</div></div>
        <div><div>&nbsp;</div></div>
        <table>
            <tr>
                <td><strong>Delivery Address</strong></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$orderDetails['name']}}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{$orderDetails['address']}}</td>
            </tr>
            <tr>
                <td>City</td>
                <td>{{$orderDetails['city']}}</td>
            </tr>
            <tr>
                <td>District</td>
                <td>{{$orderDetails['district']}}</td>
            </tr>
            <tr>
                <td>Division</td>
                <td>{{$orderDetails['division']}}</td>
            </tr>
            <tr>
                <td>Country</td>
                <td>{{$orderDetails['country']}}</td>
            </tr>
            <tr>
                <td>Pincode</td>
                <td>{{$orderDetails['pincode']}}</td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>{{$orderDetails['mobile']}}</td>
            </tr>
        <tr><td>&nbsp;</td></tr>
        </table>
    </div>
</body>
</html>
