@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h1 class="text-center py-5">Our Clients</h1>
            <div class="row flex-wrap py-4">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <a href="#" class="w-100 h-100">
                        <img src="{{ asset('images/client-1.jpg')}}" class="w-100 h-100 object-fit-cover" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection