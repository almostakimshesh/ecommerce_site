@extends('frontend.layout.main')
@section('content')
<div class="fashion_section">
  <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <h1  class="display-2" style="margin-left: 70px;"><b>{{$electronic->title}}</b></h1>
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ asset('/storage/blog/'.$electronic->image)}}" alt="Product Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                  <h4>Product Description</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel mollis neque, nec vulputate elit. Suspendisse potenti. <br></p>
                  <h4><b>Price: {{$electronic->price}} taka</b></h4>
                  <p>Availability: In Stock</p>
                  <form action="{{ route('add.cart',['id' => $electronic->id])}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input name="quantity" type="number" id="quantity" class="form-control" value="1" min="1">

                      </div>
                      <button class="btn btn-primary">add to cart</button>
                </form>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-6">
                  <h3>Customer Reviews</h3>
                  <p>No reviews yet.</p>
                </div>
                <div class="col-md-6">
                  <h3>Related Products</h3>
                  <ul>
                    <li>Related Product 1</li>
                    <li>Related Product 2</li>
                    <li>Related Product 3</li>
                  </ul>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
