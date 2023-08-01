@extends('frontend.layout.main')
@section('content')
<!-- fashion section start -->
<div class="fashion_section">
   <div id="main_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container">
               <h1 class="fashion_taital">Man & Woman Fashion</h1>
               {{-- <div>
                <!-- Display the products in the cart -->

                @if (!empty(session()->get('cart')))
                    <h2>Cart Contents:</h2>
                    <ul>
                        @foreach(session()->get('cart') as $productId  => $item)
                            <li>
                                {{ $item['name'] }} - Quantity: {{ $item['quantity'] }} - Price: {{ $item['price'] }} - total: {{ $item['total']}}
                                - Image: <img src="{{ asset('/storage/blog/'.$item['image'])}}" alt="" width="100" height="100">
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Your cart is empty.</p>
                @endif
            </div> --}}
               @if(session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif

           @if(session('error'))
               <div class="alert alert-danger">{{ session('error') }}</div>

           @endif
               <div class="fashion_section_2">
                  <div class="row">
                     @foreach($fashions as $fashion)
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <a href="{{route('fashion',$fashion->id)}}"> {{-- {{route('fashion.details',$fashion->id)}} --}}
                              <img src="{{ asset('/storage/blog/'.$fashion->image)}}" class="card-img-top" height="75" width="75" alt="">
                           </a>
                           <div class="card-body">
                              <h5 class="card-title"><b>{{$fashion->title}}</b></h5>
                              <p class="card-text">Price: {{$fashion->price}} taka</p>
                           </div>
                           <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Buy Now</button>
                                <a href="{{route('fashion',$fashion->id)}}" class="btn btn-danger">Add to Cart</a>
                           </form>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
      <i class="fa fa-angle-left"></i>
      </a>
      <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
      <i class="fa fa-angle-right"></i>
      </a>
   </div>
</div>
<!-- fashion section end -->

      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           @foreach($electronics as $electronic)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                  <a href="{{route('electronic',$electronic->id)}}">  {{--{{route('electronic',$electronic->id)}} --}}
                                    <img src="{{ asset('/storage/blog/'.$electronic->image)}}" class="card-img-top" height="75" width="75" alt="">
                                 </a>
                                 <div class="card-body">
                                    <h5 class="card-title"><b>{{$electronic->title}}</b></h5>
                                    <p class="card-text">Price: {{$electronic->price}} taka</p>
                                 </div>
                                 <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Buy Now</button>
                                    <a href="" type="submit" class="btn btn-danger">Add to cart</a>
                                    </form>
                                 </div>

                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
</div>
      <!-- electronic section end -->
@endsection
