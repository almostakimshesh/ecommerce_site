@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left mb-2">
				<h2>Add New Product</h2>
			</div>
			<div class="pull-right">
				<a href="{{ route('fashion.index')}}" class="btn btn-primary">Back</a>
			</div>
		</div>
	</div>

	@if(session('status'))
	<div class="alert alert-success mb-1 mt-1">
		{{session('status')}}
	</div>
	@endif

	<form action="{{ route('fashion.store')}}" method="POST" enctype="multipart/form-data">
		@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Product Title:</b>

				<input type="text" name="title" class="form-control" placeholder="Enter Title">
				@error('title')
				<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
				@enderror
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Product price:</b>

				<input class="form-control" name="price" placeholder="Enter Product Price">
				@error('price')
				<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
				@enderror
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Product Image:</b>

				<input type="file" name="image" class="form-control" placeholder="Enter Image">
				@error('image')
				<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
				@enderror
			</div>
		</div>
		<button type="submit" class="btn btn-primary ml-3">Add Product</button>
	</div> 
		

	</form>
</div>

@endsection