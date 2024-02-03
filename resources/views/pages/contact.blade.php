@extends('layout.app')

@section('content')
    <section class="contact">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 mb-5 ps-lg-5">
                    <div class=" d-block d-lg-inline-block">
                        <h3 class="mb-4">Contact US</h3>
                        <a href="#" class="d-flex align-items-center gap-2 widget bg-white shadow p-4 rounded mb-3">
                            <div>
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <h4>(219) 555-0114</h4>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center gap-2 widget bg-white shadow p-4 rounded mb-3">
                            <div>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4>example@email.com</h4>
                            </div>
                        </a>
                        <a href="#" class="d-flex align-items-center gap-2 widget bg-white shadow p-4 rounded mb-3">
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4>Dhaka Bangladesh</h4>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-12">
                    <form action="">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="d-block mb-1">Name</label>
                            <input type="text" name="name" id="name" class="w-100 border p-2">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="d-block mb-1">Email</label>
                            <input type="email" name="email" id="email" class="w-100 border p-2">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="d-block mb-1">Message</label>
                            <textarea name="message" id="message" rows="10" class="w-100 border p-2"></textarea>
                        </div>
                        <button type="submit" class="primary-button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection