@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>All Posts</h2><br>
				</div>
		
			</div>
			<div class="col-lg-12 margin-tb">
				<a href="{{ route('posts2.create')}}" class="btn btn-success">Create New Post</a>
			</div>
		</div>
		
		@if($message=Session::get('success'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
		@endif
		
	
		
		<div class="card-group">
			<div class="container py-5">
				<div class="row mt-4">
					@foreach($posts2s as $post)
						<div class="col-md-3">
							<div class="card">
							
								<img src="{{ asset('/storage/blog/'.$post->image)}}" class="card-img-top" height="75" width="75" alt="">
								<div class="card-body">
									<h5 class="card-title">{{$post->title}}</h5>
									<p class="card-text">{{$post->description}}</p>
								</div>
								<div class="card-footer">
									<form action="{{route('posts2.destroy',$post->id)}}" method="post">
									<a href="{{route('posts2.edit',$post->id)}}" class="btn btn-primary">Edit</a>
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


