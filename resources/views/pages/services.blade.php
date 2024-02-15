@extends('layout.app')

@section('content')
    <section class="services-section-all">
        <div class="container py-5">
            <h2 class="mb-4 text-white">our services</h2>
            <div class="row flex-wrap">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card services-card text-center shadow">
                            <div class="services-card-icon text-center ">
                                <img src="{{ asset('/uploads/'. $service->image)}}" style="" alt="">
                            </div>
                            <div class="card-body">
                                <h4>{{ $service->title }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
