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
                    <div class="row">
                        <div class="col-lg-6">
                        <table class="table table-bordered">
<tr><td>Brand</td><td><input type="text" name="brand" id="brand" class="form-control"></td></tr>
<tr><td>Model</td><td><input type="text" name="model" id="model" class="form-control"></td></tr>
<tr><td>Type</td><td><input type="text" name="type" id="type" class="form-control"></td></tr>
<tr><td>Year</td><td><input type="text" name="year" id="year" class="form-control"></td></tr>
<tr><td colspan="2"><input type="submit" class="btn btn-primary" value="Submit"></td><tr>
</table>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
