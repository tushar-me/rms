@extends('layout.app-2')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between pt-3 pb-5">
            <h2>Add New Product</h2>
            <div>
                <a href="{{  route('dashboard.products')}}" class="btn btn-primary py-2 px-4">All Product</a>
            </div>
        </div>

        <form method="post" class="border p-5 shadow" action="/product/store" enctype="multipart/form-data">
            @csrf
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Product title</label>
            <div class="col-sm-10">
            <input type="text" class="form-control border-dark" id="title" name="title" style="height:50px">
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Product Description</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control border-dark" id="description"  name="description" style="height:300px"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Product Image</label>
            <div class="col-sm-10">
                <input class="form-control border-dark" type="file" id="image" name="image" style="padding:10px">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 py-2 px-4">Add Product</button>
        </form>
    </div>
@endsection
