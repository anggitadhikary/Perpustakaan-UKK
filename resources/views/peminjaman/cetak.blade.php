@extends('Layoutdashboard.templatecetak')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Laporan Peminjaman</h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $pinjam->firstItem(); ?>
                    @foreach ($pinjam as $item)
                        <tr>
                            <th>{{ $i }}</th>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->tanggal_pinjam }}</td>
                            <td>{{ $item->tanggal_kembali }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>
                                @if ($item->status == '0')
                                    Belum di kembalikan
                                @else
                                    Sudah di kembalikan
                                @endif
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
    <script>
        window.print()
    </script>
@endsection
