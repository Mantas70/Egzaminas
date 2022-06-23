@extends('main')
@section('content')
    <div class="container-fluid m-5">
        <h2 class="text-center m-5">View Queries</h2>
        <table class="table table-bordered table-striped">
            <tr class="text-center">
                <th>Username</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
            @foreach($queries as $query)
            <tr class="text-center">
                <td>{{$query->user->name}}</td>
               <td>{{$query->description}}</td>
                @if ($query->active == '1')
                    <td><a class="btn btn-warning">Pending</a></td>
                @else
                    <td><a class="btn btn-danger">Solved</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
@endsection
