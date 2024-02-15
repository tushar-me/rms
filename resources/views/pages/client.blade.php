@extends('layout.app')

@section('content')
    <section class="client-section-all">
        <div class="container">
            <h1 class="text-center py-5 text-white">Our Clients</h1>
            <div class="row flex-wrap py-4">
                @foreach ( $clients as $client)
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 p-2 bg-white d-inline-block text-center p-3" style="border-radius:26px">
                        <img src="{{ asset('uploads/'. $client->image)}}" class="w-100" style="height: 220px" alt="">
                        <h3 class="py-1">{{ $client->title }}</h3>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection