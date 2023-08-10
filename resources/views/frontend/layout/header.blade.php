
@php
   $categories = category();
@endphp
@php
    $cus_users = cus_users();
@endphp
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
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

<style>
    td{
        text-align: center;
    }
 th{
    text-align: center;

 }
</style>
<script>
   jQuery(document).ready(function() {
      jQuery('ul[name="cat"] li').on('mouseenter', function() {
         var categoryID = jQuery(this).find('a').attr('value');
         if (categoryID) {
            jQuery.ajax({
               url: 'index/getSubcatagories/' + categoryID,
               type: "GET",
               dataType: "json",
               success: function(data) {
                  var subcategoriesDropdown = jQuery('ul[name="subcategories"]');
                  subcategoriesDropdown.empty(); // Clear existing options
                  jQuery.each(data, function(key, value) {
                     subcategoriesDropdown.append('<li value=' + key + ' ><a class="dropdown-item text-center" href="#">' + value + '</a></li>');
                  });
               }
            });
         } else {
            jQuery('ul[name="subcategories"]').empty();
         }
      });

      jQuery('ul[name="cat"] li').on('mouseleave', function() {
         jQuery('ul[name="subcategories"]').empty();
      });
   });
</script>




   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        @if (Auth::user())
                        <ul>
                            <li><a href="#">New Releases</a></li>
                            <li><a href="#">Today's Deals</a></li>
                            <li><a href="">Customer Service</a></li>
                            <li title="user"><a href="{{url('/profile')}}"><b class="text-capitalize">{{ Auth::user()->name}}</b></a></li>
                            <li><a href="{{url('/logout')}}">Logout</a></li>
                        </ul>
                    @else
                        <ul>
                            <li><a href="#">New Releases</a></li>
                            <li><a href="#">Today's Deals</a></li>
                            <li><a href="">Customer Service</a></li>
                            <li><a href="{{ route('login') }}">Log in</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    @endif

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="/index"><img src="{{asset('frontend/images/logo.png')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/index">Home</a>
                     @foreach ($categories as $category)
                        <a style="text-transform: capitalize;" href="/{{$category->categoryname}}">{{$category->categoryname}}</a>
                     @endforeach
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{asset('frontend/images/toggle-icon.png')}}"></span>
                  <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      All Category
   </button>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"  name="cat">
      @foreach ($categories as  $value)

      <li>
        <a class="dropdown-item" href="{{$value->categoryname}}" value="{{$value->id}}">{{$value->categoryname}} &raquo;
        </a>
        <ul class="dropdown-menu dropdown-submenu" name="subcategories" class="text-center">
          <li >
            <a class="dropdown-item" href="#" value=""></a>
          </li>
        </ul>
      </li>
      @endforeach
   </ul>
</div>

                  {{--{{-- <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                     </button>
                     <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                        @foreach ($categories as  $key=>$value)

                              <li class="divider"></li>
                              <li class="dropdown-submenu">
                                <a tabindex="-1" href="#" id="hash" value="{{$key}}" name="categories">{{$value->categoryname}}</a>
                                <ul class="dropdown-menu" name="subcategories">
                                  <li><a tabindex="-1" href="{{route('posts.index')}}"  class="dropdown-item text-center">Second level</a></li> --}}
                                  {{-- <li class="dropdown-submenu">
                                    <a href="#">More..</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">3rd level</a></li>
                                        <li><a href="#">3rd level</a></li>
                                    </ul>
                                  </li> --}}
                                {{-- </ul>
                              </li>
                        @endforeach

                     </div>
                  </div> --}}

                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{asset('frontend/images/flag-uk.png')}}" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="{{asset('frontend/images/flag-france.png')}}" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>

                     {{-- <div class="col-sm-2">

                        @if(session('cart'))
                            <a href="{{ url('cart') }}" class="btn btn-primary  mt-3 mb-3 btn-block">

                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 Cart
                                <!-- this code count product of choose tha user choose -->

                                <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                            </a>
                    </div>

                    <div class="col-sm-4 text-center">

                            @if(session('success'))
                                <p class="btn-success  mt-3 mb-3 btn-block session" style='padding: .375rem .75rem;'>
                                  {{ session('success') }}
                                </p>
                    </div>

                            @endif
                   <!-- if user dont choose any product -->
                            @else

                                <a href="" class="btn text-light bg-warning mt-3 mb-3" role="button">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Cart Empty
                                </a>

                                @endif --}}


                     <div class="login_menu">
                        <ul>
                           <li data-toggle="modal" data-target="#exampleModalCenter"><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              @if(session()->get('cart') == 0)
                              <span class="padding_10" title="Cart details">{{is_countable(session()->get('cart'))}}
                              </span>
                              @else
                              <span class="padding_10" title="Cart details">{{count(session()->get('cart'))}}
                              </span>
                              @endif</a>
                           </li>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Cart Contents:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">NAME</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">TOTAL PRICE</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                    @if (!empty(session()->get('cart')))
                    @foreach(session()->get('cart') as $productId  => $item)
                  <tr>
                    {{-- <form action="{{route('checkout',$fashion->id)}}" method="POST">
                        @csrf --}}
                        <td><input name="checkoutid" type="checkbox"></td>
                    <td scope="row">

                        <img src="{{ asset('/storage/blog/'.$item['image'])}}" alt="" width="100" height="100">
                    </td>
                        <td class="">{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['total']}}</td>
                        <td>
                        <form action="{{ route('cart.remove', $productId) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </form>
                  </tr>

                  @endforeach

                    </ul>
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                </tbody>
              </table>
              <a href="{{url('checkout')}}" class="btn btn-info">Checkout</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>&nbsp;&nbsp;
  <div class="lang_box ">
        <div class="lang_box ">
            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                 <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Profile <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>

            </a>
            <div class="dropdown-menu ">
               <a href="#" class="dropdown-item">
                 @if ($loggedInUser = Auth::user())
                 <a class="dropdown-item " href="{{url('profile')}}">
                    <span class="padding_10">{{ Auth::user()->name}}</span>
                </a>
                <a class="dropdown-item " href="{{url('logout')}}" >
                <span class="padding_10">Logout</span>
                </a>
                @else
                    <a class="dropdown-item" href="{{ route('login') }}">
                        <span class="padding_10">Log in</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('register') }}">
                        <span class="padding_10">Register</span>
                    </a>
                @endif
               </a>
            </div>
         </div>
    </a>

 </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Your favriot <br> Electronics Product</h1>
                              <div class="buynow_bt"><a href="/electronic">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Your favriot <br> Fashion Cloths</h1>
                              <div class="buynow_bt"><a href="/fashion">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
