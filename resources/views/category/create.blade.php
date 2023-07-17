@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left mb-2">
					<h2>Add New Category</h2>
				</div>
					 <div class="pull-right">
						<a href="{{ route('category.index')}}" class="btn btn-primary">Back</a>
					</div> 
			</div>
		</div>
		@if(session('status'))
			<div class="alert alert-success mb-1 mt-1">
				{{session('status')}}
			</div>
		@endif

	<form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">
		@csrf

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<b>Post Title:</b>

				<input type="text" name="categoryname" class="form-control" placeholder="Enter Title">
				@error('categoryname')
				<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
				@enderror
			</div>
		</div>

		<button type="submit" class="btn btn-primary ml-3">Add Post</button>
	</div> 
		

	</form>
</div>
</div>
@endsection