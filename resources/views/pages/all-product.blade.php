@extends('layout.app')

@section('content')
    <section>
        <div class="container py-5">
            <h2 class="mb-5">our all products</h2>
            <div class="row flex-wrap">
                @if($products)
                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <a href="/products/{{ $product->id }}/{{$product->title}}" class="d-inline-block card-img">
                                    <img src="{{ asset('/uploads/'. $product->image) }}" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body text-start p-3">
                                    <h5 class="card-title">
                                        <a href="/products/{{$product->id}}/{{$product->title}}">{{ $product->title }}</a>
                                    </h5>
                                    <p class="card-text mb-3">{{ $product->description }}</p>
                                    <a href="/products/{{ $product->id }}/{{$product->title}}" class="d-block card-link text-center">View Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
