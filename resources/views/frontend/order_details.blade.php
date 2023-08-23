@extends('frontend.layout.main')
@section('content')
<!-- fashion section start -->
<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active"><br><br>
            <div style="margin-left: 18%">
                <div class="col-md-9">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a><span class="divider"></span></li>
                        <li class="breadcrumb-item active"><a href="{{url('/orders')}}">Orders</a></li>
                    </ul>
                    <h3>Order #{{ $orderDetails['id']}} Details</h3>
                    <hr class="soft">
                    <div class="row">
                        <div class="col-md-4">
                            <table class="table table-stripped table-hover table-bordered">
                                <tr>
                                    <td colspan="2"><strong>Order Details</strong></td>
                                </tr>
                                <tr>
                                    <td>Order Date</td>
                                    <td>{{date('d-m-Y',strtotime($orderDetails['created_at']))}}</td>
                                </tr>
                                <tr>
                                    <td>Order Status</td>
                                    <td>{{$orderDetails['order_status']}}</td>
                                </tr>
                                {{-- <tr>
                                    <td>Order Total</td>
                                    <td>{{$orderDetails['product_qty']}}</td>
                                </tr> --}}
                                <tr>
                                    <td>Payment Method</td>
                                    <td>{{$orderDetails['payment_method']}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-7">
                            <table class="table table-striped table-hover table-bordered">
                                <tr>
                                    <td colspan="2"><strong>Delivery Address</strong></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$orderDetails['name']}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$orderDetails['email']}}</td>
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
                            </table>
                        </div>
                        <div class="col-md-11">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">Product Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Product Price</th>
                                    </tr>
                                </thead>
                                @foreach ($orderDetails['orders_products'] as $product)
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="{{ asset('/storage/blog/' . $product['image']) }}" alt="Product Image" width="50" height="50">
                                            </th>
                                            <td>{{$product['product_name']}}</td>
                                            <td>{{$product['product_qty']}}</td>
                                            <td>{{$product['product_price']}} Taka</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
    </div>
</div>
@endsection
