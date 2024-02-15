@extends('layout.app')

@section('content')
    <section class="about-section">
        <div class="container py-5">
            <h1 class="text-center mb-2 text-white">About Us</h1>
            <p style="max-width: 700px" class="text-center mx-auto text-white">{{ $setting->about }}</p>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12" >
                    <a href="#" class="client shadow bg-white text-center h-100 mb-3 lg-mb-0">
                        <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('images/vector-4.png')}}" alt="Client" />
                        <p class="py-3 fw-semibold">PROACTIVENESS</p> 
                        <p style="font-size: 14px">Constantly preparing and proactively seeking the best solutions to any challenge.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12" >
                    <a href="#" class="client shadow bg-white text-center h-100 mb-3 lg-mb-0">
                        <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('images/vector-2.png')}}" alt="Client" />
                        <p class="py-3 fw-semibold">COMMITMENT</p> 
                        <p style="font-size: 14px">We are committed to fulfilling our promises and accompanying clients and partners to success.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12" >
                    <a href="#" class="client shadow bg-white text-center h-100 mb-3 lg-mb-0">
                        <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('images/vector-3.png')}}" alt="Client" />
                        <p class="py-3 fw-semibold">COOPERATION</p> 
                        <p style="font-size: 14px">Being open-minded and clear in communication, always listening and comprehending.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12" >
                    <a href="#" class="client shadow bg-white text-center h-100 mb-3 lg-mb-0">
                        <img style="width:100px; height:100px;" class="card-img-top" src="{{ asset('images/vector-1.png')}}" alt="Client" />
                        <p class="py-3 fw-semibold">INTEGRITY</p> 
                        <p style="font-size: 14px">Maintaining honesty in communication and at work. Forbidding to conceal the truth or to do bribery and embezzlement.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection