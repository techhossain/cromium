@extends('components.layout')

@section('content')
    <!-- Breadcrumb Area Starts -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">blog details page</h2>

                    <nav class="text-center">
                        <ol class="breadcrumb bg-transparent justify-content-center">
                          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                          <li class="breadcrumb-item"><a href="{{route('register')}}">Register</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<!-- Blog Details Area Starts -->
<div class="blog-area blog-details-area padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                @if(session()->has('message'))

                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>

                  @endif


                <h2 class="text-center">Create an account</h2>
                <hr>


                <form method="post" action="{{route('registration')}}">

                    @csrf

                    <div class="mb-3">
                      <label for="name" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                      
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo URL</label>
                        <input type="text" class="form-control" id="photo" name="photo">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>


                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>



                    <input type="submit" class="btn btn-primary" value="Register">
                  </form>





            </div>
        </div>
    </div>
</div>


@endsection