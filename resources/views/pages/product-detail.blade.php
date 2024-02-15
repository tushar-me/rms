@extends('layout.app')

@section('content')
    <section class="product-detail">
        <div class="bg-white">
            <img src="{{  asset('/uploads/'. $product->image)}}" alt="">
        </div>
        <div class="container py-5">
            <div class="mt-4 ">
                <h3 class="mb-3 text-white">{{ $product->title }}</h3>
                <p class="text-white">{{ $product->description }}</p>
            </div>
        </div>
    </section>
@endsection
