@extends('layout.main')
@section('content')
<style>
    strong {
        display: block;
        margin: 0 auto;
        text-align: center;
    }
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row ">
            <div class="col-md-12">
                <ul class="breadcrumb "> {{-- float-md-right --}}
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a><span class="divider"></span></li>
                    <li class="breadcrumb-item "><a href="{{url('dashboard/orders')}}">Orders</a></li>
                    <li class="breadcrumb-item active ">Order #{{$orderDetails['id']}}Details</li>
                </ul>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
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
                    <tr>
                        <td>Order Total</td>
                        <td>{{$orderDetails['grand_total']}} Taka</td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td>{{$orderDetails['payment_method']}}</td>
                    </tr>
                </table>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-body p-0">
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <td colspan="2"><strong>Billing Address</strong></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$userDetails['name']}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$userDetails['email']}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        {{-- <td>{{$Details['address']}}</td> --}}
                    </tr>
                    <tr>
                        <td>City</td>
                        {{-- <td>{{$Details['city']}}</td> --}}
                    </tr>
                    <tr>
                        <td>District</td>
                        {{-- <td>{{$Details['district']}}</td> --}}
                    </tr>
                    <tr>
                        <td>Division</td>
                        {{-- <td>{{$Details['division']}}</td> --}}
                    </tr>
                    <tr>
                        <td>Country</td>
                        {{-- <td>{{$Details['country']}}</td> --}}
                    </tr>
                    <tr>
                        <td>Pincode</td>
                        {{-- <td>{{$Details['pincode']}}</td> --}}
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        {{-- <td>{{$Details['mobile']}}</td> --}}
                    </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                </div>
                    <strong  class="card-title">Update Order Status</strong>
                <div class="card-body">
                  <table class="table table-striped table-hover table-bordered">
                      <tr>
                          <td colspan="2" style="text-align: center;">
                            <form action="{{url('update_order_status')}}" method="post"> @csrf
                                <input type="hidden" name="order_id" value="{{$orderDetails['id']}}">
                                <select name="order_status" id="" style="padding: 2%;" required>
                                    <option value="" >Select status</option>
                                    @foreach ($orderStatus as $status)
                                        <option value="">{{$status['name']}}</option>
                                    @endforeach
                                </select>&nbsp;&nbsp;
                                <button class="btn btn-outline-dark">Submit</button>
                            </form>
                          </td>
                      </tr>
                  </table>
                </div>
            </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0"> {{--class="table table-hover text-nowrap"--}}
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Product Price ( Per piece)</th>
                        </tr>
                    </thead>
                    @foreach ($orderDetails['orders_products'] as $product)
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$product['product_name']}}</td>
                                <td>{{$product['product_qty']}}</td>
                                <td>{{$product['product_price']}} Taka</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
