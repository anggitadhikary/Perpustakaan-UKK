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
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Stok Buku</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = $user->firstItem(); ?>
                    @forelse($user as $item)
                        <tr>
                            <th>{{ $i }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td>{{ $item->role }}</td>
                    
                            <td>
                                <a href='{{ url('user/' . $item->id) }}' class="btn btn-success btn-sm"
                                    title="View"><i class="bi bi-eye"></i></a>
                                <a href='{{ url('user/' . $item->id . '/edit') }}' class="btn btn-warning btn-sm"
                                    title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ url('user/' . $item->id) }}" class="d-inline" method="POST"
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
            {{-- {{ $buku->links() }} --}}
        </div>
    </div>
@endsection
