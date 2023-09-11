@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vehicle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<p align="right">
<a href="{{ route('vehicle.tambah') }}"><button class="btn btn-primary">Tambah</button></a>
</p>
                    <table border="1" class="table table-bordered">
                        <thead>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <td>Action</th>
                        </thead>
                        <tbody>
                        @foreach ($vehicles as $row )
                        <tr>
                            <td>{{ $row-> brand }}</td>
                            <td>{{ $row-> model }}</td>
                            <td>{{ $row-> type }}</td>
                            <td>{{ $row-> year }}</td>
                            <td>


                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
