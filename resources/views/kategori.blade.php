@extends('Layoutlanding.template')
@section('content')
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Shop Category</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->
    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            <li class="common-filter">
                                <form action="#">
                                    <ul>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Romance</a>
                                        </li>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Action</a>
                                        </li>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Comedy</a>
                                        </li>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Fantasy</a>
                                        </li>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Horror</a>
                                        </li>
                                        <li class="filter-list border-bottom mb-2"><a href=""
                                                class="">Sci-Fi</a>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->

                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @forelse ($buku as $item)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card text-center card-product">
                                        <div class="card-product__img">
                                            <img class="card-img" src="{{ Storage::url('public/buku/') . $item->gambar }}"
                                                alt="">
                                            {{-- <ul class="card-product__imgOverlay">
                                           <li><button><i class="ti-search"></i></button></li>
                                           <li><button><i class="ti-shopping-cart"></i></button></li>
                                           <li><button><i class="ti-heart"></i></button></li>
                                       </ul> --}}
                                        </div>
                                        <div class="card-body">
                                            <p>Comedy</p>
                                            <h4 class="card-product__title"><a href="{{ url('buku-detail') }}">Quartz Belt
                                                    Watch</a></h4>
                                            {{-- <p class="card-product__price">$150.00</p> --}}
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <p>tidak ada data</p>
                            @endforelse
                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ category section end ================= -->


    <!-- ================ top product area start ================= -->
    <section class="related-product-area">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2>Top <span class="section-intro__style">Product</span></h2>
            </div>
            <div class="row mt-30 mb-2">
                <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                    <div class="single-search-product-wrapper">
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/Book-cover/bookcover-horror.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/Book-cover/bookcover-scifi.jpg" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Comedy</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                    <div class="single-search-product-wrapper">
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-4.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Romance</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-5.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-6.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                    <div class="single-search-product-wrapper">
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-7.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-8.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-9.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                    <div class="single-search-product-wrapper">
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-1.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-2.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                        <div class="single-search-product d-flex">
                            <a href="#"><img src="img/product/product-sm-3.png" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title d-flex align-items-center">Gray Coffee Cup</a>
                                <div class="price">Action</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ top product area end ================= -->
@endsection
