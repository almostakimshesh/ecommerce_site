@extends('frontend.layout.main')
@section('content')

      <!-- electronic section start -->
<div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Electronic</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           @foreach($posts as $post)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <img src="{{ asset('/storage/blog/'.$post->image)}}" class="card-img-top" height="75" width="75" alt="">
                                 <div class="card-body">
                                    <h5 class="card-title">{{$post->title}}</h5>
                                    <p class="card-text">{{$post->description}}</p>
                                 </div>
                                 <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Buy Now</button>	
                                    <button type="submit" class="btn btn-danger">Add to cart</button>	
                                    </form>
                                 </div>
                                 
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Computers</h4>
                                 <p class="price_text">Start Price  <span style="color: #262626;">$ 100</span></p>
                                 <div class="electronic_img"><img src="images/computer-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
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