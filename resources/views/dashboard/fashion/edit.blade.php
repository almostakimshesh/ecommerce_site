
@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>Edit Product</h2>
				</div>
				<div class="pull-right">
					<a href="{{ route('fashion.index')}}" class="btn btn-primary" enctype="multipart/form-data">Back</a>
				</div>
			</div>
		</div>
	
		@if(session('status'))
		<div class="alert alert-success mb-1 mt-1">
			{{session('status')}}
		</div>
		@endif
	
		<form action="{{route('fashion.update',$fashion->id)}}" method="POST" enctype="multipart/form-data">
	
			@csrf
			@method('PUT')
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Title:</b>
						<input type="text" name="title" value="{{$fashion->title}}" class="form-control" placeholder="Post Title">
						@error('title')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
	
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Price:</b>
						<input class="form-control" value="{{$fashion->price}}"  name="price" placeholder="Enter price">
						@error('price')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
	
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Product Image:</b>
						<input type="file" name="image" class="form-control" placeholder="Post Image">
						@error('image')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
	
					<div class="form-group">
						<img src="{{ asset('/storage/blog/'.$fashion->image)}}" height="200" width="200" alt="">
					</div>
				</div>
	
				<button type="submit" class="btn btn-primary" ml-3>Update</button>
	
			</div>
			
		</form>
	</div>
</div>
@endsection