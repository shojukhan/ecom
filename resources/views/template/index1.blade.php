@extends('template.temmain.tempmaster')

@section('tempcontent')
<div class="container-fluid">
    <div class="row bg-light border">
        <div class=" col-2 justify-content-center bg-light"><span class="text-center "><a
                    class="text-decoration-none text-dark" href="tel:01781528102">Call Us : +8801781528102</a></span>
        </div>
        <div class="col-8">
            <marquee class="text-primary bg-light" behavior="scroll" direction="left">আমাদের সাইট ব্যাবহার করে আপনার পণ্য
                বিক্রি করুন অথবা ক্রয় করুন সুলভ মূল্যে-Shataj soft Ltd</marquee>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="row mt-1">
        <div class="col-2"></div>
        <div class="col-7">
            <img src="{{ asset('assets/images/logo-1.png') }}" class="img-size-logo" alt="logo">
        </div>
        <div class="col-3 d-flex justify-content-evenly">

            <div class="card-bottom">
                <button class="product-button" type="button" class="cart">
                    <div class="btn"><a class="text-decoration-none text-dark" href="#">login</a></div>
                </button>
            </div>
            <div class="card-bottom">
                <button class="product-button" type="button" class="cart">
                    <div class="btn"><a class="text-decoration-none text-dark" href="#">My card</a></div>
                </button>
            </div>

            <div class="card-bottom">
                <button class="product-button" type="button" class="cart">
                    <div class="btn"><a class="text-decoration-none text-dark" href="#">English</a></div>
                </button>
            </div>
        </div>
        <div class="row nav border color">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="d-flex justify-content-evenly m-1 gap-5">
                    <ul class="d-flex justify-content-evenly gap-5 list-unstyled header-manu">
                        <li><a href="#">home</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">service</a></li>
                        <li><a href="#">contuct</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <form action="#">
                        <div class="d-flex search">
                            <input class="border rounded" type="text" placeholder="Search.." name="search">
                            <button class="border rounded" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- slider  section start here  -->
    <section>
        <div class="container bg-light border rounded mt-4">
            <div class="row d-flex slide-centering ms-5">
                <div class="col-lg-6 col-sm-12 col-sm-12 justify-content-center">
                    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/vivi slide.jpg') }}" class="d-block w-100" alt="slide 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/vivi slide.jpg') }}" class="d-block w-100" alt="slide 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/vivi slide.jpg') }}" class="d-block w-100" alt="slide 3">
                            </div>
                        </div>
                        <div class="carousel-control-prev" type="button" data-bs-target="#carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </div>
                        <div class="carousel-control-next" type="button" data-bs-target="#carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </div>
                    </div>
                <!-- left site image gallary  -->
                <div class="col-lg-6 col-sm-12 col-sm-12 justify-content-center">
                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets/images/3.jpg') }}" alt="Mountains" width="600" height="400">
                            </a>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets/images/3.jpg') }}" alt="Mountains" width="600" height="400">
                            </a>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets/images/3.jpg') }}" alt="Mountains" width="600" height="400">
                            </a>
                        </div>
                    </div>

                    <div class="responsive">
                        <div class="gallery">
                            <a target="_blank" href="#">
                                <img src="{{ asset('assets/images/3.jpg') }}" alt="Mountains" width="600" height="400">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- left site image gallary end -->

    <!-- product section start  -->

    <section>
        <div class="container border border-dark rounded mt-4 color">
            <div><span class="d-flex justify-content-center product">Our Product</span>
                <hr>
            </div>

            <!-- fast row start here  -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fast row end here  -->



            <!-- 2nd row start hrer  -->
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/vivo.jpg">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="card-top">
                            <div class="tag">15% off</div>
                        </div>
                        <div class="card-img">
                            <div class="img-background"></div>
                            <img src="assets/images/watch.png">
                        </div>
                        <div class="card-title">
                            <p class="d-flex justify-content-center border rounded mt-2">smart watch</p>
                        </div>
                        <div class="card-info">
                            <div class="price"><span
                                    class="d-flex justify-content-center border rounded mt-2 p-3">299,0
                                    TK</span></div>
                        </div>
                        <div class="card-bottom">
                            <button class="product-button" type="button" class="favorite">
                                <i class="fa-solid fa-heart"></i>
                            </button>
                            <button class="product-button" type="button" class="cart">
                                <span>Add to card</span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <!-- footer part start here  -->
            <section>
                <div class="row">
                    <div class="col-lg-3 col-sm-12 text-center"><span class="fs-5 fw-bold">Address</span>
                        <div style="text-align: justify;"> Corporate Office
                            Rahman Complex (2nd Fl), Plot-13, Road-1
                            Mirpur-10 (Goalchattor), Dhaka-1216, Bangladesh
                            CALL : 01733 919791 / 0167 66 80455</div>
                    </div>
                    <div class="col-lg-3 col-sm-12 text-center"><span class="fs-5 fw-bold">About us</span>
                        <div style="text-align: justify;">Shataj Soft Ltd. has been engaged with Web Design,
                            Customized
                            Software, Mobile applications and IT Related Support Company based in Dhaka, Bangladesh,
                            Established in 2011.</div>
                    </div>
                    <div class="col-lg-3 col-sm-12 text-center"> <span class="fs-5 fw-bold">E-mail</span>
                        <div style="text-align: justify;">
                            <a href="mailto:shatajsoft@gmail.com" class="text-decoration-none"><i
                                    class="fa-solid fa-envelope"></i> &nbsp;shatajsoft@gmail.com</a><br>
                            <a href="shataj.com" class="text-decoration-none"><i
                                    class="fa-solid fa-eye-low-vision"></i>&nbsp;https://www.shataj.com/</a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 text-center"><span class="fs-5 fw-bold">Sosil Media</span>

                        <div class="d-flex justify-content-evenly gap-2 m-1 p-1">
                            <div><a href="#"></a><i
                                    class="fa-brands fa-linkedin fa-2x btn btn-outline-primary rounded-2"></i></div>
                            <div><a href="#"></a><i
                                    class="fa-brands fa-instagram fa-2x btn btn-outline-primary rounded-2"></i>
                            </div>
                            <div><a href="#"></a><i
                                    class="fa-brands fa-twitter fa-2x btn btn-outline-primary rounded-2"></i></div>
                            <div><a href="#"></a><i
                                    class="fa-brands fa-facebook fa-2x btn btn-outline-primary rounded-2"></i></div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- footer part end here  -->


        </div>
        <!-- 2nd row end hrer  -->

    </section>


    <!-- footer manu section start here  -->
    <section>
        <div>
            <div class="row nav border color">
                <div class="col-8">
                    <div class="d-flex justify-content-evenly m-1 gap-5">
                        <ul class="d-flex justify-content-evenly gap-5 list-unstyled footer-manu">
                            <li><a href="#">contuct</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Condition</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Re-seller</a></li>
                            <li><a href="#">Gide</a></li>
                        </ul>
                        <form action="#">
                            <div class="d-flex search ">
                                <input class="border rounded" type="text" placeholder="Search.." name="search">
                                <button class="border rounded" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer manu section end here  -->
    <section>

        <div class="bg-light">
            <img class="img-size-footer" src="assets/images/paywith.png" alt="">
        </div>
    </section>
    <div class="justify-content-center d-flex border rounded color "><span class="text-center"><i
                class="fa fa-copyright" aria-hidden="true"></i>Shataj soft all right reserve</span></i>
    </div>
</div>
@endsection
