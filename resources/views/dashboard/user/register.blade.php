@extends('frontend.layout.main')
@section('content')
<div class="fashion_section">
    <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="card bg-light">
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            <h2 class="card-title mt-3 text-center"><a href="#">Create Account</a></h2><br>
                            <form action="{{ route('register.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                 </div>
                                <input name="firstname" class="form-control" placeholder="First name" type="text">
                                <input name="lastname" class="form-control" placeholder="Last name" type="text">

                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                 </div>
                                <input name="email" class="form-control" placeholder="Email address" type="email">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                </div>
                                <select name="" class="custom-select" style="max-width: 120px;">
                                    <option selected="">+880</option>
                                    <option value="1">+880</option>
                                    <option value="2">+880</option>
                                    <option value="3">+880</option>
                                </select>
                                <input name="phone" class="form-control" placeholder="Phone number" type="text">
                            </div> <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input name="password" class="form-control" placeholder="Create password" type="password">
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block"> Create Account  </button>
                            </div> <!-- form-group// -->
                            <p class="text-center">Have an account? <a href="{{route('userlogin')}}">Log In</a> </p>
                        </form>
                        </article>
                        </div> <!-- card.// -->

                        </div>
                        <!--container end.//-->

                        <br><br>
            </div>
       </div>
    </div>
</div>

@endsection
