@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>All Categories</h2><br>
				</div>
		
			</div>
			<div class="pull-left mb-2">
				<a href="{{ route('category.create')}}" class="btn btn-success">Create New Category</a>
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
					@foreach($categories as $post)
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title">{{$post->categoryname}}</h5>
								</div>
								<div class="card-footer">
									<form action="{{route('category.destroy',$post->id)}}" method="post">
									<a href="{{route('category.edit',$post->id)}}" class="btn btn-primary">Edit</a>
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




