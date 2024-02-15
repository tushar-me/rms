@extends('layout.app')

@section('content')
    <section class="min-vh-100 d-flex align-items-center justify-content-center">
        <div class="bg-white rounded shadow py-5 px-4" style="width:100%;max-width:450px;">
            <h3 class="text-center mb-3">Login</h3>
            <form action="{{ route('dashboard.login') }}" method="POST" class="d-flex flex-column gap-4">
                @csrf
                <input type="email" name="email" placeholder="Enter email" class="p-2 border w-100">
                <input type="password" name="password" placeholder="Enter password" class="p-2 border">
                <button class="btn" style="background: #E51B2B;color:#fff" type="submit">login</button>
            </form>
        </div>
    </section>
@endsection