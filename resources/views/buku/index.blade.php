@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table Buku</h5>
            <a class="btn btn-primary btn-sm mb-3" title="Create" href="{{ url('buku/create') }}" role="button"><i
                    class="bi bi-plus-lg"></i> Create</a>

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col-1">#</th>
                        <th scope="col-3">Gambar</th>
                        <th scope="col-2">Judul</th>
                        <th scope="col-2">Deskripsi</th>
                        <th scope="col-1">Stok Buku</th>
                        <th scope="col-1">Kategori</th>
                        <th scope="col-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = $buku->firstItem(); ?>
                    @forelse($buku as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td> <img src="{{ Storage::url('public/buku/') . $item->gambar }}" class="rounded"
                                    style="width: 250px">
                            </td>
                            <td>{{ $item->judul }}</td>

                            <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->kategori->nm_kategori ?? '' }}</td>
                            <td>
                                <a href='{{ url('buku/' . $item->id_buku) }}' class="btn btn-success btn-sm"
                                    title="View"><i class="bi bi-eye"></i></a>

                                <a href='{{ url('buku/' . $item->id_buku . '/edit') }}' class="btn btn-warning btn-sm"
                                    title="Edit"><i class="bi bi-pencil-square"></i></a>

                                <form action="{{ url('buku/' . $item->id_buku) }}" class="d-inline" method="POST"
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
            {{ $buku->links() }}
        </div>
    </div>
@endsection
