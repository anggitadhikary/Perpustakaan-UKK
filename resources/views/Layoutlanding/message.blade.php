@if (Session::has('success'))
    <div class="pt-3">
        <div class="alert alert-success text-center">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if (Session::has('error'))
    <div class="pt-2">
        <div class="alert alert-danger text-center">
            {{ Session::get('error') }}

        </div>
    </div>
@endif
