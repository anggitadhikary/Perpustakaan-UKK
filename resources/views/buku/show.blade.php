@extends('Layoutdashboard.template')
@section('content')
    <div class="pagetitle">
        <h1>Blog Detail</h1>
    </div>
    <!-- End Page Title -->
    <section class="section">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between pt-4 pb-4">
                            <a href='{{ url('buku') }}' class="btn btn-secondary">Back</a>
                        </div>

                        <div class="post-img mt-3 mx-auto text-center">
                            <img src="" alt="" class="img-fluid"
                                style="max-height: 320px; border-radius: 5px;">
                        </div>
                        <h2 class="text-center mt-3">judul</h2>


                        <div class="mt-3">
                            <p>judul</p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
