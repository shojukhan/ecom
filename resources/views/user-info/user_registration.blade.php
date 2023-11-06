@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 border mt-5 rounded-3 border-style shadow bg-light">
                <div class="row border border-dark rounded-3 p-1 style-box" id="border-all">
                    <div class="d-flex justify-content-center fs-3 fw-bold text-uppercase">Registration</div>

                    <div class="col-lg-6 col-sm-12 col-md-12  border" id="reg-mediaquare-img"><img class="reg-image-size"
                            src="{{ asset('images/login.gif') }}" alt="logo"></div>
                    <!-- login form start hrer  -->

                    <div class="col-lg-6 col-sm-12 col-md-12 border" id="mediaquare-form">
                        <div class="mt-5">


                            <form action="{{ route('createuser') }}" method="POST">
                                @csrf
                                @method('POST')

                                <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input class="input-field form-control" type="text" name="fullname" placeholder="Full Name">
                                </div>
                                <div class="input-container">
                                    <i class="fa-solid fa-envelope icon"></i>
                                    <div class="input-field form-control w-50"><span class="">www.healapp.xyz/</span></div>
                                    <input class="input-field form-control" type="text" placeholder="Username" name="username"required>
                                </div>

                                <div class="input-container">
                                    <i class="fa-solid fa-envelope icon"></i>
                                    <input class="form-control input-field" placeholder="Email" type="email"name="email" required>
                                </div>

                                <div class="input-container">
                                    <i class="fa-solid fa-envelope icon"></i>
                                        <input class="input-field form-control" placeholder="Mobile" type="number"name="Mobile" required>
                                    </div>


                                    <div class="input-container">
                                        <i class="fa-solid fa-envelope icon"></i>
                                        <input class="input-field form-control" placeholder="Password" type="password"name="password" required>
                                    </div>

                                    <div class="input-container ">
                                        <i class="fa-solid fa-envelope icon"></i>
                                        <input class="input-field form-control" placeholder="Shop Name" type="text"name="shopname" required>
                                    </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn-style mb-2 form-control">Registration</button>
                                </div>

                                <div class="d-flex justify-content-center">Have you any account?</div>
                                <div class="d-flex justify-content-center "><a class="text-decoration-none"
                                        href="#">Registration</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- login form end hrer  -->
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    @endsection
