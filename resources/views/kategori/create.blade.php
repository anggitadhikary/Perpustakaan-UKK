@extends('Layoutdashboard.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Kategori</h5>

            <!-- Vertical Form -->
            <form action='{{ url('kategori') }}' method='post' class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="nm_kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="nm_kategori" name="nm_kategori">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
