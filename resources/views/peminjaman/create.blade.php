@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Peminjaman</h5>

            <!-- Vertical Form -->
            <form action='{{ url('pinjam') }}' method='post' class="row g-3" enctype="multipart/form-data">
                @csrf

                <div class="col-12">
                    <label for="id_buku" class="form-label">Buku</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_buku" id="id_buku">
                            <option selected>Open this select menu</option>
                            @foreach ($bukuList as $buku)
                                <option value="{{ $buku->id_buku }}">{{ $buku->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label for="id_user" class="form-label">User</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_user" id="id_user">
                            <option selected>Open this select menu</option>
                            @foreach ($peminjamList as $peminjam)
                                <option value="{{ $peminjam->id }}">{{ $peminjam->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                </div>
                <div class="col-12">
                    <label for="tanggal_kembali" class="form-label">Tahun Terbit</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                </div>
                <div class="col-12">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
