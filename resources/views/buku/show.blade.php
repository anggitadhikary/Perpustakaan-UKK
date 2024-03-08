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
                            <img src="{{ Storage::url('public/buku/') . $buku->gambar }}" alt="" class="img-fluid"
                                style="max-height: 320px; border-radius: 5px;">
                        </div>

                        <h2 class="text-center mt-3">{{ $buku->judul }}</h2>

                        <div class="d-flex justify-content-evenly">
                            <p><i class="bi bi-tag" style="color: #6476ff"></i> : {{ $buku->kategori->nm_kategori }}</p>
                            <p><i class="bi bi-person-fill" style="color: #6476ff"></i> : {{ $buku->penulis }}</p>
                            <p><i class="bi bi-tag" style="color: #6476ff"></i> : {{ $buku->penerbit }}</p>
                            <p><i class="bi bi-calendar" style="color: #6476ff"></i> : {{ $buku->tahunterbit }}</p>
                        </div>

                        <div class="mt-3">
                            <p>{{ $buku->deskripsi }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
