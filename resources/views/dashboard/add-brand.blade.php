@extends('layout.app-2')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between pt-3 pb-5">
            <h2>Add Client</h2>
            <div>
                <a href="{{  route('dashboard.brands')}}" class="btn btn-primary py-2 px-4">All Brand</a>
            </div>
        </div>

        <form method="post" class="border p-5 shadow" action="/brand/store" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Brand Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border-dark" id="name" name="name" style="height:50px">
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Brand Logo</label>
                <div class="col-sm-10">
                    <input class="form-control border-dark" type="file" id="image" name="image" style="padding:10px">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 py-2 px-4">Add Brand</button>
        </form>
    </div>
@endsection
