

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin/css/theme.css')}}" rel="stylesheet" media="all">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<style>
    body{
        margin-top: 100px;
    }
</style>
</head>

<body class="animsition">

        <!-- PAGE CONTAINER-->
<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h2 class="card-title mt-3 text-center"><a href="#">Log In</a></h2>
        @if(session('error'))
               <div class="alert alert-danger">{{ session('error') }}</div>

           @endif
        <form action="{{url('/')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
            <input name="email" class="form-control" placeholder="Email address" type="email">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
            <input name="password" class="form-control" placeholder="password" type="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-warning btn-block">Log in</button>
        </div> <!-- form-group// -->
    </article>
</div>

<!-- Jquery JS-->
<script src="{{asset('admin/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('admin/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('admin/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('admin/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('admin/js/main.js')}}"></script>


<script src="{{asset('admin/vendor/vector-map/jquery.vmap.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.world.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.brazil.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.europe.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.france.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.germany.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.russia.js')}}"></script>
<script src="{{asset('admin/vendor/vector-map/jquery.vmap.usa.js')}}"></script>
</body>

</html>
<!-- end document-->
