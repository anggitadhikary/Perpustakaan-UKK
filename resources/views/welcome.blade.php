@extends('Layoutlanding.template')
@section('content')
    <main class="site-main">

        <!--================ Hero banner start =================-->
        <section class="hero-banner">
            <div class="container">
                <div class="row no-gutters align-items-center pt-60px">
                    <div class="col-5 d-none d-sm-block">
                        <div class="hero-banner__img">
                            <img class="img-fluid" src="img/home/hero-banner.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                        <div class="hero-banner__content">
                            <h4>Selamat Datang di Perspustakaan </h4>
                            <h1>Raamatukogu</h1>
                            {{-- <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth
                                without morning over third. Their male dry. They are great appear whose land fly grass.</p> --}}
                            {{-- <a class="button button-hero" href="#">Browse Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Hero banner start =================-->

        <!--================ Hero Carousel start =================-->
        {{-- <section class="section-margin mt-0">
            <div class="owl-carousel owl-theme hero-carousel">
                <div class="hero-carousel__slide">
                    <img src="img/Book-cover/bookcover-fantasy.jpg" alt="" class="img-fluid">
                    <a href="#" class="hero-carousel__slideOverlay">
                        <h3>Wireless Headphone</h3>
                        <p>Accessories Item</p>
                    </a>
                </div>
                <div class="hero-carousel__slide">
                    <img src="img/Book-cover/bookcover-fantasy2.png" alt="" class="img-fluid">
                    <a href="#" class="hero-carousel__slideOverlay">
                        <h3>Wireless Headphone</h3>
                        <p>Accessories Item</p>
                    </a>
                </div>
                <div class="hero-carousel__slide">
                    <img src="img/Book-cover/bookcover-fantasy3.png" alt="" class="img-fluid">
                    <a href="#" class="hero-carousel__slideOverlay">
                        <h3>Wireless Headphone</h3>
                        <p>Accessories Item</p>
                    </a>
                </div>
                <div class="owl-carousel owl-theme hero-carousel">
                    <div class="hero-carousel__slide">
                        <img src="img/Book-cover/bookcover-fantasy.jpg" alt="" class="img-fluid">
                        <a href="#" class="hero-carousel__slideOverlay">
                            <h3>Wireless Headphone</h3>
                            <p>Accessories Item</p>
                        </a>
                    </div>
                </div>
        </section> --}}
        <!--================ Hero Carousel end =================-->

        <!-- ================ trending product section start ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Trending <span class="section-intro__style">Product</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-fantasy.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Fantasy</p>
                                <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-fantasy2.png" alt="">

                            </div>
                            <div class="card-body">
                                <p>Fantasy</p>
                                <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-romance.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Romance</p>
                                <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-action.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Action</p>
                                <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-comedy.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Comedy</p>
                                <h4 class="card-product__title"><a href="single-product.html">Man Office Bag</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-horror.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Horror</p>
                                <h4 class="card-product__title"><a href="single-product.html">Charging Car</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-scifi.jpg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Sci-Fi</p>
                                <h4 class="card-product__title"><a href="single-product.html">Blutooth Speaker</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="img/Book-cover/bookcover-nonfiksi.jpeg" alt="">

                            </div>
                            <div class="card-body">
                                <p>Non-Fiksi</p>
                                <h4 class="card-product__title"><a href="#">Charging Car</a></h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ trending product section end ================= -->


        <!-- ================ offer section start ================= -->
        <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
            data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="offer__content text-center">
                            <h3>Ayo pinjam buku </h3>
                            <h4>Ada diskon <b>5%</b> nih</h4>
                            <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ offer section end ================= -->

        <!-- ================ Best Selling item  carousel ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Best <span class="section-intro__style">Sellers</span></h2>
                </div>
                <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product1.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Accessories</p>
                            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product2.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Beauty</p>
                            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product3.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Decor</p>
                            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product4.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Decor</p>
                            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product1.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Accessories</p>
                            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product2.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Beauty</p>
                            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product3.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Decor</p>
                            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>

                    <div class="card text-center card-product">
                        <div class="card-product__img">
                            <img class="img-fluid" src="img/product/product4.png" alt="">
                            <ul class="card-product__imgOverlay">
                                <li><button><i class="bi bi-search"></i></button></li>
                                <li><button><i class="bi bi-cart"></i></button></li>
                                <li><button><i class="bi bi-heart"></i></button></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <p>Decor</p>
                            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
                            <p class="card-product__price">$150.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ Best Selling item  carousel end ================= -->
    </main>
@endsection
