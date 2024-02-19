@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Peminjaman</h5>

            <!-- Vertical Form -->
            <form action="{{ url('pinjam/' . $pinjam->id_peminjaman ) }}" class="row g-3" method="POST">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="id_buku" class="form-label">Buku</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_buku" id="id_buku"
                            disabled>
                            <option selected>Open this select menu</option>
                            @foreach ($bukuList as $buku)
                                <option value="{{ $buku->id_buku }}"
                                    {{ $buku->id_buku == $pinjam->id_buku ? 'selected' : '' }}>
                                    {{ $buku->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label for="id_user" class="form-label">User</label>
                    <div class="col-sm-12">
                        <select class="form-select" aria-label="Default select example" name="id_user" id="id_user"
                            disabled>
                            <option selected>Open this select menu</option>
                            @foreach ($peminjamList as $peminjam)
                                <option value="{{ $peminjam->id }}"
                                    {{ $peminjam->id == $pinjam->id_user ? 'selected' : '' }}>{{ $peminjam->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam"
                        value="{{ $pinjam->tanggal_pinjam }}" disabled>
                </div>

                <div class="col-12">
                    <label for="tanggal_kembali" class="form-label">Tahun Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali"
                        value="{{ $pinjam->tanggal_kembali }}" disabled>
                </div>
                <div class="col-12">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pinjam->jumlah }}"
                        disabled>
                </div>

                <fieldset class="row mb-3 mt-4">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input  " type="radio" name="status" id="status" value="0"
                                {{ $pinjam->status == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">
                                Belum dikembalikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1"
                                {{ $pinjam->status == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">
                                Sudah dikembalikan
                            </label>
                        </div>
                    </div>
                </fieldset>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
