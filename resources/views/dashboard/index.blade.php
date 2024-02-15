@extends('layout.app-2')

@section('content')
    <div class="rounded text-bg-warning p-5 mt-5 shadow">
        <h1  class="text-dark fw-bold mt-2">Wellcome To Dashboard</h1>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-12 ">
            <div class=" rounded shadow p-4 d-flex align-items-center justify-content-between mb-4">
                <p>Total Product</p>
                <p>{{ $products }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class=" rounded shadow p-4 d-flex align-items-center justify-content-between mb-4">
                <p>Clients</p>
                <p>{{ $clients }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class=" rounded shadow p-4 d-flex align-items-center justify-content-between mb-4">
                <p>Services</p>
                <p>{{ $services }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <div class=" rounded shadow p-4 d-flex align-items-center justify-content-between mb-4">
                <p>Brands</p>
                <p>{{ $brands }}</p>
            </div>
        </div>
    </div>
@endsection
