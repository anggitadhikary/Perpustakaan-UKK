@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Buku</h5>

            <!-- Vertical Form -->
            <form action='{{ url('buku/' . $buku->id_buku) }}' method='post' class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        @if ($buku->gambar)
                            <img src="{{ Storage::url('public/buku/') . $buku->gambar }}" alt=""
                                class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: auto; height: 480px;">
                            <input type="hidden" name="oldImage" value="">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: auto; height: 480px;">
                        @endif
                        <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImage()">
                    </div>
                </div>
                <div class="col-12">
                    <label for="Judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="Judul" name="judul"
                        value="{{ old('judul', $buku->judul) }}">
                </div>
                <div class="col-12">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis"
                        value="{{ old('penulis', $buku->penulis) }}">
                </div>
                <div class="col-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                        value="{{ old('penerbit', $buku->penerbit) }}">
                </div>
                <div class="col-12">
                    <label for="tahunterbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahunterbit" name="tahunterbit"
                        value="{{ old('tahunterbit', $buku->tahunterbit) }}">
                </div>

                <div class="col-12">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <textarea class="form-control" style="height: 100px" id="deskripsi" name="deskripsi">{{ old('deskripsi', $buku->deskripsi) }}</textarea>
                </div>

                <div class="col-12">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stok" name="stok"
                        value="{{ old('stok', $buku->stok) }}">
                </div>
                <div class="col-12">
                    <label for="id_kategori" class="form-label">Kategori</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_kategori" id="id_kategori">
                            <option selected>Pilih Kategori</option>
                            @foreach ($kategori as $kategoris)
                                <option value="{{ $kategoris->id_kategori }}"
                                    @if ($kategoris->id_kategori == $buku->id_kategori) selected @endif>{{ $kategoris->nm_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
