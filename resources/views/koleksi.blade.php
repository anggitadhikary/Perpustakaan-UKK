@extends('Layoutlanding.template')
@section('content')
    <section class="blog-banner-area" id="category">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Book Collection</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book Collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ top product area start ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            {{-- <div class="section-intro pb-60px">
                <p>New Book in the market</p>
                <h2>New <span class="section-intro__style">Book</span></h2>
            </div> --}}
            <div class="row">

                @foreach ($koleksi as $collection)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="{{ Storage::url('public/buku/') . $collection->buku->gambar }}"
                                    alt="">

                            </div>
                            <div class="card-body">
                                <p>{{ $collection->buku->genre }}</p>
                                <h4 class="card-product__title"><a
                                        href="{{ url('Buku/detail/' . $collection->buku->slug) }}">{{ $collection->buku->judul }}</a>
                                </h4>
                                {{-- <p class="card-product__price">$150.00</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- ================ top product area end ================= -->
@endsection
