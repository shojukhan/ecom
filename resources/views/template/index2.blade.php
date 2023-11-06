<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project 2</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<body class="container-fluid">
    <!-- header top manu start  -->
    <!-- header top manu start  -->
    <section>
        <div class="row m-3 bg-light align-item-center">
            <div class="col-2 mt-2">
                <img src="assets/images/logo-1.png" alt="">
            </div>
            <div class="col-7 mt-2">
                <form class="ms-5" action="#">
                    <input class="search-box" type="text" placeholder="Search.." name="search">
                    <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-3 d-flex justify-content-evenly align-item-center mt-2">
                <div><a class="btn btn-outline-primary border rounded" href="#"> <i class="fa-solid fa-house-user"></i>&nbsp; Home</a></div>
                <div><a class="btn btn-outline-primary border rounded" href="#"><i class="fa-solid fa-language"></i>&nbsp; En/Bn</a></div>
                <div><a class="btn btn-outline-primary border rounded" href="#"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;Login</a></div>
            </div>
        </div>
    </section>
    <!-- header top manu end  -->

    <!-- site manu start here  -->
    <!-- aside bar contain box -->
    <div class="row">
        <div class="col-lg-2" style="background-color: aliceblue;">

            <div class="d-flex justify-content-evenly">
                <a href="#">
                    <div class="card border rounded size btn btn-outline-primary"><i class="fa-solid fa-cookie-bite fa-beat-fade icon-manu "></i></div>
                </a>
                <a href="#">
                    <div class="card border rounded size btn btn-outline-primary"><i class="fa-solid fa-prescription-bottle-medical fa-beat-fade icon-manu"></i></div>
                </a>
                <a href="#">
                    <div class="card border rounded size btn btn-outline-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade icon-manu "></i></div>
                </a>
            </div>



            <!-- manu bar  -->
            <div class="main-menu">
                <ul class="menu">
                    <li><a href="#">Dashboard <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">block 1</a></li>
                            <li><a href="#">block 2</a></li>
                            <li><a href="#">block 3</a></li>
                            <li><a href="#">block 4</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Patient Add <i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">block 1</a></li>
                            <li><a href="#">block 2</a></li>
                            <li><a href="#">block 3</a></li>
                            <li><a href="#">block 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Setting<i class="fa fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">block 1</a></li>
                            <li><a href="#">block 2</a></li>
                            <li><a href="#">block 3</a></li>
                            <li><a href="#">block 4</a></li>
                        </ul>
                    </li>

                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contuct us</a></li>
                    <li><a href="#">help</a></li>
                    <li><a href="#">Report</a></li>
                    <li><a href="#">invoice</a></li>
                </ul>
            </div>

            <hr>
            <div class="d-flex justify-content-evenly">
                <a href="#">
                    <div class="card border rounded sizes btn btn-outline-primary">Help</div>
                </a>
                <a href="#">
                    <div class="card border rounded sizes btn btn-outline-primary">Complain</div>
                </a>
            </div>



        </div>
        <!-- site manu end here  -->



        <!-- main content start here  -->
        <div class="col-10">
            <section>
                <div class="bg-light mt-2">
                    <div class="row d-flex">
                        <div class="col-lg-12 col-sm-12 col-md-12 justify-content-center">
                            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="slide-img" src="assets/images/vivi slide.jpg" class="d-block w-100"
                                            alt="slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="slide-img" src="assets/images/vivi slide.jpg" class="d-block w-100"
                                            alt="slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="slide-img" src="assets/images/vivi slide.jpg" class="d-block w-100"
                                            alt="slide 3">
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
                        </div>
                    </div>
                </div>
            </section>

            <!-- catagory section here  -->
            <section>
                <div class="d-flex justify-content-center mt-2"> <span class="fs-1x text-align-center fw-bolder">Our
                        Product Catagories</span></div>
                <div class="row container">
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                    <div class="catagory_card col-3">Foot and vagitable</div>
                </div>
            </section>

            <!-- product scetion  start-->
            <!-- product 1st row  -->
            <section>
                <div class="row mt-4">
                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product 2nd row  -->

            <section>
                <div class="row mt-4">
                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-button" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-button" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="item-card">
                            <div class="item-img">
                                <div class="item-img-background"></div>
                                <img src="assets/images/slide 1.png">
                            </div>
                            <div class="item-title">
                                <p class="d-flex justify-content-center border rounded">smart watch</p>
                            </div>
                            <div class="item-info">
                                <div class="prices"><span class="d-flex justify-content-center border rounded p-2">299,0
                                        TK</span></div>
                            </div>
                            <div class="item-bottom">
                                <button class="item-add" type="button" class="favorites">
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                                <button class="item-add" type="button" class="carts">
                                    <span>Add to card</span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="hr-style">
            <!-- product section end here  -->

            <div class="row bg-light">
                <div class="col-4 d-flex gap-3">
                    <span><i class="fa-solid fa-truck"></i>&nbsp;30 Minites </span>
                    <span><i class="fa-solid fa-sack-dollar"></i> &nbsp;Cash on Deilivery</span>
                </div>
                <div class="col-4"></div>
                <div class="col-4 d-flex justify-content-evenly gap-1">
                    <div>pay with:</div>
                    <div class="d-flex justify-content-evenly align-item-center gap-3">
                        <div><i class="fa-brands fa-cc-paypal icon-manu"></i></div>
                        <div><i class="fa-solid fa-credit-card icon-manu"></i></div>
                        <div><i class="fa-solid fa-comments-dollar icon-manu"></i></div>
                        <div><i class="fa-regular fa-money-bill-1 icon-manu"></i></div>
                        <div><i class="fa-solid fa-rocket icon-manu"></i></div>
                    </div>
                </div>
            </div>

            <!-- footer part  -->
            <section>
                <div class="row mt-4">
                    <div class="col-4 d-flex gap-3">
                        <div><a href="#"><img src="assets/images/logo-1.png" alt="logo">
                                <br><span class="text-dark bg-light mt-5">Dolores diam voluptua magna labore sed sanctus
                                    amet vero voluptua.</span> </a></div>
                    </div>
                    <div class="col-3">
                        <div class="text-dark fw-bold "><a href="#">customer service</a> </div>
                        <div><a href="#">Faq </a></div>
                        <div><a href="#">contuct us </a></div>
                    </div>
                    <div class="col-5 d-flex justify-content-center align-item-center gap-5">
                        <div>
                            <div><a href="#">About us</a></div>
                            <div><a href="#">privacy Policy</a></div>
                            <div><a href="#">Term of use</a></div>
                        </div>
                        <div class="d-flex justify-content-center gap-1">
                            <img class="footer-image" src="assets/images/playsore.png" alt="logo">
                            <img class="footer-image" src="assets/images/app store.png" alt="logo">
                        </div>
                    </div>
                </div>
            </section>

            <!-- social media link  -->
            <section>
                <div>
                    <div class="col-lg-12 col-sm-12 text-end"><span class="fs-5 fw-bold"
                            style="margin-right: 64px;border-radius: 4px;">Sosil Media</span>
                        <div class="d-flex justify-content-end gap-2 m-1 p-1">
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



























        </div>
        <!-- main conten end here  -->


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
        <script src="assets/js/style.js"></script>
        <script src="https://kit.fontawesome.com/d13ba7a991.js" crossorigin="anonymous"></script>
</body>

</html>