@extends('layout.app')

@section('content')
<div class="main">
    <section class="position-relative">
        <div class="hero-items">
            <div class="hero-item">
                <img src="{{ asset('images/new-bg.jpeg')}}" alt="">
            </div>
            <div class="hero-item">
                <img src="{{ asset('images/WEB02.webp')}}" alt="">
            </div>
            <div class="hero-item">
                <img src="{{ asset('images/1103.png')}}" alt="">
            </div>
        </div>
        <div class="slider-btn">
            <button class="hero-slider-prev-button">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="hero-slider-next-button">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </section>
    @if(count($products) !== 0)
        <section class="product-section">
        <div class="container py-5">
            <h2 class="mb-5 text-white fs-1 fw-semibold">our products</h2>
            <div class="row flex-wrap justify-content-center">
                @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card">
                            <a href="/products/{{$product->id}}/{{$product->title}}" class="d-inline-block card-img p-2">
                                <img src="{{ asset('/uploads/'. $product->image) }}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body text-start p-3 pt-2">
                                <h5 class="card-title text-start mb-3">
                                    <a href="/products/{{$product->id}}/{{$product->title}}">{{ $product->title }}</a>
                                </h5>
                                <a href="/products/{{$product->id}}/{{$product->title}}" class="d-block card-link text-center">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('product.all') }}" class="fs-5 fw-normal product-all text-white">
                    Explore All Products
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </section>
    @endif
    @if(count($services) !== 0)
        <section class="services-section">
            <div class="container py-5">
                <h2 class="mb-5 text-white fs-1 fw-semibold">our services</h2>
                <div class="row flex-wrap justify-content-center">
                    @foreach($services as $service)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card services-card text-center shadow">
                                <div class="services-card-icon text-center">
                                    <img src="{{ asset('/uploads/'.$service->image)}}">
                                </div>
                                <div class="card-body">
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{$service->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <div class="client-brand">
        @if (count($clients) !== 0)
    <section class="b client-section py-5">
        <div class="container">
            <h2 class="mb-5 text-white fs-1 fw-semibold">our clients</h2>
            <div class="position-relative">
                <div class="client-items">
                    @foreach ( $clients as $client)
                    <div class="mx-2" >
                        <a href="#" class="client shadow bg-white text-center">
                            <img class="card-img-top" src="{{ asset('/uploads/'.$client->image)}}" alt="Client" />
                            <p class="pt-2">{{ $client->title }}</p>
                        </a>
                    </div>
                    @endforeach

                </div>
                {{-- <div class="slider-btn-client">
                    <button class="client-slider-prev-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="client-slider-next-button">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div> --}}
            </div>
        </div>
    </section>
    @endif
    @if (count($brands) !== 0)
    <section class="py-5 brand-section">
        <div class="container py-5" style="max-width: 999px;">
            <h2 class="mb-5 text-white fs-1 fw-semibold">Brands</h2>
            <div class="position-relative">
                <div class="brand-items">
                    @foreach ( $brands as $brand)
                    <div class="mx-2" >
                        <a href="#" class="client shadow bg-white text-center">
                            <img class="card-img-top" src="{{ asset('/uploads/'. $brand->image)}}" alt="Client" />
                            <p class="pt-2">{{ $brand->name }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="slider-btn-client">
                    <button class="client-slider-prev-button">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="client-slider-next-button">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div> --}}
            </div>
        </div>
    </section>
    @endif
    </div>
</div>
@endsection
