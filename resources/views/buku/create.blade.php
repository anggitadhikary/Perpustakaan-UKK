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
                        <img class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: 450px; height: 280px;">
                        <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    </div>
                </div>
                <div class="col-12">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="judul">
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
                    <label for="deksripsi" class="form-label">Deksripsi</label>
                    <input type="text" class="form-control" id="deksripsi" name="deksripsi">
                </div>
                <div class="col-12">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok">
                </div>
                <div class="col-12">
                    <label for="genre" class="form-label">Genre</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                            <option selected>Open this select menu</option>
                            <option value="fantasy">fantasy</option>
                            <option value="romance">romance</option>
                            <option value="action">action</option>
                            <option value="comedy">comedy</option>
                            <option value="sci-fi">sci-fi</option>
                            <option value="adventure">adventure</option>
                            <option value="thriller">thriller</option>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
