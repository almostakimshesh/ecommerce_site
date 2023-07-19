@extends('layout.main')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>All Posts</h2>
				</div>
		
			</div>
			<div class="pull-left mb-2">
				<a href="{{ route('fashion.create')}}" class="btn btn-success">Create New Post</a>
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
					@foreach($fashions as $fashion)
						<div class="col-md-3">
							<div class="card">
							
								
								<a href="{{route('fashion.show',$fashion->id)}}"><img src="{{ asset('/storage/blog/'.$fashion->image)}}" class="card-img-top" height="75" width="75" alt=""></a>
								<div class="card-body">
									<h5 class="card-title">{{$fashion->title}}</h5>
									<p class="card-text">{{$fashion->price}}</p>
								</div>
								<div class="card-footer">
									<form action="{{route('fashion.destroy',$fashion->id)}}" method="post">
									<a href="{{route('fashion.edit',$fashion->id)}}" class="btn btn-primary">Edit</a>
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


