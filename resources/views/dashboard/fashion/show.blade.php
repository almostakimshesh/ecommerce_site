@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
    </div>
    <h1>{{$fashion->title}}</h1>

    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('/storage/blog/'.$fashion->image)}}" alt="Product Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h4>Product Description</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel mollis neque, nec vulputate elit. Suspendisse potenti. <br></p>
        
        <h4>Price: {{$fashion->price}}</h4>
        
        <p>Availability: In Stock</p>
        
        <div class="form-group">
          <label for="quantity">Quantity:1</label>
          <input type="number" id="quantity" class="form-control" value="1" min="1">
        </div>
        
        <button class="btn btn-primary">Add Stock</button>
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

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

</div>
@endsection