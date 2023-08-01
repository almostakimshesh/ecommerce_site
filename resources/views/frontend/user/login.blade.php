@extends('frontend.layout.main')
@section('content')
<div class="fashion_section">
    <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="card bg-light">
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            <h4 class="card-title mt-3 text-center">Create Account</h4>
                            <form action="{{ route('register.store')}}" method="POST" enctype="multipart/form-data">
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
                            <p class="text-center">Don't have an account? <a href="/user/register">Register</a> </p> <!-- form-group// -->
                        </article>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection

