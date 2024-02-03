@extends('layout.app-2')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between pt-3 pb-5">
            <h2>Edit Client</h2>
        </div>

        <form method="post" class="border p-5 shadow" action="/client/{{ $client->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Company Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border-dark" value="{{ $client->title }}" id="title" name="title" style="height:50px">
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Client Logo</label>
                <div class="col-sm-10">
                    <div>
                        <p>Old Logo..</p>
                        <img src="{{ asset('uploads/'. $client->image) }}" style="width:150px;height:auto;" alt="">
                    </div>
                    <p class="py-2 text-success">Add new logo</p>
                    <input class="form-control border-dark" type="file" id="image" name="image" style="padding:10px">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 py-2 px-4">Update Client</button>
        </form>
    </div>
@endsection
