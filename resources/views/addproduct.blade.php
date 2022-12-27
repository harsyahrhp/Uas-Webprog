@extends('template')
@section('title', 'Add Product')
@section('content')
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center my-5">
    <div class=" shadow-lg justify-content-center d-flex flex-column align-items-center" style="width: 50vw">
        <div class="display-4 m-2">Add Product</div>
        <form class="bg-light p-5" action="/addproduct" method="POST" enctype="multipart/form-data" style="width: 50vw">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label" value="">Category</label>
                <select id="category" class="form-control selector" name="category">
                    <option value="" disabled selected>Select a Category</option>
                    @foreach ($categories as $category)
                        <option value={{$category->name}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Detail</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="photo_path" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo_path" name="photo_path">
            </div>
            <button type="submit" class="btn btn-primary" value="Add">Add</button>
            <div class="mt-5"><a href="/showproduct">Back</a></div>
        </form>
    </div>
</div>
@endsection
