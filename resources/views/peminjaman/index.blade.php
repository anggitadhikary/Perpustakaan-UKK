@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table Peminjaman</h5>
            <a class="btn btn-primary btn-sm mb-3" title="Create" href="{{ url('pinjam/create') }}" role="button"><i
                    class="bi bi-plus-lg"></i> Create</a>
            <a class="btn btn-success btn-sm mb-3" title="print" href="{{ url('pinjam-cetak') }}" role="button"><i
                    class="bi bi-printer"></i> Print</a>

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Peminjam</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $pinjam->firstItem(); ?>
                    @forelse ($pinjam as $item)
                        <tr>
                            <th>{{ $i }}</th>
                            @if ($item->buku)
                                <td>{{ $item->buku->judul }}</td>
                            @else
                                <td>[Buku Dihapus]</td>
                            @endif
                            @if ($item->user)
                                <td>{{ $item->user->name }}</td>
                            @else
                                <td>[Akun Dihapus]</td>
                            @endif
                            <td>{{ $item->tanggal_pinjam }}</td>
                            <td>{{ $item->tanggal_kembali }}</td>
                            <td>{{ $item->jumlah }}</td>
                            {{-- <td>{{ $item->status }}</td> --}}
                            <td>
                                @if ($item->status == '0')
                                    Belum di kembalikan
                                @else
                                    Sudah di kembalikan
                                @endif
                            </td>
                            <td>
                                {{-- <a href='{{ url('pinjam/' . $item->id_peminjaman) }}' class="btn btn-success btn-sm"
                                    title="View"><i class="bi bi-eye"></i></a> --}}
                                @if ($item->status == '1')
                                    {{-- <a class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></a> --}}
                                @else
                                    <form action="{{ url('pinjam/' . $item->id_peminjaman) }}" class="d-inline"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <button type="submit" title="Kembalikan" name="submit"
                                            class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                    </form>
                                @endif

                                <form action="{{ url('pinjam/' . $item->id_peminjaman) }}" class="d-inline" method="POST"
                                    onsubmit="return confirm('Yakin akan menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete" name="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @empty
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            Tidak ada data
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforelse
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
            {{ $pinjam->links() }}
        </div>
    </div>
@endsection
