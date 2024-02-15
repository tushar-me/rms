<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSM - Engineering @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
</head>
<body>
    @include('layout.navigation')
    <main>
        @yield('content')
        <div class="chat">
            <a href="https://wa.me/{{ $setting->phone }}" target="_blank" class="whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="{{$setting->facebook_link}}" target="_blank" class="facebook">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>

    </main>
    @include('layout.footer')
    <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="{{  asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>