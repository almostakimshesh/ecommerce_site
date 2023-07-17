
@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>Edit Post</h2>
				</div>
				<!-- <div class="pull-right">
					<a href="{{ route('category.index')}}" class="btn btn-primary" enctype="multipart/form-data">Back</a>
				</div> -->
			</div>
		</div>
	
		@if(session('status'))
		<div class="alert alert-success mb-1 mt-1">
			{{session('status')}}
		</div>
		@endif
	
		<form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
	
			@csrf
			@method('PUT')
	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<b>Post Title:</b>
						<input type="text" name="categoryname" value="{{$category->categoryname}}" class="form-control" placeholder="Post Title">
						@error('categoryname')
						<div class="alert alert-danger mt-1 mb-1">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
	
				<button type="submit" class="btn btn-primary" ml-3>Update</button>
	
			</div>
			
		</form>
	</div>
</div>
@endsection