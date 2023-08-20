@extends('frontend.layout.main')
@section('content')
@foreach ($orders as $order)

<!-- fashion section start -->
<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
                <section class="h-100 gradient-custom">
                      <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-10 col-xl-8">
                          <div class="card" style="border-radius: 10px;">
                            <div class="card-header px-4 py-5">
                              <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">{{Auth::user()->name}}</span>!</h5>
                            </div>
                            <div class="card-body p-4">
                              <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                                <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                              </div>
                              @foreach ($order['orders_products'] as $product)
                              <table class="card shadow-0 border mb-4">
                                <tbody class="card-body">

                                    <tr class="row">
                                        <td class="col-md-2"><br>
                                            <p class="text-muted mb-0">{{$product['product_name']}}</p>
                                        </td>
                                        <td class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">BDT: {{$product['product_price']}} </p>
                                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        </td>
                                        <td class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">Qti: {{$product['product_qty']}}</p>
                                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        </td>
                                        <td class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">Payment Type: {{$order['payment_method']}}</p>
                                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        </td>
                                        <td class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <p class="text-muted mb-0 small">Ordered time: {{date('d-m-Y',strtotime($order['created_at'])) }} </p>
                                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                        </td>
                                        <td class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                            <form action="">
                                                <a class="btn btn-outline-danger" href="{{url('/order/'.$order['id'])}}" role="button">details</a>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            @endforeach
                              {{-- <div class="card shadow-0 border mb-4">
                                <div class="card-body">
                                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                  <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                      <p class="text-muted mb-0 small">Track Order</p>
                                    </div>
                                    <div class="col-md-10">
                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                        <div class="progress-bar" role="progressbar"
                                          style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="d-flex justify-content-around mb-1">
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> --}}
                              {{-- <div class="card shadow-0 border mb-4">
                                  <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                  <div class="row d-flex align-items-center">
                                    <div class="col-md-2">
                                      <p class="text-muted mb-0 small">Track Order</p>
                                    </div>
                                    <div class="col-md-10">
                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                        <div class="progress-bar" role="progressbar"
                                          style="width: 20%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="20"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <div class="d-flex justify-content-around mb-1">
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> --}}

                              <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Order Details</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> {{ $order['grand_total'] }}</p>
                              </div>
                              <div class="d-flex justify-content-between pt-2">
                                <p class="text-muted mb-0">Invoice Number : {{$product['order_id']}} </p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
                              </div>

                              <div class="d-flex justify-content-between">
                                <p class="text-muted mb-0">Invoice Date : {{date('d-m-Y',strtotime($order['created_at'])) }}</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
                              </div>

                              <div class="d-flex justify-content-between mb-5">
                                <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                              </div>
                            </div>
                            <div class="card-footer border-0 px-4 py-5"
                              style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                              <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                                paid: <span class="h2 mb-0 ms-2"> {{ $order['grand_total'] }}</span></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
         </div>

</div>
@endforeach

@endsection



