@extends('main')
@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row m-5 justify-content-center">
            <div class="col-md-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <a class="text-decoration-none" href="/add-query">
                        <div class="card border border-5 bg-info rounded p-0 m-4" style="width: 20rem;height: 18rem">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <h2 class="text-black">Post a Query</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <a class="text-decoration-none" href="/view-queries">
                        <div class="card border border-5 bg-success rounded p-0 m-4" style="width: 20rem;height: 18rem">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <h2 class="text-black">My Queries</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
