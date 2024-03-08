@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Buku</h5>

            <!-- Vertical Form -->
            <form action='{{ url('buku') }}' method='post' class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <img class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: auto; height: 480px;">
                        <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    </div>
                </div>
                <div class="col-12">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="col-12">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="col-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="col-12">
                    <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahunterbit" name="tahunterbit">
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <textarea class="form-control" style="height: 100px" id="deskripsi" name="deskripsi"></textarea>
                </div>
                <div class="col-12">
                    <label for="id_kategori" class="form-label">Kategori</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_kategori" id="id_kategori">
                            <option selected>Pilih Kategori</option>
                            @foreach ($kategori as $kategoris)
                                <option value="{{ $kategoris->id_kategori }}">{{ $kategoris->nm_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
