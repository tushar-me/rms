<footer class="border-top bg-white">
    <div class="container">
        <div class="row border-bottom pb-5">
            <div class="col-lg-5 col-md-6 col-12 pe-md-5 mb-3">
                <img src="{{ asset('/images/1000.jpeg')}}" class="logo mb-3" alt="logo">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem asperiores omnis temporibus eaque enim ipsam a expedita nam perspiciatis!</p>
            </div>
            <div class="col-lg-4 col-md-6 col-12 ps-md-5 mb-3">
                <h3 class="mb-3">Pages</h3>
                <ul class="links">
                    <li>
                        <a href="{{ route('about')}}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('product.all')}}">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('services')}}">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('client')}}">Clients</a>
                    </li>
                    <li>
                        <a href="{{ route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <h3 class="mb-3">Branch Office</h3>
                <p>Dhaka Bangladesh</p>
                <a href="#">(219) 555-0114</a>
            </div>
        </div>
    </div>
    <div class="container py-4 text-center text-lg-start d-lg-flex align-items-center justify-content-between info">
        <p>Copyright © 2024 example.com. All rights reserved.</p>
        <p>Developed By <a href="#">mabia</a></p>
    </div>
</footer>
