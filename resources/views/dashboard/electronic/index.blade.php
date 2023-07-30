@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>All Products</h2>
				</div>
		
			</div>
			<div class="pull-left mb-2">
				<a href="{{ route('electronic.create')}}" class="btn btn-success">Add New Product</a>
			</div>
		</div>
		
		<br>
		@if($message=Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif
		
		<div class="card-group">
			<div class="container py-5">
				<div class="row mt-4">
					@foreach($electronics as $electronic)
						<div class="col-md-3">
							<div class="card">
							
								
								<a href="{{route('electronic.show',$electronic->id)}}"><img src="{{ asset('/storage/blog/'.$electronic->image)}}" class="card-img-top" height="75" width="75" alt=""></a>
								<div class="card-body">
									<h5 class="card-title">{{$electronic->title}}</h5>
									<p class="card-text">Price: {{$electronic->price}} taka</p>
								</div>
								<div class="card-footer">
									<form action="{{route('electronic.destroy',$electronic->id)}}" method="post">
									<a href="{{route('electronic.edit',$electronic->id)}}" class="btn btn-primary">Edit</a>
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">Delete</button>	
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
@endsection


