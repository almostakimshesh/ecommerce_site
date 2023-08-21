@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row ">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a><span class="divider"></span></li>
                    <li class="breadcrumb-item active"><a href="{{url('dashboard/orders')}}">Orders</a></li>
                </ul>
                <!-- DATA TABLE-->
                <div class="">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>date</th>
                                <th>name</th>
                                <th>E-mail</th>
                                <th>Orderd Product</th>
                                <th>Orderd price</th>
                                <th>Orderd Status</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order['id']}}</td>
                                <td>{{date('d-m-Y',strtotime($order['created_at']))}}</td>
                                <td>{{$order['name']}}</td>
                                <td>{{$order['email']}}</td>
                                <td>
                                    @foreach ($order['orders_products'] as $product)
                                        {{$product['product_name']}}
                                        ({{$product['product_qty']}})
                                    @endforeach
                                </td>
                                <td>{{$order['grand_total']}}</td>
                                <td>{{$order['order_status']}}</td>
                                <td>{{$order['payment_method']}}</td>
                                <td style="text-align: center;width:120px" ><a title="view Order Details" href="{{url('dashboard/orders/'.$order['id'])}}"><i class="fas fa-file"></i></a></td>
                            </tr style="">

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>
</div>
@endsection
