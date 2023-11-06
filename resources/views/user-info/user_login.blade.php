@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 border mt-5 rounded-3 border-style shadow bg-light">
                <div class="row border border-dark rounded-3 p-1 style-box" id="border-all">
                    <div class="d-flex justify-content-center fs-1 fw-bold border rounded">Login</div>

                    <div class="col-lg-6 col-sm-12 col-md-12  border" id="mediaquare-img"><img class="image-size"
                            src="{{ asset('images/login.gif') }}" alt="logo"></div>
                    <!-- login form start hrer  -->
                    <div class="col-lg-6 col-sm-12 col-md-12 border" id="mediaquare-form">
                        <div class="mt-5">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="input-container">
                                    <i class="fa fa-user icon"></i>
                                    <input class="input-field form-control" type="text" placeholder="Username"
                                        name="usrnm">
                                </div>
                                <div class="input-container">
                                    <i class="fa fa-key icon"></i>
                                    <input class="input-field form-control" type="password" placeholder="Password"
                                        name="psw">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn-style mb-2 form-control">Login</button>
                                </div>
                                <div class="d-flex justify-content-center">If you have no account</div>
                                <div class="d-flex justify-content-center "><a class="text-decoration-none"
                                        href="#">Registration</a></div>
                            </form>
                        </div>
                    </div>
                    <!-- login form end hrer  -->
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
