
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('frontend/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/checkout.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="fashion_section">
        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
    <div class="container">

        <div class="row">
            <div class="col-xl-7">
                <form name="checkoutForm" action="{{url('order')}}" method="post">
                <div class="card">
                    <div class="card-body">
                        <ol class="activity-checkout mb-0 px-4 mt-3">
                            {{-- <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-receipt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Billing Info</h5>
                                        <p class="text-muted text-truncate mb-4">Sed ut perspiciatis unde omnis iste</p>
                                        <div class="mb-3">
                                            <form>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-name">Name</label>
                                                                <input type="text" class="form-control" id="billing-name" placeholder="Enter name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-email-address">Email Address</label>
                                                                <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-phone">Phone</label>
                                                                <input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no.">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Address</label>
                                                        <textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address"></textarea>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-4 mb-lg-0">
                                                                <label class="form-label">Country</label>
                                                                <select class="form-control form-select" title="Country">
                                                                    <option value="0">Select Country</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-4 mb-lg-0">
                                                                <label class="form-label" for="billing-city">City</label>
                                                                <input type="text" class="form-control" id="billing-city" placeholder="Enter City">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <label class="form-label" for="zip-code">Zip / Postal code</label>
                                                                <input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-truck text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Shipping Info</h5>
                                        <p class="text-muted text-truncate mb-4">
                                        <div class="btn btn-primary"><a href="{{url('add_delivery_address')}}">Add Address</a></div></p>

                                        <div class="mb-3">

                                                @csrf
                                                <div class="row">
                                                    @foreach ($deliveryAddresses as $address)
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div data-bs-toggle="collapse">
                                                            <label class="card-radio-label mb-0">
                                                                <input type="radio" name="address_id" id="{{$address['id']}}" class="card-radio-input" value="{{$address['id']}}" checked="">
                                                                <div class="card-radio text-truncazte p-3">
                                                                    <span class="fs-14 mb-4 d-block">address: {{$address['id']}}</span>

                                                                    <span class="fs-14 mb-2 d-block">{{$address['address']}}, {{$address['city']}} </span>
                                                                    <span class="text-muted fw-normal text-wrap mb-1 d-block">
                                                                        {{$address['district']}},{{$address['division']}}<br>{{$address['country']}}
                                                                    </span>

                                                                    <span class="text-muted fw-normal d-block">{{$address['mobile']}}</span>
                                                                </div>
                                                            </label>

                                                            <div class="edit-btn bg-light  rounded">

                                                                <a href="{{route('add_delivery_address.edit',$address['id'])}}" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit">
                                                                    <i class="bx bx-pencil font-size-16"></i>
                                                                </a>
                                                              <a href="{{url('add_delivery_address/destroy',$address['id'])}}"><i class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Payment Info</h5>
                                        <p class="text-muted text-truncate mb-4">Duis arcu tortor, suscipit eget</p>
                                    </div>
                                    <div>
                                        <h5 class="font-size-14 mb-3">Payment method :</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="payment" id="pay-methodoption1" class="card-radio-input" value="Prepaid">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <i class="bx bx-credit-card d-block h2 mb-3"></i>
                                                            Credit / Debit Card
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="payment" id="pay-methodoption2" class="card-radio-input" value="Prepaid">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <i class="bx bxl-paypal d-block h2 mb-3"></i>
                                                            Paypal
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-sm-6">
                                                <div>
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="payment" id="pay-methodoption3" class="card-radio-input" checked="" value="COD">

                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <i class="bx bx-money d-block h2 mb-3"></i>
                                                            <span>Cash on Delivery</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <a href="{{route('index')}}" class="btn btn-link text-muted">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                    </div> <!-- end col -->
                        <div class="col">
                            <div class="text-end mt-2 mt-sm-0">
                                <button type="submit" class="btn btn-success">
                                    <i class="mdi mdi-cart-outline me-1"></i> Procced </button>
                            </div>
                        </div> <!-- end col -->
                    </form>
                </div> <!-- end row-->
            </div>
            <div class="col-xl-5">
                <div class="card checkout-order-summary">
                    <div class="card-body">
                        <div class="p-3 bg-light mb-3">
                            <h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2">#MN0124</span></h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 table-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                                        <th class="border-top-0" scope="col">Product Desc</th>
                                        <th class="border-top-0" scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($cartData))
                                    @php
                                    $grandTotal = 0;
                                    @endphp
                                    @foreach($cartData as  $item)
                                    {{-- @dd(asset('/storage/blog/'.$item['image'])) --}}
                                    <tr>
                                        <th scope="row"><img src="{{ asset('/storage/blog/'.$item['image'])}}" alt="" width="100" height="100"></th>

                                        <td>
                                            <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">{{ $item['name'] }}</a></h5>

                                            <p class="text-muted mb-0 mt-1">{{ $item['price'] }} x {{ $item['quantity'] }}</p>
                                        </td>
                                        <td>{{ $item['price'] }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h5 class="font-size-14 m-0">Sub Total :</h5>
                                        </td>
                                        <td>
                                            {{ $item['total']}}
                                        </td>
                                    </tr>
                                    @php
                                    $grandTotal = $grandTotal + $item['total'];
                                    @endphp
                                    @endforeach

                                    <tr class="bg-light">
                                        <td colspan="2">
                                            <h5 class="font-size-14 m-0">Total:</h5>
                                        </td>
                                        <td>
                                            {{ number_format($grandTotal, 2) }}
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div></div></div></div></div>
</body>
</html>
