@extends('Layoutlanding.template')
@section('content')
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Book List</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book List</li>
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
                                        <li class="filter-list border-bottom mb-2"><a href="{{ url('category-comedy') }}"
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
                                        </div>
                                        <div class="card-body">
                                            <p>{{ $item->genre }}</p>
                                            <h4 class="card-product__title"><a
                                                    href="{{ url('Buku/detail/' . $item->slug) }}">{{ $item->judul }}</a>
                                            </h4>
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
    
    <!-- ================ top product area end ================= -->
@endsection