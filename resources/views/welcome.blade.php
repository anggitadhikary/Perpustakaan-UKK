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
                            <h4>Welcome To</h4>
                            <h1>Litlend</h1>
                            {{-- <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth
                                without morning over third. Their male dry. They are great appear whose land fly grass.</p> --}}
                            {{-- <a class="button button-hero" href="#">Browse Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Hero banner start =================-->

        <!-- ================ trending product section start ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>New Book in the market</p>
                    <h2>New <span class="section-intro__style">Book</span></h2>
                </div>
                <div class="row">

                    @foreach ($buku as $book)
                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="card-img" src="{{ Storage::url('public/buku/') . $book->gambar }}"
                                        alt="">

                                </div>
                                <div class="card-body">
                                    <p>{{ $book->genre }}</p>
                                    <h4 class="card-product__title"><a
                                            href="{{ url('Buku/detail/' . $book->slug) }}">{{ $book->judul }}</a>
                                    </h4>
                                    {{-- <p class="card-product__price">$150.00</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- ================ trending product section end ================= -->

        <section>
            <div class="container">
                <div class="section-intro pb-60px text-center">
                    <p>Location</p>
                    <h2>Our Library <span class="section-intro__style">Location</span></h2>
                </div>
                <div class="text-center pb-4 row">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.623033233787!2d106.8243454744824!3d-6.181182593806282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f442596e0c93%3A0x4ba58be40979fe36!2sNational%20Library%20of%20the%20Republic%20of%20Indonesia!5e0!3m2!1sen!2sid!4v1708152870124!5m2!1sen!2sid"
                        width="1100" height="450" style="border-radius: 10px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="shadow col-lg-12 col-md-12 col-sm-6"></iframe>
                </div>
            </div>
        </section>

    </main>
@endsection
