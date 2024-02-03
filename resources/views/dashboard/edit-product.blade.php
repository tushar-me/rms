@extends('layout.app-2')

@section('content')
    <div>
        <div class="d-flex align-items-center justify-content-between pt-3 pb-5">
            <h2>Edit Product</h2>
        </div>

        <form class="border p-5 shadow" method="post" action="/product/{{ $product->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Product title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control border-dark" id="title" name="title" value="{{ $product->title }}" style="height:50px">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Product Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control border-dark" id="description" name="description" style="height:300px">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Product Image</label>
                <div class="col-sm-10">
                    <div>
                        <p>Old Image..</p>
                        <img src="{{ asset('uploads/'. $product->image) }}" style="width:150px;height:auto;" alt="">
                    </div>
                    <p class="py-2 text-success">Add new image</p>
                    <input class="form-control border-dark" type="file" id="image" name="image" style="padding:10px">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 py-2 px-4">Update Product</button>
        </form>
    </div>
@endsection
