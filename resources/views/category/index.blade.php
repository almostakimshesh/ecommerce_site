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
		
		<table class="table table-hover">
			<thead>
			  <tr>
				<th scope="col">Id</th>
				<th scope="col">Category Name</th>
				<th scope="col">Action</th>
			  </tr>
			</thead>
			<tbody>
				@foreach($categories as $post)
			  <tr>
				<th scope="row">{{$post->id}}</th>
				<td>{{$post->categoryname}}</td>
				<td>
					<form action="{{route('category.destroy',$post->id)}}" method="post">
						<a href="{{route('category.edit',$post->id)}}" class="btn btn-primary">Edit</a>
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>	
						</form>
				</td>
			  </tr>
			  @endforeach
			</tbody>
		  </table>

    </div>
  </div>


@endsection




