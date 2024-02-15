<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - RSM</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
</head>
<body style="min-height: 100vh;background:#fff;">
    <section class="bg-white">
        <div class="side-bar bg-dark">
            <ul class="d-flex flex-column gap-3 ps-4 pt-5">
                <li>
                    <a href="{{ route('dashboard')}}" class="text-white p-2 d-flex align-items-center fw-medium gap-2">
                    <i class="fa-solid fa-house-circle-check"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.products')}}" class="text-white p-2 d-flex align-items-center fw-medium gap-2">
                    <i class="fa-solid fa-box-open"></i>Product
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.services') }}" class="text-white p-2 d-flex align-items-center  fw-medium gap-2">
                    <i class="fa-solid fa-list-check"></i>Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.clients') }}" class="text-white p-2 d-flex align-items-center  fw-medium gap-2">
                    <i class="fa-solid fa-users"></i>Clients
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.brands') }}" class="text-white p-2 d-flex align-items-center  fw-medium gap-2">
                        <i class="fa-brands fa-windows"></i>Brands
                    </a>
                </li>
                <li>
                    <a href="/setting" class="text-white p-2 d-flex align-items-center fw-medium gap-2">
                    <i class="fa-solid fa-gear"></i> Settings
                    </a>
                </li>
            </ul>
        </div>
        <div class="dashboard-content">
            <a href="{{ route('home')}}" target="_blank" class="btn btn-secondary">Visit Website</a>
            @yield('content')
        </div>
    </section>
    <script src="{{  asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
