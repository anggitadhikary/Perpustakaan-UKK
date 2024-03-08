@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table Kategori</h5>
            <a class="btn btn-primary btn-sm mb-3" title="Create" href="{{ url('kategori/create') }}" role="button"><i
                    class="bi bi-plus-lg"></i> Create</a>

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col-1">#</th>
                        <th scope="col-6">Kategori</th>
                        <th scope="col-5">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = $kategori->firstItem(); ?>
                    @forelse($kategori as $item)
                        <tr>
                            <th>{{ $i }}</th>
                            <td>{{ $item->nm_kategori }}</td>
                            <td>
                                <a href='{{ url('kategori/' . $item->id_kategori . '/edit') }}'
                                    class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil-square"></i></a>

                                <form action="{{ url('kategori/' . $item->id_kategori) }}" class="d-inline" method="POST"
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
            {{ $kategori->links() }}
        </div>
    </div>
@endsection
