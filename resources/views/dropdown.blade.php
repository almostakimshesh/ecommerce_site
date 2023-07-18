<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select States and Country</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	

	
</head>
<body>
	<div class="container">
		<h2>Select your country & state</h2>
		<div class="form-group">
			<label>Select Country:</label>
			<select name="categories" class="form-control" style="width:250px;">
				<option value="">__Select Country__</option>
				@foreach($categories as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Select State</label>
			<select name="subcategories" class="form-control" style="width:250px;">				
				<option>__State__</option>
			</select>
		</div>




		{{-- <div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
			</button>
			<div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
			   @foreach ($categories as  $key=>$value)

					 <li class="divider"></li>
					 <li class="dropdown-submenu">
					   <a tabindex="-1" href="#" id="hash" value="{{$key}}" name="categories">{{$value}}</a>
					   <ul class="dropdown-menu">
						 <li><a name="subcategories" tabindex="-1" href="{{route('posts.index')}}"  class="dropdown-item text-center" >Second level</a></li>
						 {{-- <li class="dropdown-submenu">
						   <a href="#">More..</a>
						   <ul class="dropdown-menu">
							   <li><a href="#">3rd level</a></li>
							   <li><a href="#">3rd level</a></li>
						   </ul>
						 </li> --}}
					   {{-- </ul>
					 </li>
			   @endforeach
			   
			</div>
		 </div>
	</div>  --}}
	<script>
		jQuery(document).ready(function(){

			jQuery('select[name="categories"]').on('change',function(){

				var categoryID = jQuery(this).val();
				if(categoryID)
				{
					jQuery.ajax({

						url:'dropdownlist/getSubcatagories/'+categoryID,
						type: "GET",
						dataType: "json",
						success: function(data)
						{	
							console.log(data);
							jQuery('select[name="subcategories"]').empty();
							jQuery.each(data,function(key,value){
								$('select[name="subcategories"]').append('<option value="'+key+'">'+value+'</option>');
							});
						}
					});
				}

				else
				{
					$('select[name="subcategories"]').empty();
				}
			});

			});
	</script>

</body>
</html>


{{-- <div>
	<select name="categories" id="">catagory
	   <option value="">catagory</option>
	   @foreach($categories as $key=>$value)
	   <option value="{{$key}}">{{$value->categoryname}}</option>
	   @endforeach
	</select>
 </div>
 <div class="form-group">
	<label>Select State</label>
	<select name="subcategories" class="form-control" style="width:250px;">				
	   <option>__State__</option>
	</select>
 </div> --}}