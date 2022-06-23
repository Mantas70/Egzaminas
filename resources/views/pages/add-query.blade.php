@extends('main')
@section('content')
    <h2 class="text-center m-4">Send Query to Worker</h2>
    @include('_partials/errors')
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="description" class="form-control mb-2" placeholder="Describe the issue">
        </div>
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </form>
@endsection
